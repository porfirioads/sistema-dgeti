<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ActividadAdminDocenteDefinitivo
 * @package App\Models
 */
class ActividadAdminDocenteDefinitivo extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO';
    protected $fillable = array(
        'actividad_admin_id',
        'docente_definitivo_id'
    );

    protected $dates = ['deleted_at'];

    public function docentedefinitivo(){
        return $this->hasMany('App\Models\DocenteDefinitivo');
    }

    public function actividadadmin(){
        return $this->hasMany('App\Models\ActividadAdmin','id','actividad_admin_id');
    }
}
