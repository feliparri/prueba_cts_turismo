<?php

use Illuminate\Http\Request;

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

Route::get('muestraTodo', 'Api\UsuarioController@muestraTodo');
Route::get('muestraPorId/{id}', 'Api\UsuarioController@muestraPorId');
Route::get('borrar/{id}', 'Api\UsuarioController@borrar');
Route::get('crearRegistro/{nombre}/{paterno}/{materno}/{comentario}', 'Api\UsuarioController@crearRegistro');
Route::get('actualizarRegistro/{id}/{nombre}/{paterno}/{materno}/{comentario}', 'Api\UsuarioController@actualizarRegistro');