<?php

namespace App\Http\Controllers;

use App\Models\AspectoEvaluacion;
use App\Models\CriterioExistencia;
use App\Models\CriterioPertinencia;
use App\Models\CriterioSuficiencia;
use App\Models\SubaspectoEvaluacion;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AspectoEvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspectos = AspectoEvaluacion::all();
        // TODO Obtener los aspectos de la institución del director actual
        $estado = 'Zacatecas';
        $plantel = 'CETis 114';
        $saeti = 'Saeti';
        $extension = 'Extensión :P';
        $fecha = date('d/m/Y');
        return view('snb.lista_aspectos')->with(compact('aspectos', 'estado',
            'plantel', 'saeti', 'extension', 'fecha'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aspecto = AspectoEvaluacion::with(
            'subaspectos_evaluacion.evidencias')->select(['id', 'aspecto',
            'descripcion'])->where('id', '=', $id)->first();
        if ($aspecto) {
            $criterios_existencia = CriterioExistencia::all();
            $criterios_suficiencia = CriterioSuficiencia::all();
            $criterios_pertinencia = CriterioPertinencia::all();
            $aspecto_index = substr($id, 1, 1) == 0 ? substr($id, 2, 1) :
                substr($id, 1, 2);
            return view('snb.aspecto_evaluacion')->with(compact('page_title',
                'box_title', 'aspecto', 'criterios_existencia',
                'criterios_suficiencia', 'criterios_pertinencia',
                'aspecto_index'));
        } else {
            // TODO Mostrar página de no encontrado
        }
    }
}
