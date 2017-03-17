<?php
/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DisciplinaDocente
 * @package App\Models
 */
class DisciplinaDocente extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'DISCIPLINA_DOCENTE';
    protected $fillable = array(
        'docente_id',
        'disciplina_id'
    );

    protected $dates = ['deleted_at'];

    public function disciplina(){
        return $this->hasMany('App\Models\Disciplina','id','disciplina_id');
    }

    public function docente(){
        return $this->hasMany('App\Models\Docente');
    }
}
