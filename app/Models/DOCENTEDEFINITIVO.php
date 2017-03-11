<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DOCENTEDEFINITIVO
 * 
 * @property int $id
 * @property int $docente_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\DOCENTE $d_o_c_e_n_t_e
 * @property \Illuminate\Database\Eloquent\Collection $a_c_t_i_v_i_d_a_d__a_d_m_i_n_s
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e__a_t_p_s
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e__e_v_a_l_u_a_d_o_r_s
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e__t_u_t_o_r_s
 *
 * @package App\Models
 */
class DOCENTEDEFINITIVO extends Eloquent
{
	protected $table = 'DOCENTE_DEFINITIVO';

	protected $casts = [
		'docente_id' => 'int'
	];

	protected $fillable = [
		'docente_id'
	];

	public function d_o_c_e_n_t_e()
	{
		return $this->belongsTo(\App\Models\DOCENTE::class, 'docente_id');
	}

	public function a_c_t_i_v_i_d_a_d__a_d_m_i_n_s()
	{
		return $this->belongsToMany(\App\Models\ACTIVIDADADMIN::class, 'ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO', 'docente_definitivo_id', 'actividad_admin_id')
					->withPivot('id')
					->withTimestamps();
	}

	public function d_o_c_e_n_t_e__a_t_p_s()
	{
		return $this->hasMany(\App\Models\DOCENTEATP::class, 'docente_definitivo_id');
	}

	public function d_o_c_e_n_t_e__e_v_a_l_u_a_d_o_r_s()
	{
		return $this->hasMany(\App\Models\DOCENTEEVALUADOR::class, 'docente_definitivo_id');
	}

	public function d_o_c_e_n_t_e__t_u_t_o_r_s()
	{
		return $this->hasMany(\App\Models\DOCENTETUTOR::class, 'docente_definitivo_id');
	}
}
