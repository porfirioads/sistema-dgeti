<?php

/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoPlaza
 * @package App\Models
 */
class TipoPlaza extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'TIPO_PLAZA';
    protected $fillable = array(
        'plaza'
    );
}
