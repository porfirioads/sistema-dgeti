<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FUNCION
 * 
 * @property int $id
 * @property string $funcion
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e__t_u_t_o_r_s
 *
 * @package App\Models
 */
class FUNCION extends Eloquent
{
	protected $table = 'FUNCION';

	protected $fillable = [
		'funcion'
	];

	public function d_o_c_e_n_t_e__t_u_t_o_r_s()
	{
		return $this->belongsToMany(\App\Models\DOCENTETUTOR::class, 'FUNCION_DOCENTE_TUTOR', 'funcion_id', 'docente_tutor_id')
					->withPivot('id')
					->withTimestamps();
	}
}
