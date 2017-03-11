<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'RESULTADO';
    protected $fillable = array(
        'resultado'
    );
}
