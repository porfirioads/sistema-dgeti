<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CAMPODISCIPLINAR
 * 
 * @property int $id
 * @property string $campo_disciplinar
 * @property int $componente_formacion_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\COMPONENTEFORMACION $c_o_m_p_o_n_e_n_t_e_f_o_r_m_a_c_i_o_n
 * @property \Illuminate\Database\Eloquent\Collection $d_i_s_c_i_p_l_i_n_a_s
 *
 * @package App\Models
 */
class CAMPODISCIPLINAR extends Eloquent
{
	protected $table = 'CAMPO_DISCIPLINAR';

	protected $casts = [
		'componente_formacion_id' => 'int'
	];

	protected $fillable = [
		'campo_disciplinar',
		'componente_formacion_id'
	];

	public function c_o_m_p_o_n_e_n_t_e_f_o_r_m_a_c_i_o_n()
	{
		return $this->belongsTo(\App\Models\COMPONENTEFORMACION::class, 'componente_formacion_id');
	}

	public function d_i_s_c_i_p_l_i_n_a_s()
	{
		return $this->hasMany(\App\Models\DISCIPLINA::class, 'campo_disciplinar_id');
	}
}
