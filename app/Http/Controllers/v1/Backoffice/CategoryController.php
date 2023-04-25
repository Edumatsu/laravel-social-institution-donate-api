<?php

namespace App\Http\Controllers\v1\Backoffice;

use App\Http\Resources\v1\DefaultCollection;
use App\Http\Requests\v1\Backoffice\Category\CreateRequest;
use App\Http\Requests\v1\Backoffice\Category\UpdateRequest;
use App\Http\Resources\v1\Backoffice\Category\CategoryResource;
use App\Models\Category;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * @group Backoffice / Categories
 * APIs for managing categories
 * @authenticated
 *
 * Class CategoryController
 * @package App\Http\Controllers\v1
 */
class CategoryController
{
    /**
     * List
     * Fetch all categories
     *
     */
    public function index(): JsonResponse
    {
        $resources = Category::query()->get();

        return ApiResponse::success(new DefaultCollection(CategoryResource::class, $resources));
    }

    /**
     * Detail
     * Detail the category
     *
     */
    public function show(Category $category): JsonResponse
    {
        return ApiResponse::success(new CategoryResource($category));
    }

    /**
     * Create
     * Create a new category
     *
     */
    public function store(CreateRequest $request): JsonResponse
    {
        $category = Category::query()->create($request->all());

        return ApiResponse::success(new CategoryResource($category));
    }

    /**
     * Update
     * Update the category
     *
     */
    public function update(UpdateRequest $request, Category $category): JsonResponse
    {
        $category->update($request->all());

        return ApiResponse::noContent();
    }

    /**
     * Delete
     * Delete the category
     *
     * @urlParam id integer required The ID of the category Example: 5
     *
     * @response status=204 scenario="No Content" null
     *
     * @param Category $category
     * @return JsonResponse
     */
    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return ApiResponse::noContent();
    }
}
