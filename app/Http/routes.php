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

Route::post('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');

Route::get('v_building', function () {
    return view('building_page');
});

Route::group(['middleware' => 'login'], function () {
    Route::resource('docente_definitivo', 'DocenteDefinitivoController');

    Route::get('landing_directores', function () {
        return view('landings.directores');
    });

    Route::get('snb', function () {
       return view('snb.snb');
    });
});

Route::get('dash', function () {
    return view('dashboard_master');
});

Route::get('defi', function () {
    return view('docente_definitivo.list');
});

Route::get('evaluacion_snb', 'AspectoEvaluacionController@index');

Route::get('info_gral_snb', 'AspectoEvaluacionController@showAspectoInfoGeneral');