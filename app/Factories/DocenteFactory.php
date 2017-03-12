<?php
/**
 * Created by Santiago García Cabral.
 * User: santiago
 * Date: 11/03/17
 * Time: 1:24 PM
 */
namespace App\Factories;
use Illuminate\Http\Request;
use App\Models\Docente;


class DocenteFactory
{

    public function crearDocente (Request $request){

        $docente = new Docente([
            'cct' => $request['cct'],
            'curp' => $request['curp'],
            'rfc' => $request['rfc'],
            'nombre' => $request['nombre'],
            'primer_apellido' => $request['primer_apellido'],
            'segundo_apellido' => $request['segundo_apellido'],
            'perfil_profesional' => $request['perfil_profesional'],
            'horas_frente_grupo' => $request['horas_frente_grupo'],
            'horas_descarga_academica' => $request['horas_descarga_academica'],
            'horas_administrativas' => $request['horas_administrativas'],
            'correo' => $request['correo'],
            'telefono_celular' => $request['telefono_celular'],
            'telefono_domicilio' => $request['telefono_domicilio'],
            'domicilio' => $request['domicilio']
        ]);

        return $docente;
    }

    public function obtenerDocente($rfc){
        return  Docente::where('rfc', '=', $rfc)->first();
    }



}