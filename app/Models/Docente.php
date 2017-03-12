<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DisciplinaDocente
 * @package App\Models
 */
class Docente extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE';
    protected $fillable = array(
        'cct',
        'curp',
        'rfc',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
        'perfil_profesional',
        'horas_frente_grupo',
        'horas_descarga_academica',
        'horas_administrativas',
        'correo',
        'telefono_celular',
        'telefono_domicilio',
        'domicilio'
    );
}
