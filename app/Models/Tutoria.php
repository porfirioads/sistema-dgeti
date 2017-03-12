<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tutoria
 * @package App\Models
 */
class Tutoria extends Model
{
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

    public function docente_tutor(){
        $this->hasMany('App\Models\DocenteTutor');
    }

    public function docente_idoneo(){
        $this->hasMany('App\Models\DocenteIdoneo');
    }
}
