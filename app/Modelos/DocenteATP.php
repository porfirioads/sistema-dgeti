<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteATP extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_ATP';
    protected $fillable = array(
        'id_docente_definitivo',
        'id_concurso',
        'diagnostico',
        'plan_trabajo',
        'capacitacion',
        'evaluacion'
    );
}
