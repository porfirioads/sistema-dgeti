<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'CONCURSO';
    protected $fillable = array('concurso');
}
