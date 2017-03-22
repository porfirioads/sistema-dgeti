<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CriterioPertinencia extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'CRITERIO_PERTINENCIA';
    protected $fillable = array('criterio');
    protected $dates = ['deleted_at'];
}
