<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlazaDocente extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'PLAZA_DOCENTE';
    protected $fillable = array(
        'id_docente',
    );
}
