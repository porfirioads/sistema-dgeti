<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request['email'];
        $contrasena = $request['contrasena'];
        $loginCorrecto = $email === 'porfirioads@gmail.com'
            && $contrasena === "porfirio";
        
        return response()->json(array('email' => $email, 'contrasena'=>
            $contrasena, 'loginCorrecto' => $loginCorrecto));
//        return response()->json(array('loginCorrecto' => $loginCorrecto));
//        $respuesta = array('loginCorrecto')
//        $respuesta = array('loginCorrecto' =>
//            Auth::attempt(['email' => $request['email'],
//                'password' => $request['contrasena']]));
//        return response()->json($respuesta);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return Redirect::to('dashboard');
        }
        Session::flash('message-error', 'Datos son incorrectos');
        return Redirect::to('/login');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        //
    }
}
