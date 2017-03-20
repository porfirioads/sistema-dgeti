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

        return $request['historial_evalacion'];

        /////////////////////////// Docentes ////////////////////////////
        $docente_factory = new DocenteFactory();
        $docente = $docente_factory->crearDocente($request);
        $docente->save();


        /////////////////////////// Plaza////////////////////////////
        ///////////////Nota solo agrega una plaza, falta para más.
        $plaza_codigo           = $request['plaza_codigo'];
        $plaza_tipo             = $request['plaza_tipo'];
        $plaza_nombramiento     = $request['plaza_nombramiento'];


        $plaza = new TipoPlazaDocente([
            'docente_id'            => $docente->id,
            'tipo_nombramiento_id'  => $plaza_nombramiento,
            'plaza'                 => $plaza_codigo,
            'tipo_plaza_horas'      => $plaza_tipo
        ]);


        $plaza->save();



        /////////////////////////// Historial Evaluación////////////////////////////
        ///////////////Nota solo agrega una plaza, falta para más.
        $evaluacion_inicio      = $request['evaluacion_inicio'];
        $evaluacion_vigencia    = $request['evaluacion_vigencia'];
        $evaluacion_resultado  = $request['evaluacion_resultado'];
        $evaluacion_tipo        = $request['evaluacion_tipo'];

        $format = 'm/d/Y';


        $evaluacion =  new Evaluacion([
            'fecha_evaluacion'      =>Carbon::createFromFormat($format, $evaluacion_inicio),
            'vigencia_evaluacion'   => Carbon::createFromFormat($format, $evaluacion_vigencia),
            'tipo_evaluacion_id'    => $evaluacion_tipo,
            'resultado_evaluacion_id'  => $evaluacion_resultado,
        ]);



        $evaluacion->save();

        $historial =  new HistorialEvaluacionDocente([
            'docente_id'        => $docente->id,
            'evaluacion_id'     =>  $evaluacion->id
        ]);
        $historial->save();


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

        redirect('docente_definitivo');
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

        $data[0]['res_plaza'] = TipoPlazaDocente::where('docente_id', '=', $id)->get();

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
        return "EDITAR";
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
        return "ACTUALIZAR";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Docente::find($id)->delete();
        return redirect()->back()->with(["deleted" => "The post was deleted"]);
    }
}
