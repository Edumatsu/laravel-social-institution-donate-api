<?php

namespace App\Http\Resources\v1\App;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListOtherUserResource extends JsonResource
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
            'photoUrl' => (string) $this->full_image_url,
            'following' => (int) $this->following_count,
            'followers' => (int) $this->followers_count,
            'imFollowing' => (bool) $this->im_following,
        ];
    }
}
