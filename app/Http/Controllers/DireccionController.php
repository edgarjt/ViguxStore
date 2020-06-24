<?php

namespace App\Http\Controllers;

use App\Direccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DireccionController extends Controller
{

    public function getDireccion() {
        $data = DB::table('direccion')
            ->join('users', 'direccion.fk_user', '=', 'users.id')
            ->select('direccion.*', 'users.name', 'users.ap_paterno', 'users.ap_materno', 'users.email', 'users.telefono')
            ->get();

        if (count($data) >= 1) {
            return $data;
        }

        return response()->json(['response' => 'No Content'], 204);
    }

    public function addDireccion(Request $request) {
        if ($request->json()){
            $data = $request->json()->all();

            $response = Direccion::create($data);

            if ($response) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 400);
        }

        return response()->json(['response' => false], 401);
    }

    public function updateDireccion(Request $request) {
        if ($request->json()){
            $data = $request->json()->all();

            $response = Direccion::where('id', $data['id'])->update($data);

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }
            return response()->json(['response' => false], 400);
        }

        return response()->json(['response' => false], 401);
    }

    public function deleteDireccion(Request $request) {
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = Direccion::where('id', $data['id'])->delete();

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 201);
        }

        return response()->json(['response' => false], 401);
    }
}
