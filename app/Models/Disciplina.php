<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Disciplina
 * @package App\Models
 */
class Disciplina extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'DISCIPLINA';
    protected $fillable = array(
        'disciplina',
        'campo_disciplinar_id'
    );

    protected $dates = ['deleted_at'];

    public function campo_disciplinar(){
        return $this->hasMany('App\Models\CampoDisciplinar','id','campo_disciplinar_id');
    }

    public function disciplina_docente(){
        return $this->belongsTo('App\Models\DisciplinaDocente');
    }
}
