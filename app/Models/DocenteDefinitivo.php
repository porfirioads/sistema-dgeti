<?php
/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocenteDefinitivo
 * @package App\Models
 */
class DocenteDefinitivo extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_DEFINITIVO';
    protected $fillable = array(
        'docente_id',
    );

    public function docente(){
        return $this->hasOne('App\Models\Docente','id','docente_id');
    }

    public function actividad_admin_docente_definitivo(){
        return $this->belongsTo('App\Models\ActividadAdminDocenteDefinitivo','id','docente_definitivo_id');
    }

    public function docente_evaluador(){
        return $this->belongsTo('App\Models\DocenteEvaluador');
    }

    public function docente_tutor(){
        return $this->belongsTo('App\Models\DocenteTutor');
    }

    public function docente_atp(){
        return $this->belongsTo('Apps\Models\DocenteATP');
    }
}
