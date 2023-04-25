<?php

namespace App\Http\Resources\v1\App;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListFollowedUserResource extends JsonResource
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
            'id' => (int) $this->followedUser->id,
            'firstName' => (string) $this->followedUser->first_name,
            'lastName' => (string) $this->followedUser->last_name,
            'photoUrl' => (string) $this->followedUser->full_image_url,
            'following' => (int) $this->followedUser->following_count,
            'followers' => (int) $this->followedUser->followers_count,
            'imFollowing' => (bool) $this->im_following,
        ];
    }
}
