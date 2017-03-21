<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class AspectoEvaluacion extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'ASPECTO_EVALUACION';
    protected $fillable = array('aspecto', 'descripcion');
    protected $dates = ['deleted_at'];

    public function subaspectos_evaluacion() {
        return $this->hasMany('App\Models\SubaspectoEvaluacion',
            'aspecto_evaluacion_id', 'id')->select(['id',
            'aspecto_evaluacion_id', 'subaspecto']);
    }
}
