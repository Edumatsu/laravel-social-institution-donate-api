<?php

namespace App\Services\App;

use App\Models\User;
use App\Models\Follower;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Firebase\JWT\JWT;
use App\Services\FirestoreService;
use App\Services\FirebaseService;

class UserService
{
    /**
     * Expiration Time
     */
    const EXPIRE_TIME = 60 * 60 * 24 * 30;

    public function __construct(
        FirestoreService $firestoreService,
        FirebaseService $firebaseService
    ) {
        $this->firestoreService = $firestoreService;
        $this->firebaseService = $firebaseService;
    }

    public function create(array $data)
    {
        $user = User::query()->create($data);

        $data = [
            'firstName' => $user->first_name,
            'lastName' => $user->last_name,
            'cellPhone' => $user->cell_phone,
            'key' => env('FIREBASE_KEY'),
        ];

        $user->token = $this->generatejJwt($user);

        $this->firestoreService->store($user->id, $data, "registered-users");

        return $user;
    }

    public function authenticate($attributes)
    {
        $user = User::where([
            ['cell_phone', $attributes['cell_phone']],
        ])->first();

        if (!$user) {
            throw new Exception(__('auth.failed'), Response::HTTP_UNAUTHORIZED);
        }

        if (env('FIREBASE_VALIDATE_TOKEN') == 1 && !$this->firebaseService->validateToken($attributes['fb_token'], $user)) {
            throw new Exception(__('auth.failed'), Response::HTTP_UNAUTHORIZED);
        }

        if ($attributes['fb_token']) {
            return [
                'token' => $this->generatejJwt($user)
            ];
        }

        throw new Exception(__('auth.failed'), Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Generates the jwt token
     */
    protected function generatejJwt(User $user)
    {
        $payload = [
            'iss' => "causas",
            'email' => $user->email,
            'cell_phone' => $user->cell_phone,
            'user_id' => $user->id,
            'iat' => time(),
            'exp' => time() + self::EXPIRE_TIME,
        ];

        return JWT::encode($payload, env('JWT_SECRET'));
    }

    public function userIsFollowing(User $user, ?string $searchTerm = "")
    {
        $query = Follower::query()->select('id', 'followed_id', 'follower_id')
            ->selectRaw('COALESCE((SELECT 1 FROM followers f
                WHERE f.followed_id = followers.followed_id
                AND follower_id = ' . auth()->user()->id . '), 0) as im_following')
            ->where('follower_id', $user->id);

        if ($searchTerm) {
            $query->whereHas('followedUser', function($q) use ($searchTerm){
                $q->where('first_name', 'like', '%' . $searchTerm . '%')
                            ->orWhere('last_name', 'like', '%' . $searchTerm . '%');
            });
        }

        return $query->paginate();
    }

    public function followTheUser(User $user, ?string $searchTerm = "")
    {
        $query = Follower::query()->select('id', 'followed_id', 'follower_id')
            ->selectRaw('COALESCE((SELECT 1 FROM followers f
                WHERE f.followed_id = followers.followed_id
                AND follower_id = ' . auth()->user()->id . '), 0) as im_following')
            ->where('followed_id', $user->id);

        if ($searchTerm) {
            $query->whereHas('followingUser', function($q) use ($searchTerm){
                $q->where('first_name', 'like', '%' . $searchTerm . '%')
                            ->orWhere('last_name', 'like', '%' . $searchTerm . '%');
            });
        }

        return $query->paginate();
    }

    public function toggleFollow(User $user)
    {
        if (auth()->user()->id == $user->id) {
            return;
        }

        $following = Follower::query()
            ->where('follower_id', auth()->user()->id)
            ->where('followed_id', $user->id);

        if ($following->count() > 0) {
            $following->delete();

            return;
        }

        return Follower::query()->create([
            'follower_id' => auth()->user()->id,
            'followed_id' => $user->id
        ]);
    }

    public function existsNumbers($cellPhones)
    {
        return User::query()
            ->select('id', 'first_name', 'last_name')
            ->selectRaw('COALESCE((SELECT 1 FROM followers f
                WHERE f.followed_id = users.id
                AND follower_id = ' . auth()->user()->id . '), 0) as im_following')
            ->where(function ($query) use($cellPhones) {
                for ($i = 0; $i < count($cellPhones); $i++) {
                    $query->orwhere('cell_phone', 'like',  '%' . $cellPhones[$i]);
                }
            })
        ->whereRaw('(SELECT 1 FROM followers f
                WHERE f.followed_id = users.id
                AND follower_id = ' . auth()->user()->id . ') is null')
        ->where('id', '<>', auth()->user()->id)
        ->paginate();
    }
}
