<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class HISTORIALEVALUACIONDOCENTE
 * 
 * @property int $historial_evaluacion_id
 * @property int $docente_id
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\DOCENTE $d_o_c_e_n_t_e
 * @property \App\Models\EVALUACION $e_v_a_l_u_a_c_i_o_n
 *
 * @package App\Models
 */
class HISTORIALEVALUACIONDOCENTE extends Eloquent
{
	protected $table = 'HISTORIAL_EVALUACION_DOCENTE';

	protected $casts = [
		'historial_evaluacion_id' => 'int',
		'docente_id' => 'int'
	];

	protected $fillable = [
		'historial_evaluacion_id',
		'docente_id'
	];

	public function d_o_c_e_n_t_e()
	{
		return $this->belongsTo(\App\Models\DOCENTE::class, 'docente_id');
	}

	public function e_v_a_l_u_a_c_i_o_n()
	{
		return $this->belongsTo(\App\Models\EVALUACION::class, 'historial_evaluacion_id');
	}
}
