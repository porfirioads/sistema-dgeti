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

Route::get('/v_dashboard', function () {
    return view('dashboard_master');
});

Route::get('/v_login', function () {
    return view('login');
});

Route::get('/v_definitivos', function () {
    return view('docente_definitivo.lista');
});

Route::get('/v_definitivo', function () {
    return view('docente_definitivo.editar');
});

Route::get('/v_building', function () {
    return view('building_page');
});

Route::post('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');

Route::get('/landing_directores', function () {
    if (Session::get('haySesion'))
        return view('landingpage_directores');
    else {
        return view('login');
    }
});