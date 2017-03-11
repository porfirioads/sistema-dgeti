<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DISCIPLINADOCENTE
 * 
 * @property int $docente_id
 * @property int $disciplina_id
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\DISCIPLINA $d_i_s_c_i_p_l_i_n_a
 * @property \App\Models\DOCENTE $d_o_c_e_n_t_e
 *
 * @package App\Models
 */
class DISCIPLINADOCENTE extends Eloquent
{
	protected $table = 'DISCIPLINA_DOCENTE';

	protected $casts = [
		'docente_id' => 'int',
		'disciplina_id' => 'int'
	];

	protected $fillable = [
		'docente_id',
		'disciplina_id'
	];

	public function d_i_s_c_i_p_l_i_n_a()
	{
		return $this->belongsTo(\App\Models\DISCIPLINA::class, 'disciplina_id');
	}

	public function d_o_c_e_n_t_e()
	{
		return $this->belongsTo(\App\Models\DOCENTE::class, 'docente_id');
	}
}
