<?php

namespace App\Http\Resources\v1\Backoffice\Institution;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'name' => $this->name,
            'cep' => $this->cep,
            'street' => $this->street,
            'number' => $this->number,
            'neighborhood' => $this->neighborhood,
            'complement' => $this->complement,
            'city' => $this->city,
            'state' => $this->state,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }
}
