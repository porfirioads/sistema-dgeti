<?php
/**
 * Created by PhpStorm.
 * User: AdrianHMG
 * Date: 18/03/2017
 * Time: 15:10
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPlaza extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'TIPO_PLAZA';
    protected $fillable = array(
        'numero_horas_id, descripcion',
    );

    protected $dates = ['deleted_at'];


    public function tipo_plaza_docente()
    {
        return $this->belongsTo('App\Models\TipoPlazaDocente');
    }
}