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

        #return $data[0];
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



        $data = Docente::with(array(
            'disciplina_docente.disciplina.campo_disciplinar.componente_formacion',
            'tipo_plaza_docente.tipo_nombramiento',
            'historial_evaluacion_docente.evaluacion.resultado_evaluacion',
            'historial_evaluacion_docente.evaluacion.tipo_evaluacion',
            'docente_definitivo.actividad_admin_docente_definitivo.actividadadmin'))
            ->where('id',$id)
            ->get();


        $data[0]['accion']='ver';
        $data[0]['dic_componente_formacion']= ComponenteFormacion::all();
        $data[0]['dic_campos_disciplinares']=CampoDisciplinar::all();
        $data[0]['dic_disciplina']=Disciplina::all();
        $data[0]['dic_tipo_nombramiento']=TipoNombramiento::all();
        $data[0]['dic_resultados']=ResultadoEvaluacion::all();
        $data[0]['dic_actividad_administrativas']=ActividadAdmin::all();

        #return $data[0];
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
