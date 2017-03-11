<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TIPOEVALUACION
 * 
 * @property int $id
 * @property string $tipo_evaluacion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $e_v_a_l_u_a_c_i_o_n_s
 *
 * @package App\Models
 */
class TIPOEVALUACION extends Eloquent
{
	protected $table = 'TIPO_EVALUACION';

	protected $fillable = [
		'tipo_evaluacion'
	];

	public function e_v_a_l_u_a_c_i_o_n_s()
	{
		return $this->hasMany(\App\Models\EVALUACION::class, 'tipo_evaluacion_id');
	}
}
