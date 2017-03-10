<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteDefinitivo extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_DEFINITIVO';
    protected $fillable = array(
        'id_docente',
        'id_actividades_administrativas'
    );
}
