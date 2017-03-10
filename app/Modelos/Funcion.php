<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'FUNCION';
    protected $fillable = array(
        'funcion'
    );
}
