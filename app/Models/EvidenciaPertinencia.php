<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvidenciaPertinencia extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'EVIDENCIA_PERTINENCIA';
    protected $fillable = array('aplica', 'criterio_pertinencia_id',
        'evidencia_id');
    protected $dates = ['deleted_at'];
}
