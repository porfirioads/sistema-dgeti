<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TUTORIUM
 * 
 * @property int $docente_idoneo_id
 * @property int $docente_tutor_id
 * @property \Carbon\Carbon $fecha_inicio_semestre
 * @property \Carbon\Carbon $fecha_final_semestre
 * @property string $observacion
 * @property int $total_horas_semana
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\DOCENTEIDONEO $d_o_c_e_n_t_e_i_d_o_n_e_o
 * @property \App\Models\DOCENTETUTOR $d_o_c_e_n_t_e_t_u_t_o_r
 *
 * @package App\Models
 */
class TUTORIUM extends Eloquent
{
	protected $casts = [
		'docente_idoneo_id' => 'int',
		'docente_tutor_id' => 'int',
		'total_horas_semana' => 'int'
	];

	protected $dates = [
		'fecha_inicio_semestre',
		'fecha_final_semestre'
	];

	protected $fillable = [
		'docente_idoneo_id',
		'docente_tutor_id',
		'fecha_inicio_semestre',
		'fecha_final_semestre',
		'observacion',
		'total_horas_semana'
	];

	public function d_o_c_e_n_t_e_i_d_o_n_e_o()
	{
		return $this->belongsTo(\App\Models\DOCENTEIDONEO::class, 'docente_idoneo_id');
	}

	public function d_o_c_e_n_t_e_t_u_t_o_r()
	{
		return $this->belongsTo(\App\Models\DOCENTETUTOR::class, 'docente_tutor_id');
	}
}
