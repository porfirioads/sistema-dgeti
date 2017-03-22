<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CriterioExistencia extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'CRITERIO_EXISTENCIA';
    protected $fillable = array('criterio');
    protected $dates = ['deleted_at'];
}
