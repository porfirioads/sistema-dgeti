<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Funcion
 * @package App\Models
 */
class Funcion extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'FUNCION';
    protected $fillable = array(
        'funcion'
    );

    protected $dates = ['deleted_at'];

    public function funcion_docente_tutor(){
        return $this->belongsTo('App\Models\FuncionDocenteTutor');
    }
}
