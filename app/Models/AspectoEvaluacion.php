<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AspectoEvaluacion extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'ASPECTO_EVALUACION';
    protected $fillable = array('aspecto', 'descripcion');
    protected $dates = ['deleted_at'];

    public function subaspectos_evaluacion() {
        return $this->hasMany('App\Models\SubaspectoEvaluacion');
    }
}
