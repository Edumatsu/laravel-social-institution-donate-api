<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Response;
use Throwable;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class JwtOptionalMiddleware
{
    public function handle($request, Closure $next)
    {
        $authorization = $request->header('Authorization');

        if ($authorization) {

            $tokenArr = explode(" ", $authorization);

            if (count($tokenArr) != 2 || $tokenArr[0] !== 'Bearer') {
                return $next($request);
            }

            $token = $tokenArr[1];

            $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);

            if ($credentials && isset($credentials->user_id)) {
                $user = User::where([
                    ['id', $credentials->user_id],
                ])->first();

                Auth::login($user);
            }
        }

        return $next($request);
    }
}
