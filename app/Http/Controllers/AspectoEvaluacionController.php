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
                return $this->showAspectoDirectorPlantel();
            case 'A06':
                return $this->showAspectoServiciosEscolares();
            case 'A07':
                return $this->showAspectoInstalacionesEquipamiento();
            case 'A08':
                return $this->showAspectoProgramaMejoraDesarrollo();
            default:
                // TODO return página de elemento no encontrado
        }
    }

    private function getAspectoEager($id)
    {
        return $aspecto = AspectoEvaluacion::with(
            'subaspectos_evaluacion.evidencias')->select(['id', 'aspecto',
            'descripcion'])->where('id', '=', $id)->first();
    }

    public function showAspectoInfoGeneral()
    {
        $aspecto = $this->getAspectoEager('A01');
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
        $aspecto = $this->getAspectoEager('A02');
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
        $aspecto = $this->getAspectoEager('A03');
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
        $aspecto = $this->getAspectoEager('A04');
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

    public function showAspectoDirectorPlantel()
    {
        $aspecto = $this->getAspectoEager('A05');
        $criterios_existencia = CriterioExistencia::all();
        $criterios_suficiencia = CriterioSuficiencia::all();
        $criterios_pertinencia = CriterioPertinencia::all();
        $page_title = 'SNB: Director del Plantel';
        $box_title = 'Director del Plantel';
        $aspecto_index = 5;
        return view('snb.aspecto_evaluacion')->with(compact('page_title',
            'box_title', 'aspecto', 'criterios_existencia',
            'criterios_suficiencia', 'criterios_pertinencia', 'aspecto_index'));
    }

    public function showAspectoServiciosEscolares()
    {
        $aspecto = $this->getAspectoEager('A06');
        $criterios_existencia = CriterioExistencia::all();
        $criterios_suficiencia = CriterioSuficiencia::all();
        $criterios_pertinencia = CriterioPertinencia::all();
        $page_title = 'SNB: Servicios Escolares';
        $box_title = 'Servicios Escolares';
        $aspecto_index = 6;
        return view('snb.aspecto_evaluacion')->with(compact('page_title',
            'box_title', 'aspecto', 'criterios_existencia',
            'criterios_suficiencia', 'criterios_pertinencia', 'aspecto_index'));
    }

    public function showAspectoInstalacionesEquipamiento()
    {
        $aspecto = $this->getAspectoEager('A07');
        $criterios_existencia = CriterioExistencia::all();
        $criterios_suficiencia = CriterioSuficiencia::all();
        $criterios_pertinencia = CriterioPertinencia::all();
        $page_title = 'SNB: Instalaciones y Equipamiento';
        $box_title = 'Instalaciones y Equipamiento';
        $aspecto_index = 7;
        return view('snb.aspecto_evaluacion')->with(compact('page_title',
            'box_title', 'aspecto', 'criterios_existencia',
            'criterios_suficiencia', 'criterios_pertinencia', 'aspecto_index'));
    }

    public function showAspectoProgramaMejoraDesarrollo()
    {
        $aspecto = $this->getAspectoEager('A08');
        $criterios_existencia = CriterioExistencia::all();
        $criterios_suficiencia = CriterioSuficiencia::all();
        $criterios_pertinencia = CriterioPertinencia::all();
        $page_title = 'SNB: Programa de Mejora y Desarrollo';
        $box_title = 'Programa de Mejora y Desarrollo';
        $aspecto_index = 8;
        return view('snb.aspecto_evaluacion')->with(compact('page_title',
            'box_title', 'aspecto', 'criterios_existencia',
            'criterios_suficiencia', 'criterios_pertinencia', 'aspecto_index'));
    }
}
