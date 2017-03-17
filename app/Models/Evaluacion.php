<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Evaluacion
 * @package App\Models
 */
class Evaluacion extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'EVALUACION';
    protected $fillable = array(
        'fecha_evaluacion',
        'vigencia_evaluacion',
        'tipo_evaluacion_id',
        'resultado_evaluacion_id'
    );

    protected $dates = ['deleted_at'];

    public function resultado_evaluacion(){
        return $this->hasOne('App\Models\ResultadoEvaluacion','id','resultado_evaluacion_id');
    }

    public function tipo_evaluacion(){
        return $this->hasOne('App\Models\TipoEvaluacion','id','tipo_evaluacion_id');
    }

    public function historial_evaluacion_docente(){
        return $this->belongsTo('App\Models\HistorialEvaluacionDocente');
    }
}
