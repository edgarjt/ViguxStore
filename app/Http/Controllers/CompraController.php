<?php

namespace App\Http\Controllers;

use App\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompraController extends Controller
{
    public function getCompras() {
        $data = DB::table('compras')
            ->join('users', 'compras.fk_user', '=', 'users.id')
            ->select('compras.*', 'users.name', 'users.ap_paterno', 'users.ap_materno', 'users.email', 'users.telefono')
            ->get();

        if (count($data) >= 1) {
            return $data;
        }

        return response()->json(['response' => 'No Content'], 204);
    }

    public function addCompra(Request $request) {
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = Compra::create($data);

            if ($response) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 400);
        }

        return response()->json(['response' => false], 401);

    }

    public function deleteCompra(Request $request) {
        if ($request->isJson()){
            $data = $request->json()->all();

            $response = Compra::where('id', $data['id'])->delete();

            if ($response == 1) {
                return response()->json(['response' => true], 200);
            }

            return response()->json(['response' => false], 201);
        }

        return response()->json(['response' => false], 401);

    }
}
