<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Concurso
 * @package App\Models
 */
class Concurso extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'CONCURSO';
    protected $fillable = array('concurso');

    public function docente_idoneo(){
        return $this->belongsTo('App\Models\DocenteIdoneo');
    }

    public function docente_atp(){
        return $this->belongsTo('App\Models\DocenteATP');
    }
}
