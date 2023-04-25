<?php

namespace App\Http\Resources\v1\App;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListFavoriteResource extends JsonResource
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
            'id' => (int) $this->institution->id,
            'name' => (string) $this->institution->name,
            'mainCategory' => (string) $this->institution->category->first() ? $this->institution->category->first()->name : "",
            'description' => (string) $this->institution->description,
            'logoUrl' => (string) $this->institution->full_logo_url,
            'isFavorite' => (bool) $this->institution->is_favorite,
        ];
    }
}
