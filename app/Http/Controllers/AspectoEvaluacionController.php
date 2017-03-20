<?php

namespace App\Http\Controllers;

use App\Models\AspectoEvaluacion;
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
        $aspecto = DB::table('ASPECTO_EVALUACION')->where('clave_aspecto',
            'INFO_GRAL')->first();
        $page_title = 'SNB: Información General';
        $box_title = 'Información General';
        $descripcion_aspecto = $aspecto->descripcion;
        return view('snb.aspecto_evaluacion')->with(compact('page_title',
            'box_title', 'descripcion_aspecto'));
    }
}
