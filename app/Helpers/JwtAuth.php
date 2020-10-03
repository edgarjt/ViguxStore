<?php
namespace App\Helpers;

use Firebase\JWT\JWT;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class JwtAuth {
    public $key;

    public function __construct()
    {
        $this->key = '67BeH6gG5v9A97yoSNh3';
    }

    public function signup($email, $password, $getToken = null)
    {
        $user = User::where([
            'email' => $email
        ])->first();

        if (is_object($user)) {
            $verifyPwd = Hash::check($password, $user->password);
        }

        $signup = false;

        if (is_object($user) && $verifyPwd)
        {
            $signup = true;
        }

        if ($signup) {
            $token = [
                'sub' => $user->id,
                'name' => $user->name,
                'ap_paterno' => $user->ap_paterno,
                'ap_materno' => $user->ap_materno,
                'email' => $user->email,
                'telefono' => $user->telefono,
                'role' => $user->role,
                'iat' => time(),
                'exp' => time() + (7 * 24 * 60 * 60)
            ];

            $jwt = JWT::encode($token, $this->key, 'HS256');
            $decode = JWT::decode($jwt, $this->key, ['HS256']);

            if (is_null($getToken)) {
                $data = $jwt;
            } else {
                $data = $decode;
            }

        } else {
            $data = [
                'status' => false,
                'message' => 'Credenciales incorrecto'
            ];
        }

        return $data;
    }
}
