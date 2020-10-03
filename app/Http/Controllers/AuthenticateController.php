<?php

namespace App\Http\Controllers;

use App\Helpers\JwtAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function login(Request $request)
    {
        $JwtAuth = new JwtAuth();
        $email = $request->email;
        $password = $request->password;

        if ($request->getToken == 'true') {
            $signup = $JwtAuth->signup($email, $password, true);
        }else {
            $signup = $JwtAuth->signup($email, $password);
        }

        return response()->json($signup, 200);
    }
}
