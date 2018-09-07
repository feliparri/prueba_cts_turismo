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



Route::get('/', function () {return view('auth.login');});
Route::get('/usuarios', function () {return view('usuarios.index');});
Route::get('/home', function () {return view('home');})->middleware('auth');


Route::resource('usuarios','UsuarioController')->middleware('auth');
//Route::resource('usuarios/crearByApi','UsuarioController')->middleware('auth');
Auth::routes();

//Route::post('/usuarios/crearByApi', 'UsuarioController@crearByApi');

//Route::get('/home', 'HomeController@index')->name('home');
