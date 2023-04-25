<?php

namespace App\Services\App;

use App\Models\Donation;

class ActivityService
{
    public function activities()
    {
        return Donation::query()
            ->join('followers', 'followers.followed_id', 'donations.user_id')
            ->where('donations.user_id', auth()->user()->id)
            ->orWhere('followers.follower_id', auth()->user()->id)->paginate();
    }
}
