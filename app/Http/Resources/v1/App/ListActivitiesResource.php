<?php

namespace App\Http\Resources\v1\App;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListActivitiesResource extends JsonResource
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
            'userId' => (int) $this->user->id,
            'userFirstName' => (string) $this->user->first_name,
            'userLastName' => (string) $this->user->last_name,
            'userPhotoUrl' => (string) $this->user->full_image_url,
            'activityText' => (string) $this->activity_text,
            'institutionId' => (int) $this->institution_id,
            'createdAt' => $this->created_at,
        ];
    }
}
