<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => 'login'], function () {
    Route::resource('docente_definitivo', 'DocenteDefinitivoController');
    Route::get('/v_definitivo', function () {
        return view('docente_definitivo.editar');
    });
    Route::get('/landing_directores', function () {
        return view('landingpage_directores');
    });
});