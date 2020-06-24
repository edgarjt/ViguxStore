<?php

namespace App\Http\Controllers;

use App\Promocion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromocionController extends Controller
{
    public function getPromociones(){
        $data = DB::table('promociones')
            ->join('users', 'promociones.fk_user', '=', 'users.id')
            ->select('promociones.*', 'users.name', 'users.ap_paterno', 'users.ap_materno', 'users.email', 'users.telefono')
            ->get();

        if (count($data) >= 1) {
            return $data;
        }

        return response()->json(['response' => 'No Content'], 204);

    }

    public function addPromociones(Request $request){
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = Promocion::create($data);

            if ($response) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 400);
        }

        return response()->json(['response' => false], 401);

    }

    public function updatePromociones(Request $request){
        if ($request->json()){
            $data = $request->json()->all();

            $response = Promocion::where('id', $data['id'])->update($data);

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }
            return response()->json(['response' => false], 400);
        }

        return response()->json(['response' => false], 401);

    }

    public function deletePromociones(Request $request){
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = Promocion::where('id', $data['id'])->delete();

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 201);
        }

        return response()->json(['response' => false], 401);

    }
}
