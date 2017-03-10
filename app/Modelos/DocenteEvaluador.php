<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteEvaluador extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_EVALUADOR';
    protected $fillable = array(
        'id_docente',
        'id_actividades_administrativas'
    );
}
