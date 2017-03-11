<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResultadoEvaluacion
 * @package App\Models
 */
class ResultadoEvaluacion extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'RESULTADO_EVALUACION';
    protected $fillable = array(
        'tipo_resultado'
    );
}
