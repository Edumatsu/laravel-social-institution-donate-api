<?php

namespace App\Services;

use Kreait\Firebase\JWT\Error\IdTokenVerificationFailed;

class FirebaseService
{
    public function validateToken(string $token, $user)
    {
        $auth = app('firebase.auth');

        try {
            $verifiedIdToken = $auth->verifyIdToken($token);
        } catch (IdTokenVerificationFailed $e) {
            return false;
        }

        $uid = $verifiedIdToken->claims()->get('sub');
        $firebaseUser = $auth->getUser($uid);

        return $firebaseUser->phoneNumber == $user->cell_phone;
    }
}
