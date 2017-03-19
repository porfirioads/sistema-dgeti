<?php
/**
 * Created by PhpStorm.
 * User: AdrianHMG
 * Date: 18/03/2017
 * Time: 15:10
 */

namespace App\Models;


class TipoPlaza extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'TIPO_PLAZA';
    protected $fillable = array(
        'numero_horas_id, descripcion'
    );

    protected $dates = ['deleted_at'];

    public function numero_horas(){
        return $this -> hasMany('App\Models\NumeroHoras');
    }

    public function tipo_plaza_docente()
    {
        return $this->belongsTo('App\Models\TipoPlazaDocente');
    }
}