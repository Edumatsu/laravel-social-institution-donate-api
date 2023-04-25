<?php

namespace App\Http\Resources\v1\App;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstitutionResource extends JsonResource
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
            'name' => (string) $this->name,
            'categories' => (string) $this->concatenatedCategories,
            'about' => (string) $this->about,
            'document' => (string) $this->document,
            'phone' => (string) $this->phone,
            'cellphone' => (string) $this->cellphone,
            'logoUrl' => (string) $this->full_logo_url,
            'website' => (string) $this->website,
            'facebook' => (string) $this->facebook,
            'instagram' => (string) $this->instagram,
            'payment_token' => (string) $this->payment_token,
            'special_donate_text' => (string) $this->special_donate_text,
            'special_donate_url' => (string) $this->special_donate_url,
            'voluntary_text' => (string) $this->voluntary_text,
            'voluntary_url' => (string) $this->voluntary_url,
            'money_donate' => (bool) $this->money_donate,
            'isFavorite' => (bool) $this->is_favorite,
            'images' => InstitutionImagesResource::collection($this->images),
        ];
    }
}
