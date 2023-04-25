<?php

namespace App\Http\Controllers\v1\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\Backoffice\Admin\AuthRequest;
use App\Http\Resources\v1\Backoffice\Admin\AdminResource;
use App\Traits\ApiResponse;
use App\Models\Admin;
use App\Services\Backoffice\AdminService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    use ApiResponse;

    public function __construct(AdminService $service)
    {
        $this->service = $service;
    }

    /**
     * @group Backoffice / Authentication
     *
     * Login
     * Get a JWT via given credentials.
     *
     * @response {
     *   "token": "eyJ0e..."
     * }
     *
     * @response status=401 {
     *   "message": "These credentials do not match our records."
     * }
     *
     */
    public function login(AuthRequest $request): JsonResponse
    {
        $authUser = $this->service->authenticate($request->all());

        return ApiResponse::success($authUser);
    }

    /**
     * @group Backoffice / Admin Authentication
     *
     * Me
     * Show the logged user.
     *
     * @response {
     *   "id": 1,
     *   "name": "Eduardo Soares",
     *   "user": "eduardo"
     * }
     *
     */
    public function me(): JsonResponse
    {
        $user = Admin::query()->where('id', auth()->user()->id)->first();

        return ApiResponse::success(new AdminResource($user));
    }
}
