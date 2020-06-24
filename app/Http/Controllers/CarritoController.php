<?php

namespace App\Http\Controllers;

use App\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    public function getCarrito(){
        $data = DB::table('carrito')
            ->join('users', 'carrito.fk_user', '=', 'users.id')
            ->select('carrito.*', 'users.name', 'users.ap_paterno', 'users.ap_materno', 'users.email', 'users.telefono')
            ->get();

        if (count($data) >= 1) {
            return $data;
        }

        return response()->json(['response' => 'No Content'], 204);

    }

    public function addCarrito(Request $request){
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = Carrito::create($data);

            if ($response) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 400);
        }

        return response()->json(['response' => false], 401);

    }

    public function updateCarrito(Request $request){
        if ($request->json()){
            $data = $request->json()->all();

            $response = Carrito::where('id', $data['id'])->update($data);

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }
            return response()->json(['response' => false], 400);
        }

        return response()->json(['response' => false], 401);

    }

    public function deleteCarrito(Request $request){
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = Carrito::where('id', $data['id'])->delete();

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 201);
        }

        return response()->json(['response' => false], 401);

    }
}
