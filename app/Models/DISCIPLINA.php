<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DISCIPLINA
 * 
 * @property int $id
 * @property string $disciplina
 * @property int $campo_disciplinar_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\CAMPODISCIPLINAR $c_a_m_p_o_d_i_s_c_i_p_l_i_n_a_r
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e_s
 *
 * @package App\Models
 */
class DISCIPLINA extends Eloquent
{
	protected $table = 'DISCIPLINA';

	protected $casts = [
		'campo_disciplinar_id' => 'int'
	];

	protected $fillable = [
		'disciplina',
		'campo_disciplinar_id'
	];

	public function c_a_m_p_o_d_i_s_c_i_p_l_i_n_a_r()
	{
		return $this->belongsTo(\App\Models\CAMPODISCIPLINAR::class, 'campo_disciplinar_id');
	}

	public function d_o_c_e_n_t_e_s()
	{
		return $this->belongsToMany(\App\Models\DOCENTE::class, 'DISCIPLINA_DOCENTE', 'disciplina_id', 'docente_id')
					->withPivot('id')
					->withTimestamps();
	}
}
