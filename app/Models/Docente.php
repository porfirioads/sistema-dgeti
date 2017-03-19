<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DisciplinaDocente
 * @package App\Models
 */
class Docente extends Model
{
    use SoftDeletes;

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
        'domicilio',
    );

    protected $dates = ['deleted_at'];

    public function disciplina_docente(){
        return $this->belongsTo('App\Models\DisciplinaDocente','id','docente_id');
    }

    public function tipo_plaza_docente(){
        return $this->belongsTo('App\Models\TipoPlazaDocente','id','docente_id');
    }

    public function historial_evaluacion_docente(){
        return $this->belongsTo('App\Models\HistorialEvaluacionDocente','id','docente_id');
    }

    public function docente_definitivo(){
        return $this->belongsTo('App\Models\DocenteDefinitivo','id','docente_id');
    }

    public function docente_idoneo(){
        return $this->belongsTo('App\Models\DocenteIdoneo','id','docente_id');
    }
}
