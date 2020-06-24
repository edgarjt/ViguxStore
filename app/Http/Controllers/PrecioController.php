<?php

namespace App\Http\Controllers;

use App\Precio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrecioController extends Controller
{
    public function getPrecio(){
        $data = DB::table('precio')
            ->join('users', 'precio.fk_user', '=', 'users.id')
            ->select('precio.*', 'users.name', 'users.ap_paterno', 'users.ap_materno', 'users.email', 'users.telefono')
            ->get();

        if (count($data) >= 1) {
            return $data;
        }

        return response()->json(['response' => 'No Content'], 204);

    }

    public function addPrecio(Request $request){
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = Precio::create($data);

            if ($response) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 400);
        }

        return response()->json(['response' => false], 401);

    }

    public function updatePrecio(Request $request){
        if ($request->json()){
            $data = $request->json()->all();

            $response = Precio::where('id', $data['id'])->update($data);

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }
            return response()->json(['response' => false], 400);
        }

        return response()->json(['response' => false], 401);

    }

    public function deletePrecio(Request $request){
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = Precio::where('id', $data['id'])->delete();

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 201);
        }

        return response()->json(['response' => false], 401);

    }
}
