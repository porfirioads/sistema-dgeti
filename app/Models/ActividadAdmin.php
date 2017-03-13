<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ActividadAdmin
 * @package App\Models
 */
class ActividadAdmin extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'ACTIVIDAD_ADMIN';
    protected $fillable = array('actividad');

    public function actividad_admin_docente_definitivo(){
        return $this->belongsTo('App\Models\ActividadAdminDocenteDefinitivo');
    }
}
