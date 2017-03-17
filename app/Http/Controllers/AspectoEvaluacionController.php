<?php

namespace App\Http\Controllers;

use App\Models\AspectoEvaluacion;
use App\Models\SubaspectoEvaluacion;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AspectoEvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cont = 1;
        $aspectos = AspectoEvaluacion::all();
        echo '<h1>aspectos</h1>';
        foreach ($aspectos as $aspecto) {
            echo '<h2>aspecto ' . $cont . '</h2>';
            echo $aspecto->subaspectos_evaluacion()->get();
            echo '<br>';
            if ($cont++ == 5) break;
        }
        $cont = 1;
        $subaspectos = SubaspectoEvaluacion::all();
        echo '<h1>subaspectos</h1>';
        foreach ($subaspectos as $subaspecto) {
            echo '<h2>subaspecto ' . $cont . '</h2>';
            echo '<h3>aspecto</h3>';
            echo $subaspecto->aspecto_evaluacion()->get();
            echo '<h3>evidencias</h3>';
            echo $subaspecto->evidencias()->get();
            echo '<br>';
            if ($cont++ == 5) break;
        }
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
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
