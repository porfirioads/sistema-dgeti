<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RESULTADOEVALUACION
 * 
 * @property int $id
 * @property string $tipo_resultado
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $e_v_a_l_u_a_c_i_o_n_s
 *
 * @package App\Models
 */
class RESULTADOEVALUACION extends Eloquent
{
	protected $table = 'RESULTADO_EVALUACION';

	protected $fillable = [
		'tipo_resultado'
	];

	public function e_v_a_l_u_a_c_i_o_n_s()
	{
		return $this->hasMany(\App\Models\EVALUACION::class, 'resultado_evaluacion_id');
	}
}
