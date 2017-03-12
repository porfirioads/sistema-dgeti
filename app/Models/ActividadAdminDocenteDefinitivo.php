<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ActividadAdminDocenteDefinitivo
 * @package App\Models
 */
class ActividadAdminDocenteDefinitivo extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO';
    protected $fillable = array(
        'actividad_admin_id',
        'docente_definitivo_id'
    );

    public function DocenteDefinitivo(){
        $this->hasMany('App\Models\DocenteDefinitivo');
    }

    public function ActividadAdmin(){
        $this->hasMany('App\Models\ActividadAdmin');
    }
}
