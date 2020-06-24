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
    return view('welcome');
});


Route::middleware(['jwt.auth'])->group(function () {
    Route::get('getUsers', 'UsersController@getUsers')->name('getUsers');
});

Route::post('login', 'AuthenticateController@authenticate')->name('login');
Route::post('createUsers', 'UsersController@createUsers')->name('createUsers');
Route::post('updateUsers', 'UsersController@updateUsers')->name('updateUsers');
Route::post('deleteUsers', 'UsersController@deleteUsers')->name('deleteUsers');
