<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoEvaluacion
 * @package App\Models
 */
class TipoEvaluacion extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'TIPO_EVALUACION';
    protected $fillable = array(
        'tipo_evaluacion'
    );

    public function evaluacion(){
        return $this -> belongsTo('App\Models\Evaluacion');
    }
}
