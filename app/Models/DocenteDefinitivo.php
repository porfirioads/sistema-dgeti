<?php
/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocenteDefinitivo
 * @package App\Models
 */
class DocenteDefinitivo extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_DEFINITIVO';
    protected $fillable = array(
        'docente_id',
    );
}
