<?php

namespace App\Services\Backoffice;

use App\Models\Institution;
use App\Models\User;
use App\Models\Donation;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Services\AttachmentService;

class DashboardService
{

    private function applyFilters(array $attributes, $query)
    {
        $query = $query::query();

        if (!$attributes) {
            return $query;
        }

        if (!empty($attributes['date_start'])) {
            $query->where('created_at', '>=', $attributes['date_start'] . ' 00:00:00');
        }

        if (!empty($attributes['date_end'])) {
            $query->where('created_at', '<=', $attributes['date_end'] . ' 23:59:59');
        }

        return $query;
    }

    public function index(array $attributes)
    {
        try {
            $activeInstitutions = $this->applyFilters($attributes, new Institution)
                ->where('approved', 1)
                ->where('active', 1)->count();

            $inactiveInstitutions = $this->applyFilters($attributes, new Institution)
                ->where('active', 0)->count();

            $newUsers = $this->applyFilters($attributes, new User)->count();

            $totalInstitutionDonations = $this->applyFilters($attributes, new Donation)
                ->where('status', 'completed')->count();

            $totalAppDonations = $this->applyFilters($attributes, new Donation)
                ->where('status', 'completed')
                ->where('app_amount', '>', 0)->count();

            $totalInstitutionDonationValue = $this->applyFilters($attributes, new Donation)
                ->where('status', 'completed')->sum('institution_amount');

            $totaAppDonationValue = $this->applyFilters($attributes, new Donation)
                ->where('status', 'completed')->sum('app_amount');

            $totalInstitutionFee = $this->applyFilters($attributes, new Donation)
                ->where('status', 'completed')->sum('payment_institution_fee');

            $totaAppFee = $this->applyFilters($attributes, new Donation)
                ->where('status', 'completed')->sum('payment_app_fee');

            $totalInstitutionFreeValue = $this->applyFilters($attributes, new Donation)
                ->where('status', 'completed')
                ->select([
                    DB::raw('SUM(coalesce(institution_amount,0) - coalesce(payment_institution_fee,0)) as value')
                ])->first();

            $totaAppFreeValue = $this->applyFilters($attributes, new Donation)
                ->where('status', 'completed')
                ->select([
                    DB::raw('SUM(coalesce(app_amount,0) - coalesce(payment_app_fee,0)) as value')
                ])->first();

            return [
                'activeInstitutions' => (string) $activeInstitutions,
                'inactiveInstitutions' => (string) $inactiveInstitutions,
                'newUsers' => (string) $newUsers,
                'totalInstitutionDonations' => (string) $totalInstitutionDonations,
                'totalAppDonations' => (string) $totalAppDonations,
                'totalInstitutionDonationValue' => $this->brl($totalInstitutionDonationValue),
                'totaAppDonationValue' => $this->brl($totaAppDonationValue),
                'totalInstitutionFee' => $this->brl($totalInstitutionFee),
                'totaAppFee' => $this->brl($totaAppFee),
                'totalInstitutionFreeValue' => $this->brl($totalInstitutionFreeValue->value),
                'totaAppFreeValue' => $this->brl($totaAppFreeValue->value),
            ];
        } catch (Exception $e) {
            throw $e;
        }
    }

    private function brl($value)
    {
        return "R$ " . number_format($value, 2, ",", ".");
    }

    protected function storeCategories(array $attributes, Institution $institution)
    {
        InstitutionCategory::query()->create([
            'institution_id' => $institution->id,
            'category_id' => $attributes['main_category'],
            'main' => true,
        ]);

        if (isset($attributes['categories'])) {
            foreach ($attributes['categories'] as $category) {
                InstitutionCategory::query()->create([
                    'institution_id' => $institution->id,
                    'category_id' => $category,
                    'main' => false,
                ]);
            }
        }
    }

    protected function storeAddress(array $attributes, Institution $institution)
    {
        $address = Address::query()->create($attributes['address']);

        InstitutionAddress::query()->create([
            'institution_id' => $institution->id,
            'address_id' => $address->id,
            'main' => true,
        ]);
    }

    protected function storeImages(array $images, Institution $institution)
    {
        foreach ($images as $image) {
            $photoUrl = $this->attachmentService->storeFile($image, "institution/{$institution->id}/images");

            InstitutionImage::query()->create([
                'institution_id' => $institution->id,
                'image_url' => $photoUrl
            ]);
        }
    }

    public function update(array $attributes, Institution $institution): bool
    {
        try {
            DB::beginTransaction();

            $updated = $institution->update($attributes);

            if (isset($attributes['categories'])) {
                $institution->saveCategories($attributes['categories']);
            }

            if (isset($attributes['images'])) {
                $institution->saveImages($attributes['images']);
            }

            DB::commit();

            return $updated;
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
