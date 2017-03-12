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
//
//Route::get('/v_login', function () {
//    return view('login');
//});
//
//Route::get('/v_definitivos', function () {
//    return view('docente_definitivo.lista');
//});
//
//Route::get('/v_definitivo', function () {
//    return view('docente_definitivo.editar');
//});
//
//Route::get('/v_building', function () {
//    return view('building_page');
//});

Route::get('/landing_directores', function () {
    if (Session::get('haySesion'))
        return view('landingpage_directores');
    else {
        return view('login')->with(['destino' => '/landing_directores']);
    }
});

Route::get('/spd', function () {
    if (Session::get('haySesion'))
        return view('docente_definitivo.lista');
    else {
        return view('login')->with(['destino' => '/spd']);
    }
});

/*
|--------------------------------------------------------------------------
|                       Docente Definitivo
|--------------------------------------------------------------------------
*/
Route::resource('docente_definitivo', 'DocenteDefinitivoController',
    ['names' =>
        [
            'lista' => 'docente_definitivo.index',
            'mostrar' => 'docente_definitivo.show',
            'nuevo' => 'docente_definitivo.create',
            'guardar' => 'docente_definitivo.store',
            'actualizar' => 'docente_definitivo.update',
            'modificar' => 'docente_definitivo.edit',
            'eliminar' => 'docente_definitivo.destroy'
        ]
    ]
);