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
    protected $table = 'DISCIPLINA_DOCENTE';
    protected $fillable = array(
        'docente_id',
        'disciplina_id'
    );
}
