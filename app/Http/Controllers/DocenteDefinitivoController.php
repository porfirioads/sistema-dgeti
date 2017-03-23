<?php

namespace App\Http\Controllers;

use App\Models\DescripcionTipoPlaza;
use App\Models\NumeroHoras;
use App\Models\TipoPlaza;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Factories\DocenteFactory;
use App\Models\ActividadAdmin;
use App\Models\ActividadAdminDocenteDefinitivo;
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
        $docentes_definitivos = Docente::all();

        return view('docente_definitivo.lista')->with('docentes',
            $docentes_definitivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $data =  new Docente([]);;


        $data['accion'] = 'crear';
        ///////////////// COMPONENTE FORMACION /////////////////
        $data['dic_componente_formacion'] = ComponenteFormacion::all();
        $data['dic_tipo_nombramiento'] = TipoNombramiento::all();

        ///////////////// EVALUACIONES  /////////////////
        $data['dic_resultados'] = ResultadoEvaluacion::all();
        $data['dic_tipo_resultados']= TipoEvaluacion::all();

        $data['dic_hora_plaza'] = TipoPlaza::all();
        $data['dic_descripcion_plaza'] = DescripcionTipoPlaza::all();


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
/*        $plaza_codigo           = $request['plaza_codigo'];
        $plaza_tipo             = $request['plaza_tipo'];
        $plaza_horas            = $request['plaza_horas'];
        $plaza_nombramiento     = $request['plaza_nombramiento'];

        $data = [];
        $data ['$plaza_codigo'] =$plaza_codigo;
        $data ['$plaza_tipo'] =$plaza_tipo;
        $data ['$plaza_horas'] =$plaza_horas;
        $data ['$plaza_nombramiento'] =$plaza_nombramiento;

        return $data;*/

        ###################################################################
        /////////////////////////// Docentes ////////////////////////////
        $docente_factory = new DocenteFactory();
        $docente = $docente_factory->crearDocente($request);
        $docente->save();



        /////////////////////////// Datos Académicos////////////////////////////
        $academico_disciplina = $request['disciplina'];

        foreach ($academico_disciplina as $disciplina){
            if($disciplina != -1){
                $disciplina_docente =  new DisciplinaDocente([
                    'docente_id'    => $docente->id,
                    'disciplina_id' => $disciplina
                ]);
                $disciplina_docente->save();
            }
        }



        /////////////////////////// Docente Definitivo ////////////////////////////
        $docente_definitivo =  new DocenteDefinitivo([
            'docente_id'    =>$docente->id
        ]);
        $docente_definitivo->save();


        /////////////////////////// Historial Evaluación////////////////////////////
        $evaluacion_inicio      = $request['evaluacion_inicio'];
        $evaluacion_vigencia    = $request['evaluacion_vigencia'];
        $evaluacion_resultado   = $request['evaluacion_resultado'];
        $evaluacion_tipo        = $request['evaluacion_tipo'];

        $format = 'd/m/Y';
        $key = 0;
        foreach ($evaluacion_inicio as $evaluacion_){
            $evaluacion =  new Evaluacion([
                'fecha_evaluacion'      =>Carbon::createFromFormat($format, $evaluacion_inicio[$key]),
                'vigencia_evaluacion'   => Carbon::createFromFormat($format, $evaluacion_vigencia[$key]),
                'tipo_evaluacion_id'    => $evaluacion_tipo[$key],
                'resultado_evaluacion_id'  => $evaluacion_resultado[$key],
            ]);
            $evaluacion->save();

            $historial_evaluacion  =  new HistorialEvaluacionDocente([
                'evaluacion_id'     =>  $evaluacion->id,
                'docente_id'        =>  $docente->id
                ]);
            $historial_evaluacion->save();
            $key++;
        }


        /////////////////////////// Plaza////////////////////////////
        $plaza_codigo           = $request['plaza_codigo'];
        $plaza_tipo             = $request['plaza_tipo'];
        $plaza_horas            = $request['plaza_horas'];
        $plaza_nombramiento     = $request['plaza_nombramiento'];

        $key=0;

        $agregado = [];
        foreach ($plaza_codigo as $plaza){
            $tipo_plaza_guardar =  new TipoPlaza([
                'numero_horas'          =>      $plaza_horas[$key],
                'descripcion_tipo_plaza_id'  =>  $plaza_tipo[$key]
            ]);
            $tipo_plaza_guardar->save();
            $agregado[$key]['tipo']=$tipo_plaza_guardar;


            $plaza = new TipoPlazaDocente([
                'plaza'                 => $plaza,
                'tipo_nombramiento_id'  => $plaza_nombramiento[$key],
                'docente_id'            => $docente->id,
                'tipo_plaza_id'         => $tipo_plaza_guardar->id
            ]);

            $plaza->save();
            $agregado[$key]['plaza']=$plaza;
            $key++;
        }

        return $agregado;
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
        $data = Docente::where('id', $id)
            ->get();


        //Almacena id de las disciplinas del docente
        $data[0]['res_disciplina'] = DisciplinaDocente::where('docente_id', '=', $id)
                                                ->join('DISCIPLINA', 'DISCIPLINA.id', '=', 'DISCIPLINA_DOCENTE.disciplina_id')
                                                ->join('CAMPO_DISCIPLINAR', 'CAMPO_DISCIPLINAR.id', '=', 'DISCIPLINA.campo_disciplinar_id')
                                                ->join('COMPONENTE_FORMACION', 'COMPONENTE_FORMACION.id', '=', 'CAMPO_DISCIPLINAR.componente_formacion_id')
            ->get();


        $data[0]['res_plaza'] = TipoPlazaDocente::where('docente_id', '=', $id)
                                    ->join('TIPO_PLAZA','TIPO_PLAZA.id','=','PLAZA_DOCENTE.tipo_plaza_id')
                                    ->join('DESCRIPCION_TIPO_PLAZA','DESCRIPCION_TIPO_PLAZA.id','=','TIPO_PLAZA.descripcion_tipo_plaza_id')
                                    ->get();

        //Almacena id del historial del docente
        $data[0]['res_evaluacion'] = HistorialEvaluacionDocente::where('docente_id', '=', $id)
                                                            ->join('EVALUACION', 'HISTORIAL_EVALUACION_DOCENTE.evaluacion_id', '=', 'EVALUACION.id')->get();


        $data[0]['accion'] = 'visualizar';

        ///////////////// COMPONENTE FORMACION /////////////////
        $data[0]['dic_componente_formacion'] = ComponenteFormacion::all();
        $data[0]['dic_tipo_nombramiento'] = TipoNombramiento::all();

        ///////////////// EVALUACIONES  /////////////////
        $data[0]['dic_resultados'] = ResultadoEvaluacion::all();
        $data[0]['dic_tipo_resultados']= TipoEvaluacion::all();

        $data[0]['dic_hora_plaza'] = TipoPlaza::all();
        $data[0]['dic_descripcion_plaza'] = DescripcionTipoPlaza::all();



        #return $data;
        return view('docente_definitivo.editar')->with('data', $data[0]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id $disciplinas = DisciplinaDocente::with('disciplina.campo_disciplinar.componente_formacion')
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Docente::where('id', $id)
            ->get();


        //Almacena id de las disciplinas del docente
        $data[0]['res_disciplina'] = DisciplinaDocente::where('docente_id', '=', $id)
            ->join('DISCIPLINA', 'DISCIPLINA.id', '=', 'DISCIPLINA_DOCENTE.disciplina_id')
            ->join('CAMPO_DISCIPLINAR', 'CAMPO_DISCIPLINAR.id', '=', 'DISCIPLINA.campo_disciplinar_id')
            ->join('COMPONENTE_FORMACION', 'COMPONENTE_FORMACION.id', '=', 'CAMPO_DISCIPLINAR.componente_formacion_id')
            ->get();


        $data[0]['res_plaza'] = TipoPlazaDocente::where('docente_id', '=', $id)
            ->join('TIPO_PLAZA','TIPO_PLAZA.id','=','PLAZA_DOCENTE.tipo_plaza_id')
            ->join('DESCRIPCION_TIPO_PLAZA','DESCRIPCION_TIPO_PLAZA.id','=','TIPO_PLAZA.descripcion_tipo_plaza_id')
            ->get();

        //Almacena id del historial del docente
        $data[0]['res_evaluacion'] = HistorialEvaluacionDocente::where('docente_id', '=', $id)
            ->join('EVALUACION', 'HISTORIAL_EVALUACION_DOCENTE.evaluacion_id', '=', 'EVALUACION.id')->get();


        $data[0]['accion'] = 'modificar';

        ///////////////// COMPONENTE FORMACION /////////////////
        $data[0]['dic_componente_formacion'] = ComponenteFormacion::all();
        $data[0]['dic_tipo_nombramiento'] = TipoNombramiento::all();

        ///////////////// EVALUACIONES  /////////////////
        $data[0]['dic_resultados'] = ResultadoEvaluacion::all();
        $data[0]['dic_tipo_resultados']= TipoEvaluacion::all();

        $data[0]['dic_hora_plaza'] = TipoPlaza::all();
        $data[0]['dic_descripcion_plaza'] = DescripcionTipoPlaza::all();



        #return $data;
        return view('docente_definitivo.editar')->with('data', $data[0]);
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
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docenteDelete = Docente::where('id', '=', $id)->exists();
        $historialEvaluacionDelete = HistorialEvaluacionDocente::where('docente_id', '=', $id)->exists();
        $plazaDocenteDelete = TipoPlazaDocente::where('docente_id', '=', $id)->exists();
        $disciplinaDocenteDelete = DisciplinaDocente::where('docente_id', '=', $id)->exists();
        $docenteIdoneoDocenteDelete = DocenteIdoneo::where('docente_id', '=', $id)->exists();
        $docenteDefinitivoDocenteDelete = DocenteDefinitivo::where('docente_id', '=', $id)->exists();


        if ($docenteDelete) {
            $dataDocente = Docente::find($id)->delete();
        }

        if ($historialEvaluacionDelete) {
            $dataHistorial = HistorialEvaluacionDocente::where('docente_id', '=', $id)->delete();
        }

        if($plazaDocenteDelete){
            $dataPlaza = TipoPlazaDocente::where('docente_id', '=', $id)->delete();
        }

        if($disciplinaDocenteDelete){
            $dataDisciplina = DisciplinaDocente::where('docente_id', '=', $id)->delete();
        }

        if($docenteIdoneoDocenteDelete){
            $dataIdoneo = DocenteIdoneo::where('docente_id', '=', $id)->delete();
        }

        if($docenteDefinitivoDocenteDelete){
            $dataDocenteDefinitivo = DocenteDefinitivo::where('docente_id', '=', $id)->delete();
        }



        return response()->json(['eliminado'=>$docenteDelete]);
    }

    public function obtener_campo_disciplinar(Request $request){
        $componente_formacion_id = $request->input('componente_formacion_id');

        $campos_disciplinares = CampoDisciplinar::where('componente_formacion_id','=',$componente_formacion_id)->get();

        return response()->json($campos_disciplinares);
    }

    public function obtener_disciplinas(Request $request){
        $campo_disciplinar_id = $request->input('campo_disciplinar_id');

        $disciplinas = Disciplina::where('campo_disciplinar_id','=',$campo_disciplinar_id)->get();

        return response()->json($disciplinas);
    }

    public function obtener_numero_horas(Request $request){
        $descripcion_tipo_plaza_id = $request->input('descripcion_tipo_plaza_id');

        $numero_horas = TipoPlaza::where('descripcion_tipo_plaza_id','=',$descripcion_tipo_plaza_id)->get();

        return response()->json($numero_horas);

    }
}
