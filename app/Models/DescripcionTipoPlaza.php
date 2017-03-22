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

class DescripcionTipoPlaza extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'DESCRIPCION_TIPO_PLAZA';
    protected $fillable = array(
        'descripcion',
    );

    protected $dates = ['deleted_at'];
}