<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DOCENTEATP
 * 
 * @property int $id
 * @property int $docente_definitivo_id
 * @property int $concurso_id
 * @property string $diagnostico_realizado
 * @property string $plan_trabajo_realizado
 * @property string $capacitacion_realizado
 * @property string $evaluacion_realizado
 * @property string $funcion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\CONCURSO $c_o_n_c_u_r_s_o
 * @property \App\Models\DOCENTEDEFINITIVO $d_o_c_e_n_t_e_d_e_f_i_n_i_t_i_v_o
 *
 * @package App\Models
 */
class DOCENTEATP extends Eloquent
{
	protected $table = 'DOCENTE_ATP';

	protected $casts = [
		'docente_definitivo_id' => 'int',
		'concurso_id' => 'int'
	];

	protected $fillable = [
		'docente_definitivo_id',
		'concurso_id',
		'diagnostico_realizado',
		'plan_trabajo_realizado',
		'capacitacion_realizado',
		'evaluacion_realizado',
		'funcion'
	];

	public function c_o_n_c_u_r_s_o()
	{
		return $this->belongsTo(\App\Models\CONCURSO::class, 'concurso_id');
	}

	public function d_o_c_e_n_t_e_d_e_f_i_n_i_t_i_v_o()
	{
		return $this->belongsTo(\App\Models\DOCENTEDEFINITIVO::class, 'docente_definitivo_id');
	}
}
