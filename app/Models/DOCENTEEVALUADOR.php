<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DOCENTEEVALUADOR
 * 
 * @property int $id
 * @property int $docente_definitivo_id
 * @property string $funcion
 * @property int $status_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\DOCENTEDEFINITIVO $d_o_c_e_n_t_e_d_e_f_i_n_i_t_i_v_o
 * @property \App\Models\STATU $s_t_a_t_u
 *
 * @package App\Models
 */
class DOCENTEEVALUADOR extends Eloquent
{
	protected $table = 'DOCENTE_EVALUADOR';

	protected $casts = [
		'docente_definitivo_id' => 'int',
		'status_id' => 'int'
	];

	protected $fillable = [
		'docente_definitivo_id',
		'funcion',
		'status_id'
	];

	public function d_o_c_e_n_t_e_d_e_f_i_n_i_t_i_v_o()
	{
		return $this->belongsTo(\App\Models\DOCENTEDEFINITIVO::class, 'docente_definitivo_id');
	}

	public function s_t_a_t_u()
	{
		return $this->belongsTo(\App\Models\STATU::class, 'status_id');
	}
}
