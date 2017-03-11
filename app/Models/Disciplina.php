<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Disciplina
 * @package App\Models
 */
class Disciplina extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DISCIPLINA';
    protected $fillable = array(
        'disciplina',
        'campo_disciplinar_id'
    );
}
