<?php

namespace App\Services\App;

use App\Models\Favorite;
use App\Models\Institution;

class FavoriteService
{
    public function toggle(Institution $institution)
    {
        $isFavorite = Favorite::query()
            ->where('user_id', auth()->user()->id)
            ->where('institution_id', $institution->id);

        if ($isFavorite->count() > 0) {
            $isFavorite->delete();

            return;
        }

        return Favorite::query()->create([
            'user_id' => auth()->user()->id,
            'institution_id' => $institution->id
        ]);
    }
}
