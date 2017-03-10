<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoNombramiento extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'TIPO_NOMBRAMIENTO';
    protected $fillable = array(
        'nombramiento'
    );
}
