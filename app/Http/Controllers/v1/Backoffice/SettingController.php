<?php

namespace App\Http\Controllers\v1\Backoffice;

use App\Http\Resources\v1\DefaultCollection;
use App\Http\Requests\v1\Backoffice\Setting\UpdateRequest;
use App\Http\Resources\v1\Backoffice\Setting\SettingResource;
use App\Models\Setting;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * @group Backoffice / Settings
 * APIs for managing settings
 * @authenticated
 *
 * Class SettingController
 * @package App\Http\Controllers\v1
 */
class SettingController
{
    /**
     * List
     * Fetch all settings
     *
     */
    public function index(): JsonResponse
    {
        $resources = Setting::query()->paginate();

        return ApiResponse::success(new DefaultCollection(SettingResource::class, $resources));
    }

    /**
     * Detail
     * Detail the setting
     *
     */
    public function show(Setting $setting): JsonResponse
    {
        return ApiResponse::success(new SettingResource($setting));
    }

    /**
     * Update
     * Update the setting
     *
     */
    public function update(UpdateRequest $request, Setting $setting): JsonResponse
    {
        $setting->update($request->only(['value']));

        return ApiResponse::noContent();
    }
}
