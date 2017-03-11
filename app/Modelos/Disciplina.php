<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DISCIPLINA';
    protected $fillable = array('disciplina');
}
