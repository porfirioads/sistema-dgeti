<?php
/**
 * Created by Santiago García Cabral.
 * User: santiago
 * Date: 11/03/17
 * Time: 1:24 PM
 */
namespace App\Factories;
use App\Models\TipoPlazaDocente;
use Illuminate\Http\Request;


class PlazaFactory
{

    public function crearPlaza(Request $request, $id)
    {
        $plazas = [];

        /////////////////////////// Plaza////////////////////////////
        $plaza_codigo           = $request['plaza_codigo'];
        $plaza_tipo             = $request['plaza_tipo'];
        $plaza_horas            = $request['plaza_horas'];
        $plaza_nombramiento     = $request['plaza_nombramiento'];

        $horas_frente_grupo         = $request['horas_frente_grupo'];
        $horas_descarga_academica   = $request['horas_descarga_academica'];
        $horas_administrativas      = $request['horas_administrativas'];



        if ($plaza_codigo != null) {
            foreach ($plaza_codigo as  $key => $plaza) {
                $plaza = new TipoPlazaDocente([
                    'plaza' => $plaza,
                    'tipo_nombramiento_id' => $plaza_nombramiento[$key],
                    'docente_id' => $id,
                    'tipo_plaza_id' => $plaza_horas[$key],

                    ////////////Horas////////////////
                    'horas_frente_grupo' => $horas_frente_grupo[$key],
                    'horas_descarga_academica' => $horas_descarga_academica[$key],
                    'horas_administrativas' => $horas_administrativas[$key],
                ]);
                $plazas[$key] = $plaza;

            }
            return $plazas;
        }
        return null;
    }
}