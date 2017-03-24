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
        // Obtener los aspectos de la institución del director actual
        $estado = 'Zacatecas';
        $plantel = 'CETis 114';
        $saeti = 'Saeti';
        $extension = 'Extensión :P';
        $fecha = date('d/m/Y');
        return view('snb.lista_aspectos')->with(compact('aspectos', 'estado',
            'plantel', 'saeti', 'extension', 'fecha'));
    }

    public function showAspectoInfoGeneral()
    {
        // El select de esta instrucción selecciona los campos de la tabla
        // AspectoEvaluacion, para manejar los campos seleccionados de los
        // subaspectos y evidencias se debe ir a los métodos de los eager
        // loaders en sus respectivos modelos.
        $aspecto = AspectoEvaluacion::with(
            'subaspectos_evaluacion.evidencias')->select(['id', 'aspecto',
            'descripcion'])->where('id', '=', 'A01')->first();
        $criterios_existencia = CriterioExistencia::all();
        $criterios_suficiencia = CriterioSuficiencia::all();
        $criterios_pertinencia = CriterioPertinencia::all();
        $page_title = 'SNB: Información General';
        $box_title = 'Información General';
        return view('snb.aspecto_evaluacion')->with(compact('page_title',
            'box_title', 'aspecto', 'criterios_existencia',
            'criterios_suficiencia', 'criterios_pertinencia'));
    }
}
