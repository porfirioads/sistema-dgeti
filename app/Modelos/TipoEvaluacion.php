<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEvaluacion extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'TIPO_EVALUACION';
    protected $fillable = array(
        'evaluacion'
    );
}
