<?php

namespace App\Http\Resources\v1\Backoffice\RecommendedInstitution;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListRecommendedInstitutionResource extends JsonResource
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
            'month' => (string) $this->month,
            'year' => (string) $this->year,
            'institution' => (string) $this->institution->name,
        ];
    }
}
