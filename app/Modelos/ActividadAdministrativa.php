<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadAdministrativa extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'ACTIVIDAD_ADMINISTRATIVA';
    protected $fillable = array('actividad');
}
