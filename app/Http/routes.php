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
    return view('landings.main');
});

Route::post('login', 'LoginController@login');

Route::get('logout', 'LoginController@logout');

Route::get('v_building', function () {
    return view('building_page');
});

Route::get('landing_directores', function () {
    return view('landings.directores');
});

Route::group(['middleware' => 'login'], function () {
    Route::resource('docente_definitivo', 'DocenteDefinitivoController');

    Route::get('landing_directores', function () {
        return view('landings.directores');
    });
});