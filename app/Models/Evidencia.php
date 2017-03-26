<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evidencia extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'EVIDENCIA';
    protected $fillable = array('evidencia', 'subaspecto_evaluacion_id',
        'aplica_existencia', 'aplica_pertinencia', 'aplica_suficiencia');
    protected $dates = ['deleted_at'];

    public function subaspecto_evaluacion() {
        return $this->belongsTo('App\Models\SubaspectoEvaluacion');
    }
}
