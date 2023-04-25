<?php

namespace App\Http\Controllers\v1\App;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\DefaultCollection;
use App\Http\Resources\v1\App\ListActivitiesResource;
use App\Traits\ApiResponse;
use App\Services\App\ActivityService;
use Illuminate\Http\JsonResponse;

class ActivityController extends Controller
{
    use ApiResponse;

    public function __construct(ActivityService $service)
    {
        $this->service = $service;
    }

    /**
     * @group Activities
     *
     * List
     * List user and following activites.
     *
     * @response {
     *   "data": [
     *     {
     *       "userId": 1,
     *       "userFirstName": "João Paulo",
     *       "userLastName": "da Silva",
     *       "userPhotoUrl": "https://files-stg.causas.app.br/user/ebbfd58f-4b31-4125-a082-7aaf5cf6d700.png",
     *       "activityText": "Efetuou uma doação de <strong>R$ 10,00</strong> para <strong>Casa Abrigo Amorada</strong>",
     *       "institutionId": 1,
     *       "createdAt": "2021-09-01 01:25:38"
     *     },
     *     {
     *       "userId": 7,
     *       "userFirstName": "Angela",
     *       "userLastName": "Santos",
     *       "userPhotoUrl": "",
     *       "activityText": "Efetuou uma doação para <strong>Abrigo do Idoso</strong>",
     *       "institutionId": 2,
     *       "createdAt": "2021-09-12 11:52:34"
     *     }
     *   ],
     *   "pagination": {
     *     "total": 2,
     *     "current_page": 1,
     *     "first_page": 1,
     *     "prev_page": null,
     *     "next_page": null,
     *     "last_page": 1,
     *     "per_page": 15,
     *     "is_last_page": true
     *   }
     * }
     *
     */
    public function index(): JsonResponse
    {
        $resources = $this->service->activities();

        return ApiResponse::success(new DefaultCollection(ListActivitiesResource::class, $resources));
    }
}
