<?php

namespace App\Services\App;

use App\Models\Institution;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class InstitutionService
{
    public function index(array $request): LengthAwarePaginator
    {
        $query = Institution::query()
            ->where('active', true)
            ->where('approved', true);

        if (Arr::get($request, 'search')) {
            $search = "%" . str_replace(" ", "%", Arr::get($request, 'search')) . "%";

            $query->where('name', 'like', $search);
            $query->whereOr('description', 'like', $search);
            $query->whereOr('about', 'like', $search);
            $query->whereOr('special_donate_text', 'like', $search);
            $query->whereOr('voluntary_text', 'like', $search);
            $query->whereOr('special_donate_url', 'like', $search);
            $query->whereOr('voluntary_url', 'like', $search);
            $query->orWhereHas('categories', function($q) use ($search) {
                $q->where('name', 'like', $search);
            });
        }

        return $query->paginate();
    }
}
