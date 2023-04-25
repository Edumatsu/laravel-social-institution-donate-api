<?php

namespace App\Http\Resources\v1\App;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListInstitutionResource extends JsonResource
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
            'mainCategory' => (string) $this->category->first() ? $this->category->first()->name : "",
            'description' => (string) $this->description,
            'logoUrl' => (string) $this->full_logo_url,
            'isFavorite' => (bool) $this->is_favorite,
        ];
    }
}
