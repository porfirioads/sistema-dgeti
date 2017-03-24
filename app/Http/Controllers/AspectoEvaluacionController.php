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

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        switch ($id) {
            case 'A01':
                return $this->showAspectoInfoGeneral();
            case 'A02':
                return $this->showAspectoNormativa();
            case 'A03':
                return $this->showAspectoPlanesProgramas();
            case 'A04':
                return $this->showAspectoPlantaDocente();
            case 'A05':
                break;
            case 'A06':
                break;
            case 'A07':
                break;
            case 'A08':
                break;
        }
    }

    public function showAspectoInfoGeneral()
    {
        $aspecto = AspectoEvaluacion::with(
            'subaspectos_evaluacion.evidencias')->select(['id', 'aspecto',
            'descripcion'])->where('id', '=', 'A01')->first();
        $criterios_existencia = CriterioExistencia::all();
        $criterios_suficiencia = CriterioSuficiencia::all();
        $criterios_pertinencia = CriterioPertinencia::all();
        $page_title = 'SNB: Información General';
        $box_title = 'Información General';
        $aspecto_index = 1;
        return view('snb.aspecto_evaluacion')->with(compact('page_title',
            'box_title', 'aspecto', 'criterios_existencia',
            'criterios_suficiencia', 'criterios_pertinencia', 'aspecto_index'));
    }

    public function showAspectoNormativa()
    {
        $aspecto = AspectoEvaluacion::with(
            'subaspectos_evaluacion.evidencias')->select(['id', 'aspecto',
            'descripcion'])->where('id', '=', 'A02')->first();
        $criterios_existencia = CriterioExistencia::all();
        $criterios_suficiencia = CriterioSuficiencia::all();
        $criterios_pertinencia = CriterioPertinencia::all();
        $page_title = 'SNB: Normativa';
        $box_title = 'Normativa';
        $aspecto_index = 2;
        return view('snb.aspecto_evaluacion')->with(compact('page_title',
            'box_title', 'aspecto', 'criterios_existencia',
            'criterios_suficiencia', 'criterios_pertinencia', 'aspecto_index'));
    }

    public function showAspectoPlanesProgramas()
    {
        $aspecto = AspectoEvaluacion::with(
            'subaspectos_evaluacion.evidencias')->select(['id', 'aspecto',
            'descripcion'])->where('id', '=', 'A03')->first();
        $criterios_existencia = CriterioExistencia::all();
        $criterios_suficiencia = CriterioSuficiencia::all();
        $criterios_pertinencia = CriterioPertinencia::all();
        $page_title = 'SNB: Planes y Programas';
        $box_title = 'Planes y Programas';
        $aspecto_index = 3;
        return view('snb.aspecto_evaluacion')->with(compact('page_title',
            'box_title', 'aspecto', 'criterios_existencia',
            'criterios_suficiencia', 'criterios_pertinencia', 'aspecto_index'));
    }

    public function showAspectoPlantaDocente()
    {
        $aspecto = AspectoEvaluacion::with(
            'subaspectos_evaluacion.evidencias')->select(['id', 'aspecto',
            'descripcion'])->where('id', '=', 'A04')->first();
        $criterios_existencia = CriterioExistencia::all();
        $criterios_suficiencia = CriterioSuficiencia::all();
        $criterios_pertinencia = CriterioPertinencia::all();
        $page_title = 'SNB: Planta Docente';
        $box_title = 'Planta Docente';
        $aspecto_index = 4;
        return view('snb.aspecto_evaluacion')->with(compact('page_title',
            'box_title', 'aspecto', 'criterios_existencia',
            'criterios_suficiencia', 'criterios_pertinencia', 'aspecto_index'));
    }
}
