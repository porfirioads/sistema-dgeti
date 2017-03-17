<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FuncionDocenteTutor
 * @package App\Models
 */
class FuncionDocenteTutor extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'FUNCION_DOCENTE_TUTOR';
    protected $fillable = array(
        'funcion_id',
        'docente_tutor_id'
    );

    protected $dates = ['deleted_at'];

    public function docente_tutor(){
        return $this->hasMany('App\Models\DocenteTutor');
    }

    public function funcion(){
        return $this->hasMany('App\Models\Funcion');
    }
}
