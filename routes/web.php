<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'ViguxSoft';
});


Route::middleware(['jwt.auth'])->group(function () {
    Route::get('getUsers', 'UsersController@getUsers')->name('getUsers');

    //users
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

});

Route::post('login', 'AuthenticateController@authenticate')->name('login');


