<?php
/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DocenteTutor
 * @package App\Models
 */
class DocenteTutor extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_TUTOR';
    protected $fillable = array(
        'docente_definitivo_id'
    );

    protected $dates = ['deleted_at'];

    public function docente_definitivo(){
        return $this->hasOne('App\Models\DocenteDefinitivo');
    }

    public function funcion_docente_tutor(){
        return $this->belongsTo('App\Models\FuncionDocenteTutor');
    }

    public function tutoria(){
        return $this->belongsTo('App\Models\Tutoria');
    }
}
