<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CriterioSuficiencia extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'CRITERIO_SUFICIENCIA';
    protected $fillable = array('criterio');
    protected $dates = ['deleted_at'];
}
