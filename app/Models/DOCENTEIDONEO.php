<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:46 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DOCENTEIDONEO
 * 
 * @property int $id
 * @property int $docente_id
 * @property int $folio_federal
 * @property int $concurso_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\CONCURSO $c_o_n_c_u_r_s_o
 * @property \App\Models\DOCENTE $d_o_c_e_n_t_e
 * @property \Illuminate\Database\Eloquent\Collection $t_u_t_o_r_i_a
 *
 * @package App\Models
 */
class DOCENTEIDONEO extends Eloquent
{
	protected $table = 'DOCENTE_IDONEO';

	protected $casts = [
		'docente_id' => 'int',
		'folio_federal' => 'int',
		'concurso_id' => 'int'
	];

	protected $fillable = [
		'docente_id',
		'folio_federal',
		'concurso_id'
	];

	public function c_o_n_c_u_r_s_o()
	{
		return $this->belongsTo(\App\Models\CONCURSO::class, 'concurso_id');
	}

	public function d_o_c_e_n_t_e()
	{
		return $this->belongsTo(\App\Models\DOCENTE::class, 'docente_id');
	}

	public function t_u_t_o_r_i_a()
	{
		return $this->hasMany(\App\Models\TUTORIUM::class, 'docente_idoneo_id');
	}
}
