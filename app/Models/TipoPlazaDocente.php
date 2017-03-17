<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoPlazaDocente
 * @package App\Models
 */
class TipoPlazaDocente extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'TIPO_PLAZA_DOCENTE';
    protected $fillable = array(
        'docente_id',
        'tipo_nombramiento_id',
        'tipo_plaza_horas',
        'plaza'
    );

    protected $dates = ['deleted_at'];

    public function tipo_nombramiento(){
        return $this -> hasMany('App\Models\TipoNombramiento','id','tipo_nombramiento_id');
    }

    public function docente(){
        return $this -> hasMany('App\Models\Docente');
    }
}
