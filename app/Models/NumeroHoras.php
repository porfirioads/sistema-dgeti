<?php
/**
 * Created by PhpStorm.
 * User: AdrianHMG
 * Date: 18/03/2017
 * Time: 15:10
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NumeroHoras extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'NUMERO_HORAS';
    protected $fillable = array(
        'numero_horas'
    );

    protected $dates = ['deleted_at'];


}