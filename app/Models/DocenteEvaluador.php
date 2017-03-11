<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocenteEvaluador
 * @package App\Models
 */
class DocenteEvaluador extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_EVALUADOR';
    protected $fillable = array(
        'docente_definitivo_id',
        'funcion',
        'status_id'
    );
}
