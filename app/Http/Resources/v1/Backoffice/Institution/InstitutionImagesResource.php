<?php

namespace App\Http\Resources\v1\Backoffice\Institution;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstitutionImagesResource extends JsonResource
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
            'url' => (string) $this->full_image_url,
        ];
    }
}
