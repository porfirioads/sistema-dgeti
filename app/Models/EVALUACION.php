<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EVALUACION
 * 
 * @property int $id
 * @property \Carbon\Carbon $fecha_evaluacion
 * @property \Carbon\Carbon $vigencia_evaluacion
 * @property int $tipo_evaluacion_id
 * @property int $resultado_evaluacion_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\RESULTADOEVALUACION $r_e_s_u_l_t_a_d_o_e_v_a_l_u_a_c_i_o_n
 * @property \App\Models\TIPOEVALUACION $t_i_p_o_e_v_a_l_u_a_c_i_o_n
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e_s
 *
 * @package App\Models
 */
class EVALUACION extends Eloquent
{
	protected $table = 'EVALUACION';

	protected $casts = [
		'tipo_evaluacion_id' => 'int',
		'resultado_evaluacion_id' => 'int'
	];

	protected $dates = [
		'fecha_evaluacion',
		'vigencia_evaluacion'
	];

	protected $fillable = [
		'fecha_evaluacion',
		'vigencia_evaluacion',
		'tipo_evaluacion_id',
		'resultado_evaluacion_id'
	];

	public function r_e_s_u_l_t_a_d_o_e_v_a_l_u_a_c_i_o_n()
	{
		return $this->belongsTo(\App\Models\RESULTADOEVALUACION::class, 'resultado_evaluacion_id');
	}

	public function t_i_p_o_e_v_a_l_u_a_c_i_o_n()
	{
		return $this->belongsTo(\App\Models\TIPOEVALUACION::class, 'tipo_evaluacion_id');
	}

	public function d_o_c_e_n_t_e_s()
	{
		return $this->belongsToMany(\App\Models\DOCENTE::class, 'HISTORIAL_EVALUACION_DOCENTE', 'historial_evaluacion_id', 'docente_id')
					->withPivot('id')
					->withTimestamps();
	}
}
