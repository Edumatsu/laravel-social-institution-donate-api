<?php

namespace App\Http\Controllers\v1\App;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\DefaultCollection;
use App\Http\Requests\v1\App\User\ListFollowerRequest;
use App\Http\Requests\v1\App\User\ExistUsersRequest;
use App\Http\Resources\v1\App\OtherUserResource;
use App\Http\Resources\v1\App\ListFollowedUserResource;
use App\Http\Resources\v1\App\ListFollowingUserResource;
use App\Http\Resources\v1\App\ListOtherUserResource;
use App\Traits\ApiResponse;
use App\Services\App\UserService;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    use ApiResponse;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * @group Users
     *
     * Show
     * Show user.
     *
     * @response {
     *   "id": 1,
     *   "firstName": "Eduardo",
     *   "lastName": "da Silva Santos",
     *   "photo_url": "https://photo.jpg",
     *   "following": 0,
     *   "followers": 0,
     *   "donations": 0,
     *   "institutionsDonated": 0
     * }
     *
     */
    public function show(User $user): JsonResponse
    {
        return ApiResponse::success(new OtherUserResource($user));
    }

    /**
     * @group Users
     *
     * Following
     * People when user is following.
     *
     * @response {
     *   "data": [
     *     {
     *        "id": 6,
     *        "firstName": "Rose",
     *        "lastName": "Santos",
     *        "photoUrl": "",
     *        "following": 0,
     *        "followers": 0,
     *        "imFollowing": false
     *     },
     *     {
     *        "id": 5,
     *        "firstName": "Eduardo",
     *        "lastName": "Soares",
     *        "photoUrl": "",
     *        "following": 0,
     *        "followers": 0,
     *        "imFollowing": false
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
     *
     */
    public function userIsFollowing(User $user, ListFollowerRequest $request): JsonResponse
    {
        $resources = $this->service->userIsFollowing($user, $request->get('search_term'));

        return ApiResponse::success(new DefaultCollection(ListFollowedUserResource::class, $resources));
    }

    /**
     * @group Users
     *
     * Followed
     * People following the user.
     *
     * @response {
     *   "data": [
     *     {
     *        "id": 6,
     *        "firstName": "Rose",
     *        "lastName": "Santos",
     *        "photoUrl": "",
     *        "following": 0,
     *        "followers": 0,
     *        "imFollowing": false
     *     },
     *     {
     *        "id": 5,
     *        "firstName": "Eduardo",
     *        "lastName": "Soares",
     *        "photoUrl": "",
     *        "following": 0,
     *        "followers": 0,
     *        "imFollowing": false
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
    public function followTheUser(User $user, ListFollowerRequest $request): JsonResponse
    {
        $resources = $this->service->followTheUser($user, $request->get('search_term'));

        return ApiResponse::success(new DefaultCollection(ListFollowingUserResource::class, $resources));
    }

    /**
     * @group Users
     *
     * Toggle Follow
     * Follow or unfollow the user.
     *
     * @response status=204 scenario="No Content" null
     */
    public function toggleFollow(User $user): JsonResponse
    {
        $this->service->toggleFollow($user);

        return ApiResponse::noContent();
    }

    /**
     * @group Users
     *
     * Exists
     * Check if the cell phones of contact list have register and return existants.
     *
     * @response {
     *   "data": [
     *     {
     *        "id": 6,
     *        "firstName": "Rose",
     *        "lastName": "Santos",
     *        "photoUrl": "",
     *        "following": 0,
     *        "followers": 0,
     *        "imFollowing": false
     *     },
     *     {
     *        "id": 5,
     *        "firstName": "Eduardo",
     *        "lastName": "Soares",
     *        "photoUrl": "",
     *        "following": 0,
     *        "followers": 0,
     *        "imFollowing": false
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
    public function exists(ExistUsersRequest $request): JsonResponse
    {
        $resources = $this->service->existsNumbers($request->get('cell_phones'));

        return ApiResponse::success(new DefaultCollection(ListOtherUserResource::class, $resources));
    }
}
