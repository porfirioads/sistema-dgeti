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

    public function concurso(){
        return $this->hasOne('App\Models\Concurso');
    }

    public function docente(){
        return $this->hasOne('App\Models\Docente');
    }

    public function tutoria(){
        return $this->belongsTo('App\Models\Tutoria');
    }
}
