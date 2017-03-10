<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComponenteFormacion extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'COMPONENTE_FORMACION';
    protected $fillable = array('formacion');
}
