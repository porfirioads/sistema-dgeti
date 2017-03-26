<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvidenciaExistencia extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'EVIDENCIA_EXISTENCIA';
    protected $fillable = array('aplica', 'criterio_existencia_id',
        'evidencia_id');
    protected $dates = ['deleted_at'];
}
