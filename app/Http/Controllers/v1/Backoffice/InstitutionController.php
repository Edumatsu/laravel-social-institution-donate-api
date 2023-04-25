<?php

namespace App\Http\Controllers\v1\Backoffice;

use App\Http\Resources\v1\DefaultCollection;
use App\Http\Requests\v1\Backoffice\Institution\CreateRequest;
use App\Http\Requests\v1\Backoffice\Institution\UpdateRequest;
use App\Http\Resources\v1\Backoffice\Institution\InstitutionResource;
use App\Http\Resources\v1\Backoffice\Institution\ListInstitutionResource;
use App\Services\Backoffice\InstitutionService;
use App\Services\AttachmentService;
use App\Models\Institution;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * @group Backoffice / Institution
 * APIs for managing institutions
 * @authenticated
 *
 * Class InstitutionController
 * @package App\Http\Controllers\v1
 */
class InstitutionController
{
    private $service;

    public function __construct(InstitutionService $service, AttachmentService $attachmentService)
    {
        $this->service = $service;
        $this->attachmentService = $attachmentService;
    }

    /**
     * List
     * Fetch all institutions
     *
     */
    public function index(): JsonResponse
    {
        $resources = Institution::query()->get();

        return ApiResponse::success(new DefaultCollection(ListInstitutionResource::class, $resources));
    }

    /**
     * Detail
     * Detail the institution
     *
     */
    public function show(Institution $institution): JsonResponse
    {
        return ApiResponse::success(new InstitutionResource($institution));
    }

    /**
     * Create
     * Create a new institution
     *
     */
    public function store(CreateRequest $request): JsonResponse
    {
        $institution = $this->service->create($request->all());

        return ApiResponse::success(new InstitutionResource($institution));
    }

    /**
     * Update
     * Update the institution
     *
     */
    public function update(UpdateRequest $request, Institution $institution): JsonResponse
    {
        $this->service->update($request->all(), $institution);

        return ApiResponse::noContent();
    }

    /**
     * Delete
     * Delete the institution
     *
     * @urlParam id integer required The ID of the institution Example: 5
     *
     * @response status=204 scenario="No Content" null
     *
     * @param Institution $institution
     * @return JsonResponse
     */
    public function destroy(Institution $institution): JsonResponse
    {
        $institution->delete();

        return ApiResponse::noContent();
    }
}
