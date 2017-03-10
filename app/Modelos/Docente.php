<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE';
    protected $fillable =   array(
                    'actividad',
                    'cct',
                    'curp',
                    'rfc',
                    'nombre',
                    'primer_apellido',
                    'segundo_apellido',
                    'perfil_profesional',
                    'horas',
                    'horas_frente_grupo',
                    'descarga_academica',
                    'horas_administrativas',
                    'correo',
                    'telefono_celuar',
                    'telefono_domicilio',
                    'domicilio',
                    'fecha',
                    'vigencia',
                    'id_componente_formacion',
                    'id_campo_disciplina',
                    'id_disciplina',
                    'id_tipo_plaza',
                    'id_tipo_nombramiento',
                    'id_tipo_evaluacion',
                    'id_resultados'
    );
}
