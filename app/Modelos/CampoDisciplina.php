<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampoDisciplina extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'CAMPO_DISCIPLINA';
    protected $fillable = array('disciplina');
}
