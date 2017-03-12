<?php

namespace App\Http\Controllers;

use App\Factories\DocenteDefinitivoFactory;
use App\Models\CampoDisciplinar;
use App\Models\ComponenteFormacion;
use App\Models\Disciplina;
use App\Models\Docente;
use App\Models\DocenteDefinitivo;
use Illuminate\Http\Request;
use App\Factories\DocenteFactory;


class DocenteDefinitivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $docentes_definitivos = DocenteDefinitivo::all();
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
        $componentes_formacion = [];
        $valores = [];
        foreach (ComponenteFormacion::all() as $componente_bd) {
            echo '<br>';
            $componente_attrs = $componente_bd['attributes'];
            $componente_ok['id'] = $componente_attrs['id'];
            $componente_ok['componente_formacion']
                = $componente_attrs['componente_formacion'];
            $componente_ok['campos_disciplinares'] = [];
//            print_r($componente_attrs);
//            echo '<br>';
            foreach (CampoDisciplinar::where('componente_formacion_id',
                $componente_attrs['id'])->get() as $campo_bd) {
                $campo_attrs = $campo_bd['attributes'];
                $campo_ok['id'] = $campo_attrs['id'];
                $campo_ok['campo_disciplinar'] = $campo_attrs['campo_disciplinar'];
                array_push($componente_ok['campos_disciplinares'], $campo_ok);
//                print_r($campo_attrs);
//                echo '<br>';
                $campo_ok['disciplinas'] = [];
                foreach (Disciplina::where('campo_disciplinar_id',
                    $campo_attrs['id'])->get() as $disciplina_bd) {
                    $disciplina_attrs = $disciplina_bd['attributes'];
                    $disciplina_ok['id'] = $disciplina_attrs['id'];
                    $disciplina_ok['disciplina'] = $disciplina_attrs['disciplina'];
                    array_push($campo_ok['disciplinas'], $disciplina_ok);
//                    print_r($disciplina_attrs);
//                    echo '<br>';
                }
            }
            array_push($componentes_formacion, $componente_ok);
        }
        return view('docente_definitivo.editar')->with('componentesFormacion',
            $componentes_formacion);
        #return $valores;
//        return view('docente_definitivo.editar', ['data' => $valores]);
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
        return "SHOW";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
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
