<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TIPOPLAZA
 * 
 * @property int $id
 * @property string $plaza
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e_s
 *
 * @package App\Models
 */
class TIPOPLAZA extends Eloquent
{
	protected $table = 'TIPO_PLAZA';

	protected $fillable = [
		'plaza'
	];

	public function d_o_c_e_n_t_e_s()
	{
		return $this->belongsToMany(\App\Models\DOCENTE::class, 'TIPO_PLAZA_DOCENTE', 'tipo_plaza_id', 'docente_id')
					->withPivot('tipo_nombramiento_id', 'total_horas_plaza', 'plaza', 'id')
					->withTimestamps();
	}
}
