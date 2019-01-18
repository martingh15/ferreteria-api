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

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::resource('/jugadores', 'JugadorController');
    Route::get('jugador/{nro_camiseta}', 'JugadorController@getOne');
    Route::resource('/partidos', 'PartidoController');
    Route::resource('/usuarios', 'UsuarioController');

});

Route::post("/loginWeb", 'LoginController@loginWeb');
Route::get('/allJugadores', 'JugadorController@getAll');
Route::get('/allPartidos', 'PartidoController@getAll');
Route::get('/allTorneos','TorneoController@getAll');
Route::get('torneo/{idTorneo}', 'TorneoController@getOne');
Route::resource('/asistencias','AsistenciaController');

