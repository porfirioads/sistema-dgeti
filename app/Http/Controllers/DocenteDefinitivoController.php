<?php

namespace App\Http\Controllers;

use App\Factories\DocenteDefinitivoFactory;
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


        $data = Docente::where('id','=',1)->get();


        $data[0]['accion']='crear';
        $data[0]['dic_componente_formacion']= ComponenteFormacion::all();
        $data[0]['dic_campos_disciplinares']=CampoDisciplinar::all();
        $data[0]['dic_disciplina']=Disciplina::all();
        $data[0]['dic_tipo_nombramiento']=TipoNombramiento::all();
        $data[0]['dic_resultados']=ResultadoEvaluacion::all();
        $data[0]['dic_actividad_administrativas']=ActividadAdmin::all();

        return $data[0];
        return view('docente_definitivo.editar')->with('data',$data[0]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Docente::where('id',$id)
            ->get();



        //Almacena id de las disciplinas del docente
        $data[0]['res_disciplina_docente_id']=DisciplinaDocente::where('docente_id','=',$id)->lists('disciplina_id')->toArray();
        //Almacena id de los disciplinas del docente
        #foreach($data[0]['res_disciplina_docente_id'] as $disciplinas => $dis)
        #    $temporal_campo_disciplina = Disciplina::where('id','=',$dis)->lists('campo_disciplinar_id')->toArray();
        #$data[0]['res_campo_disciplina_docente_id'] = $temporal_campo_disciplina;
        //Almacena los componentes formacion del docente
        #foreach($data[0]['res_campo_disciplina_docente_id'] as $campos_disciplinas => $camp_dis)
        #    $temporal_componentes[] = CampoDisciplinar::select('componente_formacion_id')->where('id','=',$camp_dis[0]['campo_disciplinar_id'])->get();
        #$data[0]['res_componente_formacion_docente'] = $temporal_componentes;
        //Almacena id del tipo plaza del docente
        $data[0]['res_tipo_plaza_docente_id'] = TipoPlazaDocente::where('docente_id','=',$id)->lists('id')->toArray();
        //Almacena id del tipo nombramiento del docente
        $data[0]['res_tipo_nombramiento_docente_id'] = TipoPlazaDocente::where('docente_id','=',$id)->lists('tipo_nombramiento_id')->toArray();
        //Almacena id del historial del docente
        $data[0]['res_historial_evaluacion_docente_id'] = HistorialEvaluacionDocente::where('docente_id','=',$id)->lists('id')->toArray();
        //Almacena id de la evaluacion del docente
        $data[0]['res_evaluacion_docente_id'] = HistorialEvaluacionDocente::where('docente_id','=',$id)->lists('evaluacion_id')->toArray();
        //Almacena id tipo y resultado de evaluacion del docente
        #foreach($data[0]['res_evaluacion_docente_id'] as $evaluaciones => $eva)
        #    $temporal_tipo_evaluacion[] = Evaluacion::select('tipo_evaluacion_id')->where('id','=',$eva['evaluacion_id'])->get();
        #foreach($data[0]['res_evaluacion_docente_id'] as $evaluaciones => $eva)
        #    $temporal_resultado_evaluacion[] = Evaluacion::select('resultado_evaluacion_id')->where('id','=',$eva['evaluacion_id'])->get();
        //Almacena id tipo y resultado de evaluacion del docente
        #$data[0]['res_tipo_evaluacion_docente_id'] = $temporal_tipo_evaluacion;
        //Almacena id tipo y resultado de evaluacion del docente
        #$data[0]['res_resultado_evluacion_docente_id'] = $temporal_resultado_evaluacion;
        //Almacena id del docente definitivo del docente
        $data[0]['res_docente_definitivo_id'] = DocenteDefinitivo::where('docente_id','=',$id)->lists('id')->toArray();
        //Almacena actividades administrativas id del docente
        #foreach($data[0]['res_docente_definitivo_id'] as $actividades_admin => $act)
        #    $temporal_actividades_admin[] = ActividadAdminDocenteDefinitivo::select('actividad_admin_id')->where('docente_definitivo_id','=',$act['id'])->get();
        //Almacena actividades administrativas id del docente
        #$data[0]['res_actividad_administrativas_docente_id'] = $temporal_actividades_admin;

        $data[0]['accion']='modificar';
        $data[0]['dic_componente_formacion']= ComponenteFormacion::all();
        $data[0]['dic_campos_disciplinares']=CampoDisciplinar::all();
        $data[0]['dic_disciplina']=Disciplina::all();
        $data[0]['dic_tipo_nombramiento']=TipoNombramiento::all();
        $data[0]['dic_resultados']=ResultadoEvaluacion::all();
        $data[0]['dic_actividad_administrativas']=ActividadAdmin::all();

        #return  $data[0];
        return view('docente_definitivo.editar')->with('data',$data[0]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id         $disciplinas = DisciplinaDocente::with('disciplina.campo_disciplinar.componente_formacion')
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
        return "DESTROY";
    }
}
