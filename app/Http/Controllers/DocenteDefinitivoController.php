<?php

namespace App\Http\Controllers;

use App\Factories\DocenteDefinitivoFactory;
use App\Models\NumeroHoras;
use App\Models\TipoPlaza;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Factories\DocenteFactory;

use App\Models\ActividadAdmin;
use App\Models\ActividadAdminDocenteDefinitivo;
use App\Models\CampoDisciplinar;
use App\Models\ComponenteFormacion;
use App\Models\Concurso;
use App\Models\Disciplina;
use App\Models\DisciplinaDocente;
use App\Models\Docente;
use App\Models\DocenteATP;
use App\Models\DocenteDefinitivo;
use App\Models\DocenteEvaluador;
use App\Models\DocenteIdoneo;
use App\Models\DocenteTutor;
use App\Models\Evaluacion;
use App\Models\Funcion;
use App\Models\FuncionDocenteTutor;
use App\Models\HistorialEvaluacionDocente;
use App\Models\ResultadoEvaluacion;
use App\Models\Status;
use App\Models\TipoEvaluacion;
use App\Models\TipoNombramiento;
use App\Models\TipoPlazaDocente;
use App\Models\Tutoria;
use Illuminate\Support\Facades\Redirect;

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
        $data['dic_componente_formacion'] = ComponenteFormacion::all();
        $data['dic_campos_disciplinares'] = CampoDisciplinar::all();
        $data['dic_disciplina'] = Disciplina::all();
        $data['dic_tipo_nombramiento'] = TipoNombramiento::all();
        $data['dic_resultados'] = ResultadoEvaluacion::all();
        $data['dic_tipo_resultados']= TipoEvaluacion::all();
        $data['dic_actividad_administrativas'] = ActividadAdmin::all();
        $data['dic_tipo_plaza'] = TipoPlaza::all();

        $data['dic_numero_horas'] = NumeroHoras::all();

        #return  $data;
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

        /////////////////////////// Plaza////////////////////////////
        $plaza_codigo           = $request['plaza_codigo'];
        $plaza_tipo             = $request['plaza_tipo'];
        $plaza_horas             = $request['plaza_horas'];
        $plaza_nombramiento     = $request['plaza_nombramiento'];


        $general=[];

        $general['plaza_codigo']= $request['plaza_codigo'];
        $general['plaza_tipo']= $request['plaza_tipo'];
        $general['plaza_horas']= $request['plaza_horas'];
        $general['plaza_nombramiento']= $request['plaza_nombramiento'];
        return $general;




        $evaluacion_inicio      = $request['evaluacion_inicio'];
        $evaluacion_vigencia    = $request['evaluacion_vigencia'];
        $evaluacion_resultado  = $request['evaluacion_resultado'];
        $evaluacion_tipo        = $request['evaluacion_tipo'];

        $general=[];

        $general['$evaluacion_inicio']=$evaluacion_inicio;
        $general['$evaluacion_vigencia']=$evaluacion_vigencia;
        $general['$evaluacion_resultado']=$evaluacion_resultado;
        $general['$evaluacion_tipo']=$evaluacion_tipo;
        return $general;

        ###################################################################
        /////////////////////////// Docentes ////////////////////////////
        $docente_factory = new DocenteFactory();
        $docente = $docente_factory->crearDocente($request);
        $docente->save();



        /////////////////////////// Datos Académicos////////////////////////////
        $academico_componentes = $request['academico_componentes_formacion'];
        $academico_campo_disciplinar = $request['academico_campo_disciplinar'];
        $academico_disciplina = $request['academico_disciplina'];

        foreach ($academico_disciplina as $disciplina){
            $disciplina_docente =  new DisciplinaDocente([
                'docente_id'    => $docente->id,
                'disciplina_id' => $disciplina
            ]);
            $disciplina_docente->save();
        }



        /////////////////////////// Docente Definitivo ////////////////////////////
        $docente_definitivo =  new DocenteDefinitivo([
            'docente_id'    =>$docente->id
        ]);
        $docente_definitivo->save();


        /////////////////////////// Actividades Administrativas////////////////////////////
        $actividades_administrativas = $request['actividades_administrativas'];

        foreach ($actividades_administrativas as $actividad){
            $actividad =  new ActividadAdminDocenteDefinitivo([
                'docente_definitivo_id' => $docente_definitivo->id,
                'actividad_admin_id'    => $actividad
            ]);
            $actividad->save();
        }

        /////////////////////////// Historial Evaluación////////////////////////////
        $evaluacion_inicio      = $request['evaluacion_inicio'];
        $evaluacion_vigencia    = $request['evaluacion_vigencia'];
        $evaluacion_resultado   = $request['evaluacion_resultado'];
        $evaluacion_tipo        = $request['evaluacion_tipo'];

        $format = 'm/d/Y';


        foreach ($evaluacion_inicio as $key=>$evaluacion){
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
        }


        /////////////////////////// Plaza////////////////////////////
        $plaza_codigo           = $request['plaza_codigo'];
        $plaza_tipo             = $request['plaza_tipo'];
        $plaza_horas             = $request['plaza_horas'];
        $plaza_nombramiento     = $request['plaza_nombramiento'];


        foreach ($plaza_codigo as $key=> $plaza){
            $plaza = new TipoPlazaDocente([
                'plaza'                 => $plaza_codigo[$key],
                'docente_id'            => $docente->id,
                'tipo_nombramiento_id'  => $plaza_nombramiento[$key],
                'tipo_plaza_id'      => $plaza_horas[$key]
            ]);
            $plaza->save();
        }

        redirect()->route('docente_definitivo.index');
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
                                                ->join('DISCIPLINA', 'DISCIPLINA_DOCENTE.disciplina_id', '=', 'DISCIPLINA.id')->get();

        $data[0]['res_plaza'] = TipoPlazaDocente::where('docente_id', '=', $id)
                                    ->join('TIPO_PLAZA','TIPO_PLAZA.id','=','PLAZA_DOCENTE.tipo_plaza_id')
                                    ->join('NUMERO_HORAS','NUMERO_HORAS.id','=','TIPO_PLAZA.numero_horas_id')
                                    ->get();

        //Almacena id del historial del docente
        $data[0]['res_evaluacion'] = HistorialEvaluacionDocente::where('docente_id', '=', $id)
                                                            ->join('EVALUACION', 'HISTORIAL_EVALUACION_DOCENTE.evaluacion_id', '=', 'EVALUACION.id')->get();


        $data[0]['res_docente_definitivo_actividad'] = DocenteDefinitivo::where('docente_id','=',$id)
                                                ->join('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO', 'ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO.docente_definitivo_id', '=', 'DOCENTE_DEFINITIVO.id')->get();


        $data[0]['accion'] = 'visualizar';
        $data[0]['dic_componente_formacion'] = ComponenteFormacion::all();
        $data[0]['dic_campos_disciplinares'] = CampoDisciplinar::all();
        $data[0]['dic_disciplina'] = Disciplina::all();
        $data[0]['dic_tipo_nombramiento'] = TipoNombramiento::all();
        $data[0]['dic_resultados'] = ResultadoEvaluacion::all();
        $data[0]['dic_tipo_resultados']= TipoEvaluacion::all();
        $data[0]['dic_actividad_administrativas'] = ActividadAdmin::all();
        $data[0]['dic_tipo_plaza'] = TipoPlaza::all();
        $data[0]['dic_numero_horas'] = NumeroHoras::all();


        #return  $data[0];
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
            ->join('DISCIPLINA', 'DISCIPLINA_DOCENTE.disciplina_id', '=', 'DISCIPLINA.id')->get();

        $data[0]['res_plaza'] = TipoPlazaDocente::where('docente_id', '=', $id)->get();

        //Almacena id del historial del docente
        $data[0]['res_evaluacion'] = HistorialEvaluacionDocente::where('docente_id', '=', $id)
            ->join('EVALUACION', 'HISTORIAL_EVALUACION_DOCENTE.evaluacion_id', '=', 'EVALUACION.id')->get();


        $data[0]['res_docente_definitivo_actividad'] = DocenteDefinitivo::where('docente_id','=',$id)
            ->join('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO', 'ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO.docente_definitivo_id', '=', 'DOCENTE_DEFINITIVO.id')->get();


        $data[0]['accion'] = 'modificar';
        $data[0]['dic_componente_formacion'] = ComponenteFormacion::all();
        $data[0]['dic_campos_disciplinares'] = CampoDisciplinar::all();
        $data[0]['dic_disciplina'] = Disciplina::all();
        $data[0]['dic_tipo_nombramiento'] = TipoNombramiento::all();
        $data[0]['dic_resultados'] = ResultadoEvaluacion::all();
        $data[0]['dic_tipo_resultados']= TipoEvaluacion::all();
        $data[0]['dic_actividad_administrativas'] = ActividadAdmin::all();
        $data[0]['dic_tipo_plaza'] = TipoPlaza::all();
        $data[0]['dic_numero_horas'] = NumeroHoras::all();


        #return  $data[0];
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
}
