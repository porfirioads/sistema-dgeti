<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoNombramiento
 * @package App\Models
 */
class TipoNombramiento extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'TIPO_NOMBRAMIENTO';
    protected $fillable = array(
        'tipo_nombramiento'
    );

    public function tipo_plaza_docente(){
        return $this -> belongsTo('App\Models\TipoPlazaDocente');
    }
}
