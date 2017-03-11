<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class STATU
 * 
 * @property int $id
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e__e_v_a_l_u_a_d_o_r_s
 *
 * @package App\Models
 */
class STATU extends Eloquent
{
	protected $fillable = [
		'status'
	];

	public function d_o_c_e_n_t_e__e_v_a_l_u_a_d_o_r_s()
	{
		return $this->hasMany(\App\Models\DOCENTEEVALUADOR::class, 'status_id');
	}
}
