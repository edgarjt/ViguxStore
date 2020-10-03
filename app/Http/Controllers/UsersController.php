<?php

namespace App\Http\Controllers;

use App\Helpers\JwtAuth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;

class UsersController extends Controller
{
    public function getUsers() {
        $users = User::all();
        return $users;
    }

    public function createUsers(Request $request) {

        if ($request->isJson()){
            $data = $request->json()->all();
            $user = [
                "name" => $data['name'],
                "ap_paterno" => $data['ap_paterno'],
                "ap_materno" => $data['ap_materno'],
                "email" => $data['email'],
                "password" => Hash::make($data['password']),
                "telefono" => $data['telefono'],
                "role" => $data['role']
            ];

            try {
                $user = User::create($user);
                if ($user){
                    return response()->json(['response' => true], 200);
                }
            }catch (\Throwable $e) {
                return response()->json(['response' => $e->getPrevious()]);
            }
        }
        return response()->json(['response' => 'Unauthorized'], 401);

    }

    public function updateUsers(Request $request) {
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = User::where('id', $data['id'])->update($data);

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 404);
        }

        return response()->json(['response' => 'Unauthorized'], 401);
    }

    public function deleteUsers(Request $request) {
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = User::where('id', $data['id'])->delete();

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 404);
        }

        return response()->json(['response' => 'Unauthorized'], 401);

    }
}
