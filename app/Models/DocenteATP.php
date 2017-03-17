<?php
/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DocenteATP
 * @package App\Models
 */
class DocenteATP extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_ATP';
    protected $fillable = array(
        'docente_definitivo_id',
        'concurso_id',
        'diagnostico_realizado',
        'plan_trabajo_realizado',
        'capacitacion_realizado',
        'evaluacion_realizado',
        'funcion'
    );

    protected $dates = ['deleted_at'];

    public function docente_definitivo(){
        return $this->hasOne('App\Models\DocenteDefinitivo');
    }

    public function concurso(){
        return $this->hasOne('App\Models\Concurso');
    }
}
