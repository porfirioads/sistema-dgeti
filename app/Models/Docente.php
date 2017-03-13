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

    public function disciplina_docente(){
        return $this->belongsTo('App\Models\DisciplinaDocente');
    }

    public function tipo_plaza_docente(){
        return $this->belongsTo('App\Models\TipoPlazaDocente');
    }

    public function historial_evaluacion_docente(){
        return $this->belongsTo('App\Models\HistorialEvaluacionDocente');
    }

    public function docente_definitivo(){
        return $this->belongsTo('App\Models\DocenteDefinitivo');
    }

    public function docente_idoneo(){
        return $this->belongsTo('App\Models\DocenteIdoneo');
    }
}
