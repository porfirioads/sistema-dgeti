<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvidenciaSuficiencia extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'EVIDENCIA_SUFICIENCIA';
    protected $fillable = array('aplica', 'criterio_suficiencia_id',
        'evidencia_id');
    protected $dates = ['deleted_at'];
}
