<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ACTIVIDADADMINDOCENTEDEFINITIVO
 * 
 * @property int $actividad_admin_id
 * @property int $docente_definitivo_id
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\ACTIVIDADADMIN $a_c_t_i_v_i_d_a_d_a_d_m_i_n
 * @property \App\Models\DOCENTEDEFINITIVO $d_o_c_e_n_t_e_d_e_f_i_n_i_t_i_v_o
 *
 * @package App\Models
 */
class ACTIVIDADADMINDOCENTEDEFINITIVO extends Eloquent
{
	protected $table = 'ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO';

	protected $casts = [
		'actividad_admin_id' => 'int',
		'docente_definitivo_id' => 'int'
	];

	protected $fillable = [
		'actividad_admin_id',
		'docente_definitivo_id'
	];

	public function a_c_t_i_v_i_d_a_d_a_d_m_i_n()
	{
		return $this->belongsTo(\App\Models\ACTIVIDADADMIN::class, 'actividad_admin_id');
	}

	public function d_o_c_e_n_t_e_d_e_f_i_n_i_t_i_v_o()
	{
		return $this->belongsTo(\App\Models\DOCENTEDEFINITIVO::class, 'docente_definitivo_id');
	}
}
