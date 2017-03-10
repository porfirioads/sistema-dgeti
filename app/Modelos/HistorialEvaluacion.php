<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialEvaluacion extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'HISTORIAL_EVALUACION';
    protected $fillable = array(
        'fecha',
        'id_tipo_evaluacion',
        'id_docente',
    );
}
