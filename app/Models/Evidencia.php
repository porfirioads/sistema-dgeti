<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evidencia extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'EVIDENCIA';
    protected $fillable = array('evidencia', 'subaspecto_evaluacion_id');
    protected $dates = ['deleted_at'];
}
