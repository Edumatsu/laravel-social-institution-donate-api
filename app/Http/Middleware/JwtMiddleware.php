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
use App\Services\App\UserService;
use App\Scopes\ClientScope;

class JwtMiddleware
{
    public function handle($request, Closure $next)
    {
        $authorization = $request->header('Authorization');

        if (!$authorization) {
            throw new Exception('Token not provided', Response::HTTP_UNAUTHORIZED);
        }

        $tokenArr = explode(" ", $authorization);

        if (count($tokenArr) != 2 || $tokenArr[0] !== 'Bearer') {
            throw new Exception('Invalid Token', Response::HTTP_UNAUTHORIZED);
        }

        $token = $tokenArr[1];

        try {
            $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);
        } catch (ExpiredException $e) {
            throw new Exception('Provided token is expired', Response::HTTP_UNAUTHORIZED);
        } catch (Throwable $e) {
            throw new Exception('An error while decoding token', Response::HTTP_UNAUTHORIZED);
        }

        if (isset($credentials->user_id)) {
            $user = User::where([
                ['id', $credentials->user_id],
            ])->first();

            Auth::login($user);
        }

        $response = $next($request);

        $credentials->iat = time();
        $credentials->exp = time() + UserService::EXPIRE_TIME;

        $refreshToken = JWT::encode($credentials, env('JWT_SECRET'));
        $response->withHeaders(['X-Refresh-Token' => $refreshToken]);

        return $response;
    }
}
