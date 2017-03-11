<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPlaza extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'TIPO_PLAZA';
    protected $fillable = array(
        'plaza'
    );
}
