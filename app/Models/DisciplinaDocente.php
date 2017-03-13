<?php
/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DisciplinaDocente
 * @package App\Models
 */
class DisciplinaDocente extends Model
{
    protected $primaryKey = 'id';
    protected $foreignKeyDocente = 'docente_id';
    protected $foreignKeyDisciplina = 'disciplina_id';
    protected $table = 'DISCIPLINA_DOCENTE';
    protected $fillable = array(
    );

    public function disciplina(){
        return $this->hasMany('App\Models\Disciplina');
    }

    public function docente(){
        return $this->hasMany('App\Models\Docente','$foreignKeyDocente');
    }
}
