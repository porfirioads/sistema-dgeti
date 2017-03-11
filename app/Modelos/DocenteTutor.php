<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteTutor extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_TUTOR';
    protected $fillable = array(
        'inicio_tutoria',
        'conclusion_tutoria',
        'total_hora',
        'observacion',
        'id_funcion',
        'id_docente_tutorado_idoneo',
        'id_docente_definitivo',
    );
}
