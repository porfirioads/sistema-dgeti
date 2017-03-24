<?php

namespace App\Http\Controllers;

use App\Factories\EvaluacionFactory;
use App\Factories\PlazaFactory;
use App\Models\DescripcionTipoPlaza;
use App\Models\TipoPlaza;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Factories\DocenteFactory;
use App\Models\CampoDisciplinar;
use App\Models\ComponenteFormacion;
use App\Models\Disciplina;
use App\Models\DisciplinaDocente;
use App\Models\Docente;
use App\Models\DocenteDefinitivo;
use App\Models\DocenteIdoneo;
use App\Models\Evaluacion;
use App\Models\HistorialEvaluacionDocente;
use App\Models\ResultadoEvaluacion;
use App\Models\TipoEvaluacion;
use App\Models\TipoNombramiento;
use App\Models\TipoPlazaDocente;


class DocenteDefinitivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes_definitivos =DocenteDefinitivo::join ('DOCENTE','DOCENTE.id','=','DOCENTE_DEFINITIVO.docente_id')->get();

        return view('docente_definitivo.lista')->with('docentes',$docentes_definitivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Docente([]);;

        $data['accion'] = 'crear';

        $data = $this->getDiccionarios($data);

        #return $data;
        return view('docente_definitivo.editar')->with('data', $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /////////////////////////// Docentes ////////////////////////////
        $docente_factory = new DocenteFactory();

        $docente = $docente_factory->crearDocente($request);

        $docente->save();


        /////////////////////////// Datos Académicos////////////////////////////
        $academico_disciplina = $request['disciplina'];

        foreach ($academico_disciplina as $disciplina) {
            if ($disciplina != -1) {
                $disciplina_docente = new DisciplinaDocente([
                    'docente_id' => $docente->id,
                    'disciplina_id' => $disciplina
                ]);
                $disciplina_docente->save();
            }
        }


        /////////////////////////// Docente Definitivo ////////////////////////////
        $docente_definitivo = new DocenteDefinitivo([
            'docente_id' => $docente->id
        ]);
        $docente_definitivo->save();


        /////////////////////////// Historial Evaluación////////////////////////////

        $evaluacion_factory =  new EvaluacionFactory();

        foreach ($evaluacion_factory->crearEvaluacion($request) as $evaluacion){
            $evaluacion->save();
            $historial_evaluacion = new HistorialEvaluacionDocente([
                'evaluacion_id' => $evaluacion->id,
                'docente_id' => $docente->id
            ]);
            $historial_evaluacion->save();
        }

        /////////////////////////// Plaza////////////////////////////
        $plaza_codigo           = $request['plaza_codigo'];
        $plaza_tipo             = $request['plaza_tipo'];
        $plaza_horas            = $request['plaza_horas'];
        $plaza_nombramiento     = $request['plaza_nombramiento'];


        $key=0;
        foreach ($plaza_codigo as $plaza){


            $plaza = new TipoPlazaDocente([
                'plaza'                 => $plaza,
                'tipo_nombramiento_id'  => $plaza_nombramiento[$key],
                'docente_id'            => $docente->id,
                'tipo_plaza_id'         => $plaza_horas[$key]
            ]);

            $plaza->save();
            $key++;
        }

        $request->session()->flash('alert-success', '¡Docente agregado correctamente!');

        return redirect()->action('DocenteDefinitivoController@index');
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

        $docente = Docente::where('id', $id)->get()->first();

        $docente->cct                       =   $request['cct'];
        $docente->curp                      =   $request['curp'];
        $docente->rfc                       =   $request['rfc'];
        $docente->nombre                    =   $request['nombre'];
        $docente->primer_apellido           =   $request['primer_apellido'];
        $docente->segundo_apellido          =   $request['segundo_apellido'];
        $docente->perfil_profesional        =   $request['perfil_profesional'];
        $docente->horas_frente_grupo        =   $request['horas_frente_grupo'];
        $docente->horas_descarga_academica  =   $request['horas_descarga_academica'];
        $docente->horas_administrativas     =   $request['horas_administrativas'];
        $docente->correo                    =   $request['correo'];
        $docente->telefono_celular          =   $request['telefono_celular'];
        $docente->telefono_domicilio        =   $request['telefono_domicilio'];
        $docente->domicilio                 =   $request['domicilio'];

        $docente->save();


        /////////////////////////// Datos Académicos////////////////////////////
        //////////////////////////  ELIMINAMOS  //////////////////////////
        DisciplinaDocente::where('docente_id', '=', $id)->delete();
        //////////////////////////  ELIMINAMOS  //////////////////////////

        $academico_disciplina = $request['disciplina'];

        foreach ($academico_disciplina as $disciplina) {
            if ($disciplina != -1) {
                $disciplina_docente = new DisciplinaDocente([
                    'docente_id' => $docente->id,
                    'disciplina_id' => $disciplina
                ]);
                $disciplina_docente->save();
            }
        }


        /////////////////////////// Historial Evaluación////////////////////////////

        //////////////////////////  ELIMINAMOS  //////////////////////////
        HistorialEvaluacionDocente::where('docente_id', '=', $id)->delete();
        //////////////////////////  ELIMINAMOS  //////////////////////////


        $evaluacion_factory =  new EvaluacionFactory();


        foreach ($evaluacion_factory->crearEvaluacion($request) as $evaluacion){
            $evaluacion->save();
            $historial_evaluacion = new HistorialEvaluacionDocente([
                'evaluacion_id' => $evaluacion->id,
                'docente_id' => $docente->id
            ]);
            $historial_evaluacion->save();
        }


        /////////////////////////// Plaza////////////////////////////
        //////////////////////////  ELIMINAMOS  //////////////////////////
        TipoPlazaDocente::where('docente_id', '=', $id)->delete();
        //////////////////////////  ELIMINAMOS  //////////////////////////

        /////////////////////////// Plaza////////////////////////////
        $plaza_codigo           = $request['plaza_codigo'];
        $plaza_tipo             = $request['plaza_tipo'];
        $plaza_horas            = $request['plaza_horas'];
        $plaza_nombramiento     = $request['plaza_nombramiento'];


        $key=0;
        foreach ($plaza_codigo as $plaza){
            $tipo_plaza_guardar =  new TipoPlaza([
                'numero_horas'          =>      $plaza_horas[$key],
                'descripcion_tipo_plaza_id'  =>  $plaza_tipo[$key]
            ]);
            $tipo_plaza_guardar->save();

            $plaza = new TipoPlazaDocente([
                'plaza'                 => $plaza,
                'tipo_nombramiento_id'  => $plaza_nombramiento[$key],
                'docente_id'            => $docente->id,
                'tipo_plaza_id'         => $tipo_plaza_guardar->id
            ]);

            $plaza->save();
            $key++;
        }
        //return $docente;
        return redirect()->action('DocenteDefinitivoController@index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Docente::where('id', $id)->get()->first();
        $data = $this->getDatosDocente($data, $id);

        $data['accion'] = 'visualizar';

        $data = $this->getDiccionarios($data);

        #return $data;
        return view('docente_definitivo.editar')->with('data', $data);
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
     * @param  int $id $disciplinas = DisciplinaDocente::with('disciplina.campo_disciplinar.componente_formacion')
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Docente::where('id', $id)->get()->first();

        $data = $this->getDatosDocente($data, $id);

        $data['accion'] = 'modificar';

        $data = $this->getDiccionarios($data);
        #return $data;
        return view('docente_definitivo.editar')->with('data', $data);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $docenteDelete = Docente::where('id', '=', $id)->exists();
        $docenteDefinitivoDelete = DocenteDefinitivo::where('docente_id', '=', $id)->exists();
        $historialEvaluacionDelete = HistorialEvaluacionDocente::where('docente_id', '=', $id)->exists();
        $plazaDocenteDelete = TipoPlazaDocente::where('docente_id', '=', $id)->exists();
        $disciplinaDocenteDelete = DisciplinaDocente::where('docente_id', '=', $id)->exists();
        $docenteIdoneoDocenteDelete = DocenteIdoneo::where('docente_id', '=', $id)->exists();
        $docenteDefinitivoDocenteDelete = DocenteDefinitivo::where('docente_id', '=', $id)->exists();


        if ($docenteDelete) {
            $dataDocente = Docente::find($id)->delete();
        }

        if($docenteDefinitivoDelete){
            $docenteDefinitivoDelete = DocenteDefinitivo::where('docente_id', '=', $id)->delete();
        }

        if ($historialEvaluacionDelete) {
            $dataHistorial = HistorialEvaluacionDocente::where('docente_id', '=', $id)->delete();
        }

        if ($plazaDocenteDelete) {
            $dataPlaza = TipoPlazaDocente::where('docente_id', '=', $id)->delete();
        }

        if ($disciplinaDocenteDelete) {
            $dataDisciplina = DisciplinaDocente::where('docente_id', '=', $id)->delete();
        }

        if ($docenteIdoneoDocenteDelete) {
            $dataIdoneo = DocenteIdoneo::where('docente_id', '=', $id)->delete();
        }

        if ($docenteDefinitivoDocenteDelete) {
            $dataDocenteDefinitivo = DocenteDefinitivo::where('docente_id', '=', $id)->delete();
        }

        $request->session()->flash('alert-success', '¡Docente eliminado correctamente!');

        return response()->json(['eliminado' => $docenteDelete]);
    }


    public function obtener_campo_disciplinar(Request $request)
    {
        $componente_formacion_id = $request->input('componente_formacion_id');

        $campos_disciplinares = CampoDisciplinar::where('componente_formacion_id', '=', $componente_formacion_id)->get();

        return response()->json($campos_disciplinares);
    }


    public function obtener_disciplinas(Request $request)
    {
        $campo_disciplinar_id = $request->input('campo_disciplinar_id');

        $disciplinas = Disciplina::where('campo_disciplinar_id', '=', $campo_disciplinar_id)->get();

        return response()->json($disciplinas);
    }


    public function obtener_numero_horas(Request $request)
    {
        $descripcion_tipo_plaza_id = $request->input('descripcion_tipo_plaza_id');

        $numero_horas = TipoPlaza::where('descripcion_tipo_plaza_id', '=', $descripcion_tipo_plaza_id)->get();

        return response()->json($numero_horas);
    }
}
