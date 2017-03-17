<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tutoria
 * @package App\Models
 */
class Tutoria extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'TUTORIA';
    protected $fillable = array(
        'docente_idoneo_id',
        'docente_tutor_id',
        'fecha_inicio_semestre',
        'fecha_final_semestre',
        'observacion',
        'total_horas_semana'
    );

    protected $dates = ['deleted_at'];

    public function docente_tutor(){
        return $this->hasMany('App\Models\DocenteTutor');
    }

    public function docente_idoneo(){
        return $this->hasMany('App\Models\DocenteIdoneo');
    }
}
