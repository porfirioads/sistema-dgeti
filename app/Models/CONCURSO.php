<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CONCURSO
 * 
 * @property int $id
 * @property int $concurso
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e__a_t_p_s
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e__i_d_o_n_e_o_s
 *
 * @package App\Models
 */
class CONCURSO extends Eloquent
{
	protected $table = 'CONCURSO';

	protected $casts = [
		'concurso' => 'int'
	];

	protected $fillable = [
		'concurso'
	];

	public function d_o_c_e_n_t_e__a_t_p_s()
	{
		return $this->hasMany(\App\Models\DOCENTEATP::class, 'concurso_id');
	}

	public function d_o_c_e_n_t_e__i_d_o_n_e_o_s()
	{
		return $this->hasMany(\App\Models\DOCENTEIDONEO::class, 'concurso_id');
	}
}
