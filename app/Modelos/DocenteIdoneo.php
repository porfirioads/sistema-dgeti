<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteIdoneo extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_IDONEO';
    protected $fillable = array(
        'id_docente',
        'folio_federal',
        'curp_tutor',
        'observaciones',
        'id_concurso',
    );
}
