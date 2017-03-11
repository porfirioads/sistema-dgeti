<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ACTIVIDADADMIN
 * 
 * @property int $id
 * @property string $actividad
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e__d_e_f_i_n_i_t_i_v_o_s
 *
 * @package App\Models
 */
class ACTIVIDADADMIN extends Eloquent
{
	protected $table = 'ACTIVIDAD_ADMIN';

	protected $fillable = [
		'actividad'
	];

	public function d_o_c_e_n_t_e__d_e_f_i_n_i_t_i_v_o_s()
	{
		return $this->belongsToMany(\App\Models\DOCENTEDEFINITIVO::class, 'ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO', 'actividad_admin_id', 'docente_definitivo_id')
					->withPivot('id')
					->withTimestamps();
	}
}
