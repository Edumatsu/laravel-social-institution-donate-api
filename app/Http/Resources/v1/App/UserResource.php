<?php

namespace App\Http\Resources\v1\App;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'firstName' => (string) $this->first_name,
            'lastName' => (string) $this->last_name,
            'cellPhone' => (string) $this->cell_phone,
            'email' => (string) $this->email,
            'photoUrl' => (string) $this->full_image_url,
            'following' => (int) $this->following_count,
            'followers' => (int) $this->followers_count,
            'donations' => (int) $this->donations_count,
            'donationsAmount' => (float) $this->donations_amount,
            'institutionsDonated' => (int) $this->institutions_donated_count,
            'token' => (string) $this->token,
        ];
    }
}
