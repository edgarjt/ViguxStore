<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Auth
Route::post('login', 'AuthenticateController@login')->name('login');

Route::group(['middleware' => 'jwt.auth'], function () {
    //users
    Route::get('getUsers', 'UsersController@getUsers')->name('getUsers');
    Route::post('createUsers', 'UsersController@createUsers')->name('createUsers');
    Route::post('updateUsers', 'UsersController@updateUsers')->name('updateUsers');
    Route::post('deleteUsers', 'UsersController@deleteUsers')->name('deleteUsers');

    //Compras
    Route::get('getCompras', 'CompraController@getCompras')->name('getCompras');
    Route::post('addCompra', 'CompraController@addCompra')->name('addCompra');
    Route::post('deleteCompras', 'CompraController@deleteCompra')->name('deleteCompras');

    //Direccion
    Route::get('getDireccion', 'DireccionController@getDireccion')->name('getDireccion');
    Route::post('addDireccion', 'DireccionController@addDireccion')->name('addDireccion');
    Route::post('updateDireccion', 'DireccionController@updateDireccion')->name('updateDireccion');
    Route::post('deleteDireccion', 'DireccionController@deleteDireccion')->name('deleteDireccion');

    //Carrito
    Route::get('getCarrito', 'CarritoController@getCarrito')->name('getCarrito');
    Route::post('addCarrito', 'CarritoController@addCarrito')->name('addCarrito');
    Route::post('updateCarrito', 'CarritoController@updateCarrito')->name('updateCarrito');
    Route::post('deleteCarrito', 'CarritoController@deleteCarrito')->name('deleteCarrito');

    //Actions Precio
    Route::post('addPrecio', 'PrecioController@addPrecio')->name('addPrecio');
    Route::post('updatePrecio', 'PrecioController@updatePrecio')->name('updatePrecio');
    Route::post('deletePrecio', 'PrecioController@deletePrecio')->name('deletePrecio');

    //Actions Promocion
    Route::post('addPromociones', 'PromocionController@addPromociones')->name('addPromociones');
    Route::post('updatePromociones', 'PromocionController@updatePromociones')->name('updatePromociones');
    Route::post('deletePromociones', 'PromocionController@deletePromociones')->name('deletePromociones');
});

//Precio
Route::get('getPrecio', 'PrecioController@getPrecio')->name('getPrecio');

//Promocion
Route::get('getPromociones', 'PromocionController@getPromociones')->name('getPromociones');

