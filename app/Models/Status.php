<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Status
 * @package App\Models
 */
class Status extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'STATUS';
    protected $fillable = array(
        'status'
    );

    protected $dates = ['deleted_at'];

    public function docente_evaluador(){
        return $this->belongsTo('Apps\Models\DocenteEvaluador');
    }
}
