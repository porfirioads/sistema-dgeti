<?php
/**
 * Created by Santiago García Cabral.
 * User: santiago
 * Date: 11/03/17
 * Time: 1:24 PM
 */
namespace App\Factories;

use App\Models\Evaluacion;
use Carbon\Carbon;
use Illuminate\Http\Request;



class EvaluacionFactory
{

    public function crearEvaluacion(Request $request)
    {

        $evaluacion_inicio = $request['evaluacion_inicio'];
        $evaluacion_vigencia = $request['evaluacion_vigencia'];
        $evaluacion_resultado = $request['evaluacion_resultado'];
        $evaluacion_tipo = $request['evaluacion_tipo'];


        $format = 'd/m/Y';

        $key = 0;
        $valores =[];
        foreach ($evaluacion_inicio as $evaluacion_) {
            $evaluacion = new Evaluacion([
                'fecha_evaluacion' => Carbon::createFromFormat($format, $evaluacion_inicio[$key]),
                'vigencia_evaluacion' => Carbon::createFromFormat($format, $evaluacion_vigencia[$key]),
                'tipo_evaluacion_id' => $evaluacion_tipo[$key],
                'resultado_evaluacion_id' => $evaluacion_resultado[$key],
            ]);
            $valores[$key++]= $evaluacion;
        }
        return $valores;

    }

}