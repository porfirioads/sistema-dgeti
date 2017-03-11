<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FUNCIONDOCENTETUTOR
 * 
 * @property int $docente_tutor_id
 * @property int $funcion_id
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\DOCENTETUTOR $d_o_c_e_n_t_e_t_u_t_o_r
 * @property \App\Models\FUNCION $f_u_n_c_i_o_n
 *
 * @package App\Models
 */
class FUNCIONDOCENTETUTOR extends Eloquent
{
	protected $table = 'FUNCION_DOCENTE_TUTOR';

	protected $casts = [
		'docente_tutor_id' => 'int',
		'funcion_id' => 'int'
	];

	protected $fillable = [
		'docente_tutor_id',
		'funcion_id'
	];

	public function d_o_c_e_n_t_e_t_u_t_o_r()
	{
		return $this->belongsTo(\App\Models\DOCENTETUTOR::class, 'docente_tutor_id');
	}

	public function f_u_n_c_i_o_n()
	{
		return $this->belongsTo(\App\Models\FUNCION::class, 'funcion_id');
	}
}
