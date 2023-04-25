<?php

namespace App\Http\Controllers\v1\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\App\User\AuthRequest;
use App\Http\Requests\v1\App\User\CreateRequest;
use App\Http\Requests\v1\App\User\UpdateRequest;
use App\Http\Resources\v1\App\UserResource;
use App\Http\Resources\v1\App\OtherUserResource;
use App\Traits\ApiResponse;
use App\Models\User;
use App\Services\App\UserService;
use Illuminate\Http\JsonResponse;
use App\Services\AttachmentService;

class AuthController extends Controller
{
    use ApiResponse;

    public function __construct(UserService $service, AttachmentService $attachmentService)
    {
        $this->service = $service;
        $this->attachmentService = $attachmentService;
    }

    /**
     * @group Authentication
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
     * @group Authentication
     *
     * Register
     * Register a new user.
     *
     * @response status=201 {
     *   "id": 1,
     *   "firstName": "Eduardo",
     *   "lastName": "da Silva Santos",
     *   "cellPhone": "+5511988887777",
     *   "email": "eduardo@example.com",
     *   "photoUrl": "https://photo.jpg",
     *   "following": 0,
     *   "followers": 0,
     *   "donations": 0,
     *   "donationsAmount": 0,
     *   "institutionsDonated": 0
     * }
     *
     * @response status=422 {
     *   "message": "The given data was invalid.",
     *   "errors": {
     *     "cell_phone": [
     *       "The cell phone has already been taken."
     *     ]
     *   }
     * }
     *
     */
    public function create(CreateRequest $request): JsonResponse
    {
        $request->merge([
            'photo_url' => $this->attachmentService->store($request, "user")
        ]);

        $user = $this->service->create($request->all());

        return ApiResponse::create(new UserResource($user));
    }

    /**
     * @group Authentication
     *
     * Update
     * Update user.
     *
     * @response status=204 scenario="No Content" null
     */
    public function update(UpdateRequest $request): JsonResponse
    {
        $request->merge([
            'photo_url' => $this->attachmentService->store($request, "user", auth()->user()->photo_url)
        ]);


        User::query()->where('id', auth()->user()->id)->update($request->only([
            'first_name',
            'last_name',
            'photo_url',
            'email'
        ]));

        return ApiResponse::noContent();
    }

    /**
     * @group Authentication
     *
     * Me
     * Show the logged user.
     *
     * @response {
     *   "id": 1,
     *   "firstName": "Eduardo",
     *   "lastName": "da Silva Santos",
     *   "cellPhone": "+5511988887777",
     *   "email": "eduardo@example.com",
     *   "photoUrl": "https://photo.jpg",
     *   "following": 0,
     *   "followers": 0,
     *   "donations": 0,
     *   "donationsAmount": 0,
     *   "institutionsDonated": 0
     * }
     *
     */
    public function me(): JsonResponse
    {
        $user = User::query()->where('id', auth()->user()->id)->first();

        return ApiResponse::success(new UserResource($user));
    }

    /**
     * @group Authentication
     *
     * Delete
     * Delete the logged user.
     *
     * @response status=204 scenario="No Content" null
     */
    public function destroy(): JsonResponse
    {
        User::query()->where('id', auth()->user()->id)->delete();

        return ApiResponse::noContent();
    }
}
