<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DocenteEvaluador
 * @package App\Models
 */
class DocenteEvaluador extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_EVALUADOR';
    protected $fillable = array(
        'docente_definitivo_id',
        'funcion',
        'status_id'
    );

    protected $dates = ['deleted_at'];

    public function status(){
        return $this->hasOne('App\Models\Status');
    }

    public function docente_evaluador(){
        return $this->hasOne('App\Models\DocenteDefinitivo');
    }
}
