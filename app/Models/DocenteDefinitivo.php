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
        $this->hasOne('App\Models\Docente');
    }

    public function actividad_admin_docente_definitivo(){
        $this->belongsTo('App\Models\ActividadAdminDocenteDefinitivo');
    }

    public function docente_evaluador(){
        $this->belongsTo('App\Models\DocenteEvaluador');
    }

    public function docente_tutor(){
        $this->belongsTo('App\Models\DocenteTutor');
    }

    public function docente_atp(){
        $this->belongsTo('Apps\Models\DocenteATP');
    }
}
