<?php
/**
 * Created by Santiago García Cabral.
 * Date: Sat, 11 Mar 2017
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocenteIdoneo
 * @package App\Models
 */
class DocenteIdoneo extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'DOCENTE_IDONEO';
    protected $fillable = array(
        'docente_id',
        'folio_federal',
        'concurso_id'
    );
}
