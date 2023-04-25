<?php

namespace App\Http\Controllers\v1\App;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\DefaultCollection;
use App\Http\Resources\v1\App\ListFavoriteResource;
use App\Traits\ApiResponse;
use App\Services\App\FavoriteService;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Institution;
use Illuminate\Http\JsonResponse;

class FavoriteController extends Controller
{
    use ApiResponse;

    public function __construct(FavoriteService $service)
    {
        $this->service = $service;
    }

    /**
     * @group Favorites
     *
     * List
     * List user favorite institutions.
     *
     * @response {
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Casa Abrigo Amorada",
     *       "mainCategory": "Crianças e Adolescentes",
     *       "description": "a casa abrigo amorada tem como objetivo apoiar a comunidade ensinando e alimentandos crianças e adolescentes carentes",
     *       "logoUrl": "...logo.png",
     *       "isFavorite": true
     *     },
     *     {
     *       "id": 2,
     *       "name": "Abrigo do Idoso",
     *       "mainCategory": "Crianças e Adolescentes",
     *       "description": "a casa abrigo do idoso tem como objetivo apoiar a comunidade cuidando dos idosos...",
     *       "logoUrl": "...logo.png",
     *       "isFavorite": true
     *     }
     *   ],
     *   "total": 2
     * }
     *
     */
    public function index(User $user): JsonResponse
    {
        $resources = Favorite::query()->where('user_id', $user->id)->get();

        return ApiResponse::success(new DefaultCollection(ListFavoriteResource::class, $resources));
    }

    /**
     * @group Favorites
     *
     * Toggle Favorite
     * Add or Remove from favorite.
     *
     * @response status=204 scenario="No Content" null
     */
    public function toggle(Institution $institution): JsonResponse
    {
        $this->service->toggle($institution);

        return ApiResponse::noContent();
    }
}
