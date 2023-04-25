<?php

namespace App\Http\Controllers\v1\App;

use App\Http\Resources\v1\DefaultCollection;
use App\Http\Requests\v1\App\Donation\CreateRequest;
use Illuminate\Http\Request;
use App\Http\Resources\v1\App\DonationResource;
use App\Services\App\DonationService;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Http\JsonResponse;

/**
 * @group Donation
 * APIs for register donation
 *
 * Class DonationController
 * @package App\Http\Controllers\App\v1
 */
class DonationController
{
    private $service;

    public function __construct(DonationService $service)
    {
        $this->service = $service;
    }

    /**
     * Register
     * Register user donation
     *
     * @response {
     *   "id": 5,
     *   "institutionAmount": 10.1,
     *   "appAmount": 1.23,
     *   "preferenceId": "419527540-123-dsda21-12a-b2a5-d02f154e02db",
     *   "status": "created"
     * }
     * @return JsonResponse
     */
    public function create(CreateRequest $request)
    {
        $request->merge([
            'user_id' => auth()->user()->id,
            'payment_institution_fee' => 0,
            'payment_app_fee' => 0,
            'institution_final_amount' => $request->get('institution_amount'),
            'app_final_amount' => $request->get('app_amount'),
            'status' => 'created',
        ]);

        $resource = $this->service->create($request->all());

        return ApiResponse::success(new DonationResource($resource));
    }

    /**
     * Update
     * Update user donation
     *
     * @response status=204 scenario="No Content" null
     */
    public function update(Request $request)
    {
        $resource = $this->service->update($request->all());

        return ApiResponse::noContent();
    }
}
