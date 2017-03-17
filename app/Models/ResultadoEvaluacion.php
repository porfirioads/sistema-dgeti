<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ResultadoEvaluacion
 * @package App\Models
 */
class ResultadoEvaluacion extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'RESULTADO_EVALUACION';
    protected $fillable = array(
        'tipo_resultado'
    );

    protected $dates = ['deleted_at'];

    public function evaluacion(){
        return $this ->belongsTo('App\Models\Evaluacion');
    }
}
