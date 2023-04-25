<?php

namespace App\Services\Backoffice;

use App\Models\Admin;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Hash;

class AdminService
{
    /**
     * Expiration Time
     */
    const EXPIRE_TIME = 60 * 60 * 24 * 30;

    public function authenticate($attributes)
    {
        $admin = Admin::where('user', $attributes['user'])->first();

        if (!$admin) {
            throw new Exception(__('auth.failed'), Response::HTTP_UNAUTHORIZED);
        }

        if (Hash::check($attributes['password'], $admin->password)) {
            return [
                'token' => $this->generatejJwt($admin)
            ];
        }

        throw new Exception(__('auth.failed'), Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Generates the jwt token
     */
    protected function generatejJwt(Admin $admin)
    {
        $payload = [
            'iss' => "causas-admin",
            'user' => $admin->user,
            'name' => $admin->name,
            'admin_id' => $admin->id,
            'iat' => time(),
            'exp' => time() + self::EXPIRE_TIME,
        ];

        return JWT::encode($payload, env('JWT_SECRET'));
    }
}
