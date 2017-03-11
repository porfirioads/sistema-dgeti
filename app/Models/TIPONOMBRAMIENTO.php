<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TIPONOMBRAMIENTO
 * 
 * @property int $id
 * @property string $tipo_nombramiento
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $t_i_p_o__p_l_a_z_a__d_o_c_e_n_t_e_s
 *
 * @package App\Models
 */
class TIPONOMBRAMIENTO extends Eloquent
{
	protected $table = 'TIPO_NOMBRAMIENTO';

	protected $fillable = [
		'tipo_nombramiento'
	];

	public function t_i_p_o__p_l_a_z_a__d_o_c_e_n_t_e_s()
	{
		return $this->hasMany(\App\Models\TIPOPLAZADOCENTE::class, 'tipo_nombramiento_id');
	}
}
