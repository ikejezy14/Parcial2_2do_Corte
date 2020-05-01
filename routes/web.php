<?php

use Illuminate\Support\Facades\Route;

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
//Rutas Hotel/Recepcion
Route::get('/create', 'PruebaController@create');
Route::get('/index', 'PruebaController@index');
Route::get('/update/{id}', 'PruebaController@update');
Route::get('/destroy/{id}', 'PruebaController@destroy');
//Fin Rutas Hotel/Recepcion

//Rutas Hotel/Hospedajes
Route::get('/create2', 'Prueba2Controller@create');
Route::get('/index2', 'Prueba2Controller@index');
Route::get('/update2/{id}', 'Prueba2Controller@update');
Route::get('/destroy2/{id}', 'Prueba2Controller@destroy');
//Fin Rutas Hotel/Hospedajes

//Rutas Hotel/Habitaciones
Route::get('/create3', 'Prueba3Controller@create');
Route::get('/index3', 'Prueba3Controller@index');
Route::get('/update3/{id}', 'Prueba3Controller@update');
Route::get('/destroy3/{id}', 'Prueba3Controller@destroy');
//Fin Rutas Hotel/Habitaciones

//Rutas Habitacion/Elemento
Route::get('/create4', 'Prueba4Controller@create');
Route::get('/index4', 'Prueba4Controller@index');
Route::get('/update4/{id}', 'Prueba4Controller@update');
Route::get('/destroy4/{id}', 'Prueba4Controller@destroy');
//Fin Rutas Habitacion/Elemento

//Rutas Relacion morph (Galerias)
Route::get('/create5', 'Prueba5Controller@create');
Route::get('/index5', 'Prueba5Controller@index');
Route::get('/update5/{id}', 'Prueba5Controller@update');
Route::get('/destroy5/{id}', 'Prueba5Controller@destroy');
//Fin Rutas Relacion morph (Galerias)