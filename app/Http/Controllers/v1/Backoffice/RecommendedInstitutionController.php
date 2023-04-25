<?php

namespace App\Http\Controllers\v1\Backoffice;

use App\Http\Resources\v1\DefaultCollection;
use App\Http\Requests\v1\Backoffice\RecommendedInstitution\CreateRequest;
use App\Http\Requests\v1\Backoffice\RecommendedInstitution\UpdateRequest;
use App\Http\Resources\v1\Backoffice\RecommendedInstitution\ListRecommendedInstitutionResource;
use App\Http\Resources\v1\Backoffice\RecommendedInstitution\RecommendedInstitutionResource;
use App\Models\RecommendedInstitution;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * @group Backoffice / Recommended Institution
 * APIs for managing recommended institutions
 * @authenticated
 *
 * Class RecommendedInstitutionController
 * @package App\Http\Controllers\v1
 */
class RecommendedInstitutionController
{
    /**
     * List
     * Fetch all categories
     *
     */
    public function index(): JsonResponse
    {
        $resources = RecommendedInstitution::query()->paginate();

        return ApiResponse::success(new DefaultCollection(ListRecommendedInstitutionResource::class, $resources));
    }

    /**
     * Detail
     * Detail the recommended institution
     *
     */
    public function show(RecommendedInstitution $recommendedInstitution): JsonResponse
    {
        return ApiResponse::success(new RecommendedInstitutionResource($recommendedInstitution));
    }

    /**
     * Create
     * Create a new recommended institution
     *
     */
    public function store(CreateRequest $request): JsonResponse
    {
        RecommendedInstitution::query()->create($request->all());

        return ApiResponse::success(new RecommendedInstitutionResource($recommendedInstitution));
    }

    /**
     * Update
     * Update the recommended institution
     *
     */
    public function update(UpdateRequest $request, RecommendedInstitution $recommendedInstitution): JsonResponse
    {
        $recommendedInstitution->update($request->all());

        return ApiResponse::noContent();
    }

    /**
     * Delete
     * Delete the recommended institution
     *
     * @urlParam id integer required The ID of the recommended institution Example: 5
     *
     * @response status=204 scenario="No Content" null
     *
     * @param RecommendedInstitution $recommendedInstitution
     * @return JsonResponse
     */
    public function destroy(RecommendedInstitution $recommendedInstitution): JsonResponse
    {
        $recommendedInstitution->delete();

        return ApiResponse::noContent();
    }
}
