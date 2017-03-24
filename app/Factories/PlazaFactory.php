<?php
/**
 * Created by Santiago García Cabral.
 * User: santiago
 * Date: 11/03/17
 * Time: 1:24 PM
 */
namespace App\Factories;
use App\Models\TipoPlaza;
use App\Models\TipoPlazaDocente;
use Illuminate\Http\Request;



class PlazaFactory
{

    public function crearPlaza(Request $request)
    {
        $plazas=[];
        /////////////////////////// Plaza////////////////////////////
        $plaza_codigo       = $request['plaza_codigo'];
        $plaza_tipo         = $request['plaza_tipo'];
        $plaza_horas        = $request['plaza_horas'];
        $plaza_nombramiento = $request['plaza_nombramiento'];

        $key = 0;
        foreach ($plaza_codigo as $plaza) {
            $tipo_plaza_guardar = new TipoPlaza([
                'numero_horas' => $plaza_horas[$key],
                'descripcion_tipo_plaza_id' => $plaza_tipo[$key]
            ]);
            $plazas[$key]['tipo_plaza']= $tipo_plaza_guardar;


            $plaza_docente = new TipoPlazaDocente([
                'plaza' => $plaza,
                'tipo_nombramiento_id' => $plaza_nombramiento[$key],
                'tipo_plaza_id' => $tipo_plaza_guardar->id
            ]);
            $plazas[$key]['plaza_docente'] =$plaza_docente;
            $key++;
        }

        return $plazas;
    }

}