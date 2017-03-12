<?php

namespace App\Http\Controllers;

use App\Models\CampoDisciplinar;
use App\Models\ComponenteFormacion;
use Illuminate\Http\Request;
use App\Factories\DocenteFactory;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valores=[];
        foreach (ComponenteFormacion::all() as $componente){
            $temporal=[
                'componente_formacion'=>$componente,
                'campos_disciplinares'=>CampoDisciplinar::where('componente_formacion_id',$componente->id)->get()];

            array_push($valores, $temporal);
        }

        return view('docente_definitivo.editar',['data'=>$valores]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docente_factory = new DocenteFactory();
        $docente = $docente_factory->crearDocente($request);

        $docente->save();
        //ya contiene id que rico
        return $docente;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "SHOW";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "EDITAR";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "ACTUALIZAR";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
