<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DOCENTETUTOR
 * 
 * @property int $id
 * @property int $docente_definitivo_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\DOCENTEDEFINITIVO $d_o_c_e_n_t_e_d_e_f_i_n_i_t_i_v_o
 * @property \Illuminate\Database\Eloquent\Collection $f_u_n_c_i_o_n_s
 * @property \Illuminate\Database\Eloquent\Collection $t_u_t_o_r_i_a
 *
 * @package App\Models
 */
class DOCENTETUTOR extends Eloquent
{
	protected $table = 'DOCENTE_TUTOR';

	protected $casts = [
		'docente_definitivo_id' => 'int'
	];

	protected $fillable = [
		'docente_definitivo_id'
	];

	public function d_o_c_e_n_t_e_d_e_f_i_n_i_t_i_v_o()
	{
		return $this->belongsTo(\App\Models\DOCENTEDEFINITIVO::class, 'docente_definitivo_id');
	}

	public function f_u_n_c_i_o_n_s()
	{
		return $this->belongsToMany(\App\Models\FUNCION::class, 'FUNCION_DOCENTE_TUTOR', 'docente_tutor_id', 'funcion_id')
					->withPivot('id')
					->withTimestamps();
	}

	public function t_u_t_o_r_i_a()
	{
		return $this->hasMany(\App\Models\TUTORIUM::class, 'docente_tutor_id');
	}
}
