<?php

namespace App\Http\Controllers\v1\App;

use App\Http\Resources\v1\App\ListInstitutionResource;
use App\Models\RecommendedInstitution;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Exception;

/**
 * @group Institution
 *
 * Class RecommendedInstitutionController
 * @package App\Http\Controllers\App\v1
 */
class RecommendedInstitutionController
{
    /**
     * Random Institution Recommended
     * Show Monthly recommended institution
     *
     * @response {
     *   "id": 1,
     *   "name": "Casa Abrigo Amorada",
     *   "mainCategory": "Maoe Crianças e Adolescentes",
     *   "description": "a casa abrigo amorada tem como objetivo apoiar a comunidade ensinando e alimentandos crianças e adolescentes carentes",
     *   "logoUrl": "...logo.png",
     *   "isFavorite": false
     * }
     *
     * @return JsonResponse
     */
    public function random(): JsonResponse
    {

        $resource = RecommendedInstitution::query()
            ->where('month', date("m"))
            ->where('year', date("Y"))
            ->inRandomOrder()
            ->first();

        if (!$resource || !$resource->institution) {
            throw new Exception('Resource not found', Response::HTTP_NOT_FOUND);
        }

        return ApiResponse::success(new ListInstitutionResource($resource->institution));
    }
}
