<?php

namespace App\Http\Controllers\v1\App;

use App\Http\Resources\v1\DefaultCollection;
use App\Http\Requests\v1\App\ListInstitutionRequest;
use App\Http\Resources\v1\App\InstitutionResource;
use App\Http\Resources\v1\App\ListInstitutionResource;
use App\Models\Institution;
use App\Services\App\InstitutionService;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * @group Institution
 * APIs for list institutions
 *
 * Class InstitutionController
 * @package App\Http\Controllers\App\v1
 */
class InstitutionController
{
    private $service;

    public function __construct(InstitutionService $service)
    {
        $this->service = $service;
    }

    /**
     * List
     * Fetch all institutions
     *
     * @response {
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Casa Abrigo Amorada",
     *       "mainCategory": "Maoe Crianças e Adolescentes",
     *       "description": "a casa abrigo amorada tem como objetivo apoiar a comunidade ensinando e alimentandos crianças e adolescentes carentes",
     *       "logoUrl": "...logo.png",
     *       "isFavorite": false
     *     }
     *   ],
     *   "pagination": {
     *     "total": 1,
     *     "current_page": 1,
     *     "first_page": 1,
     *     "prev_page": null,
     *     "next_page": null,
     *     "last_page": 1,
     *     "per_page": 15,
     *     "is_last_page": true
     *   }
     * }
     * @return JsonResponse
     */
    public function index(ListInstitutionRequest $request): JsonResponse
    {
        $resources = $this->service->index($request->all());

        return ApiResponse::success(new DefaultCollection(ListInstitutionResource::class, $resources));
    }

    /**
     * Detail
     * Detail the institution
     *
     * @urlParam id integer required The ID of the institution Example: 5
     *
     * @response {
     *   "id": 1,
     *   "name": "Casa Abrigo Amorada",
     *   "categories": "Crianças e Adolescentes, Apoio a idosos",
     *   "about": "a casa abrigo amorada tem como objetivo apoiar a comunidade ensinando e alimentandos crianças e adolescentes carentes",
     *   "document": "1235667810",
     *   "phone": "+551412345678",
     *   "cellphone": "+5514998887777",
     *   "logoUrl": "https://files-stg.causas.app.br/user/ebbfd58f-4b31-4125-a082-7aaf5cf6d700.png",
     *   "website": "https://casaabrigoamorada.com.br",
     *   "facebook": "https://www.facebook.com",
     *   "instagram": "https://www.instagram.com",
     *   "payment_token": "",
     *   "special_donate_text": "texto para doação <strong>especial</strong>",
     *   "special_donate_url": "https://www.casaabrigoamorada.com.br/doacaoespecial",
     *   "voluntary_text": "texto para <strong>voluntarios</strong>",
     *   "voluntary_url": "https://www.casaabrigoamorada.com.br/voluntario",
     *   "money_donate": true,
     *   "isFavorite": false,
     *   "images": [
     *     {
     *       "url": "...photo.png"
     *     },
     *     {
     *       "url": "...photo2.jpg"
     *     },
     *     {
     *       "url": "...photo3.jpg"
     *     }
     *   ]
     * }
     *
     * @param Institution $institution
     * @return JsonResponse
     */
    public function show(Institution $institution): JsonResponse
    {
        return ApiResponse::success(new InstitutionResource($institution));
    }
}
