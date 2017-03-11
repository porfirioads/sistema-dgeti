<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TIPOPLAZADOCENTE
 * 
 * @property int $docente_id
 * @property int $tipo_plaza_id
 * @property int $tipo_nombramiento_id
 * @property int $total_horas_plaza
 * @property string $plaza
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\DOCENTE $d_o_c_e_n_t_e
 * @property \App\Models\TIPONOMBRAMIENTO $t_i_p_o_n_o_m_b_r_a_m_i_e_n_t_o
 * @property \App\Models\TIPOPLAZA $t_i_p_o_p_l_a_z_a
 *
 * @package App\Models
 */
class TIPOPLAZADOCENTE extends Eloquent
{
	protected $table = 'TIPO_PLAZA_DOCENTE';
	public $incrementing = false;

	protected $casts = [
		'docente_id' => 'int',
		'tipo_plaza_id' => 'int',
		'tipo_nombramiento_id' => 'int',
		'total_horas_plaza' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'docente_id',
		'tipo_plaza_id',
		'tipo_nombramiento_id',
		'total_horas_plaza',
		'plaza'
	];

	public function d_o_c_e_n_t_e()
	{
		return $this->belongsTo(\App\Models\DOCENTE::class, 'docente_id');
	}

	public function t_i_p_o_n_o_m_b_r_a_m_i_e_n_t_o()
	{
		return $this->belongsTo(\App\Models\TIPONOMBRAMIENTO::class, 'tipo_nombramiento_id');
	}

	public function t_i_p_o_p_l_a_z_a()
	{
		return $this->belongsTo(\App\Models\TIPOPLAZA::class, 'tipo_plaza_id');
	}
}
