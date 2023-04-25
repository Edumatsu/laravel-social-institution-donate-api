<?php

namespace App\Http\Resources\v1\App;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DonationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (int) $this->id,
            'institutionAmount' => (float) $this->institution_amount,
            'appAmount' => (float) $this->app_amount,
            'preferenceId' => (string) $this->preference_id,
            'status' => (string) $this->status,
        ];
    }
}
