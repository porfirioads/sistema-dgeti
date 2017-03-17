<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubaspectoEvaluacion extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'SUBASPECTO_EVALUACION';
    protected $fillable = array('subaspecto', 'aspecto_evaluacion_id');
    protected $dates = ['deleted_at'];

    public function aspecto_evaluacion() {
        return $this->belongsTo('App\Models\AspectoEvaluacion');
    }

    public function evidencias() {
        return $this->hasMany('App\Models\Evidencia');
    }
}
