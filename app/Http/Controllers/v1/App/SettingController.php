<?php

namespace App\Http\Controllers\v1\App;

use App\Http\Resources\v1\DefaultCollection;
use App\Http\Resources\v1\App\SettingResource;
use App\Models\Setting;
use App\Models\Version;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * @group Settings
 * APIs for show settings
 *
 * Class SettingController
 * @package App\Http\Controllers\App\v1
 */
class SettingController
{
    /**
     * Show
     * Show all settings
     *
     * @response {
     *   "causasDonateValue": 1.5,
     *   "version": {
     *     "id": 1,
     *     "name": "1.0.0"
     *   }
     * }
     * @return JsonResponse
     */
    public function show(): JsonResponse
    {
        $causasDonateValue = Setting::query()->where('slug', 'causas-donate-value')->first();
        $version = Version::query()->orderBy('id', 'desc')->first();

        return ApiResponse::success(new SettingResource([
            'causas_donate_value' => $causasDonateValue->value,
            'version' => $version,
        ]));
    }

}
