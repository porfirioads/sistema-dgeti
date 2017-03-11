<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluacion
 * @package App\Models
 */
class Evaluacion extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'EVALUACION';
    protected $fillable = array(
        'fecha_evaluacion',
        'vigencia_evaluacion',
        'tipo_evaluacion_id',
        'resultado_evaluacion_id'
    );
}
