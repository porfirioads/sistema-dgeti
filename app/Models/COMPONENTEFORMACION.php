<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class COMPONENTEFORMACION
 * 
 * @property int $id
 * @property string $componente_formacion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $c_a_m_p_o__d_i_s_c_i_p_l_i_n_a_r_s
 *
 * @package App\Models
 */
class COMPONENTEFORMACION extends Eloquent
{
	protected $table = 'COMPONENTE_FORMACION';

	protected $fillable = [
		'componente_formacion'
	];

	public function c_a_m_p_o__d_i_s_c_i_p_l_i_n_a_r_s()
	{
		return $this->hasMany(\App\Models\CAMPODISCIPLINAR::class, 'componente_formacion_id');
	}
}
