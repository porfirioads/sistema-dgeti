<?php
/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocenteTutor
 * @package App\Models
 */
class DocenteTutor extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_TUTOR';
    protected $fillable = array(
        'docente_definitivo_id'
    );

    public function docente_definitivo(){
        $this->hasOne('App\Models\DocenteDefinitivo');
    }

    public function funcion_docente_tutor(){
        $this->belongsTo('App\Models\FuncionDocenteTutor');
    }

    public function tutoria(){
        $this->belongsTo('App\Models\Tutoria');
    }
}
