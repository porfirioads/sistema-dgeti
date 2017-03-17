<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ComponenteFormacion
 * @package App\Models
 */
class ComponenteFormacion extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'COMPONENTE_FORMACION';
    protected $fillable = array('componente_formacion');

    protected $dates = ['deleted_at'];

    public function campo_disciplinar(){
        return $this->belongsTo('App\Models\CampoDisciplinar','id','componente_formacion_id');
    }

}
