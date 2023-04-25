<?php

namespace App\Http\Resources\v1\App;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListFollowingUserResource extends JsonResource
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
            'id' => (int) $this->followingUser->id,
            'firstName' => (string) $this->followingUser->first_name,
            'lastName' => (string) $this->followingUser->last_name,
            'photoUrl' => (string) $this->followingUser->full_image_url,
            'following' => (int) $this->followingUser->following_count,
            'followers' => (int) $this->followingUser->followers_count,
            'imFollowing' => (bool) $this->im_following,
        ];
    }
}
