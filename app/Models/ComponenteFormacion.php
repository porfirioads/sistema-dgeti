<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComponenteFormacion
 * @package App\Models
 */
class ComponenteFormacion extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'COMPONENTE_FORMACION';
    protected $fillable = array('componente_formacion');

    public function campo_disciplinar(){
        return $this->belongsTo('App\Models\CampoDisciplinar','id','componente_formacion_id');
    }

}
