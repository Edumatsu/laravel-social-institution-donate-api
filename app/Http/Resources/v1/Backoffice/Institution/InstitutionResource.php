<?php

namespace App\Http\Resources\v1\Backoffice\Institution;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\v1\Backoffice\Category\CategoryResource;

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
            'description' => (string) $this->description,
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
            'active' => (bool) $this->active,
            'imagesUrls' => InstitutionImagesResource::collection($this->images),
            'categories' => CategoryResource::collection($this->categoriesBackoffice),
            'main_category' => new CategoryResource($this->category->first()),
        ];
    }
}
