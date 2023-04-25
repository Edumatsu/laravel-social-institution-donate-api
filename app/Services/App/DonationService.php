<?php

namespace App\Services\App;

use App\Models\Donation;
use App\Models\Institution;
use Illuminate\Support\Arr;
use \MercadoPago;

class DonationService
{
    public function __construct()
    {
        MercadoPago\SDK::setAccessToken(env('MP_ACCESS_TOKEN'));
    }

    public function create(array $data)
    {
        $created = Donation::query()->create($data);
        $data['external_reference'] = $created->id;
        $data['preference_id'] = '';

        $preference_id = $this->createPreference($data);

        Donation::query()->where('id', $created->id)->update([
            'preference_id' => $preference_id,
        ]);

        $created->preference_id = $preference_id;

        return $created;
    }

    private function createPreference(array $data)
    {
        $institution = Institution::query()->where('id', $data['institution_id'])->first();
        $user = auth()->user();
        $preference = new MercadoPago\Preference();

        $institutionItem = new MercadoPago\Item();
        $institutionItem->title = "Doação para {$institution->name}";
        $institutionItem->quantity = 1;
        $institutionItem->unit_price = $data['institution_amount'];

        if ($data['app_amount'] > 0) {
            $appItem = new MercadoPago\Item();
            $appItem->title = "Doação para " . env('APP_NAME');
            $appItem->quantity = 1;
            $appItem->unit_price = $data['app_amount'];

            $preference->items = [$institutionItem, $appItem];
        } else {
            $preference->items = [$institutionItem];
        }

        $payer = new MercadoPago\Payer();
        $payer->name = $user->first_name;
        $payer->surname = $user->last_name;
        $payer->email = $user->email;
        $payer->date_created = $user->created_at;

        $preference->payer = $payer;

        $preference->payment_methods = [
            "excluded_payment_types" => [
                [
                    "id" => "ticket"
                ]
            ],
            "installments" => 1
        ];

        $preference->external_reference = $data['external_reference'];
        $preference->notification_url = env('MP_NOTIFICATION_URL');
        $preference->statement_descriptor = env('MP_STATEMENT_DESCRIPTOR');

        $preference->save();

        return $preference->id;
    }

    public function update(array $data)
    {
        $action = Arr::get($data, 'action');
        $type = Arr::get($data, 'type');
        $id = Arr::get($data, 'data.id');

        if ($action == "payment.created" && $type == "payment") {
            $payment = MercadoPago\Payment::find_by_id($id);

            if ($payment && $payment->status == 'approved') {
                $paymentDetails = $payment->transaction_details;
                $donation = Donation::query()->where('id', $payment->external_reference)->first();

                if ($donation && $paymentDetails) {
                    $institutionDonationPercent = $donation->institution_amount * 100 / ($donation->institution_amount + $donation->app_amount);
                    $appDonationPercent = 100 - $institutionDonationPercent;
                    $totalFee = $paymentDetails->total_paid_amount - $paymentDetails->net_received_amount;

                    $institutionFee = round(($institutionDonationPercent * $totalFee) / 100, 2);

                    if ($donation->app_amount && $appDonationPercent > 0) {
                        $appFee = round($totalFee - $institutionFee, 2);
                    }

                    Donation::query()->where('id', $payment->external_reference)->update([
                        'status' => 'completed',
                        'transaction_id' => $id,
                        'payment_institution_fee' => $institutionFee,
                        'institution_final_amount' => $donation->institution_amount - $institutionFee,
                        'payment_app_fee' => $appFee,
                        'app_final_amount' => $donation->app_amount - $appFee
                    ]);
                }
            }
        }
    }
}
