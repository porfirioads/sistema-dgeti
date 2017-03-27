<?php

namespace App\Http\Controllers;

use App\Models\ComponenteFormacion;
use App\Models\DescripcionTipoPlaza;
use App\Models\DisciplinaDocente;
use App\Models\Docente;
use App\Models\DocenteIdoneo;
use App\Models\HistorialEvaluacionDocente;
use App\Models\ResultadoEvaluacion;
use App\Models\TipoEvaluacion;
use App\Models\TipoNombramiento;
use App\Models\TipoPlaza;
use App\Models\TipoPlazaDocente;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DocenteIdoneoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $docentes_ideoneos =DocenteIdoneo::join ('DOCENTE','DOCENTE.id','=','DOCENTE_IDONEO.docente_id')->get();

        return view('docente_idoneo.lista')->with('docentes',$docentes_ideoneos);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Docente::where('id', $id)->get()->first();
        $data = $this->getDatosDocente($data, $id);

        $data['accion'] = 'visualizar';

        $data = $this->getDiccionarios($data);

        #return $data;
        return view('docente_idoneo.editar')->with('data', $data);
    }


    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    private function getDatosDocente($data, $id)
    {

        /////////////////   DISCIPLINAS   /////////////////
        $data['res_disciplina'] = DisciplinaDocente::where('docente_id', '=', $id)
            ->join('DISCIPLINA', 'DISCIPLINA.id', '=', 'DISCIPLINA_DOCENTE.disciplina_id')
            ->join('CAMPO_DISCIPLINAR', 'CAMPO_DISCIPLINAR.id', '=', 'DISCIPLINA.campo_disciplinar_id')
            ->join('COMPONENTE_FORMACION', 'COMPONENTE_FORMACION.id', '=', 'CAMPO_DISCIPLINAR.componente_formacion_id')
            ->get();

        /////////////////   PLAZAS   /////////////////
        $data['res_plaza'] = TipoPlazaDocente::where('docente_id', '=', $id)
            ->join('TIPO_PLAZA', 'TIPO_PLAZA.id', '=', 'PLAZA_DOCENTE.tipo_plaza_id')
            ->join('DESCRIPCION_TIPO_PLAZA', 'DESCRIPCION_TIPO_PLAZA.id', '=', 'TIPO_PLAZA.descripcion_tipo_plaza_id')
            ->get();

        /////////////////   EVALUACIONES   /////////////////
        $data['res_evaluacion'] = HistorialEvaluacionDocente::where('docente_id', '=', $id)
            ->join('EVALUACION', 'HISTORIAL_EVALUACION_DOCENTE.evaluacion_id', '=', 'EVALUACION.id')->get();
        return $data;
    }


    /**
     * @param $data
     * @return mixed
     */
    private function getDiccionarios($data)
    {
        ///////////////// COMPONENTE FORMACION /////////////////
        $data['dic_componente_formacion'] = ComponenteFormacion::all();
        $data['dic_tipo_nombramiento'] = TipoNombramiento::all();

        ///////////////// EVALUACIONES  /////////////////
        $data['dic_resultados'] = ResultadoEvaluacion::all();
        $data['dic_tipo_resultados'] = TipoEvaluacion::all();

        /////////////////   PLAZAS     /////////////////
        $data['dic_hora_plaza'] = TipoPlaza::all();
        $data['dic_descripcion_plaza'] = DescripcionTipoPlaza::all();
        return $data;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
