<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 Mar 2017 06:41:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class DOCENTE
 * 
 * @property int $id
 * @property string $cct
 * @property string $curp
 * @property string $rfc
 * @property string $nombre
 * @property string $primer_apellido
 * @property string $segundo_apellido
 * @property string $perfil_profesional
 * @property int $horas_frente_grupo
 * @property int $horas_descarga_academica
 * @property int $horas_administrativas
 * @property string $correo
 * @property string $telefono_celuar
 * @property string $telefono_domicilio
 * @property string $domicilio
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $d_i_s_c_i_p_l_i_n_a_s
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e__d_e_f_i_n_i_t_i_v_o_s
 * @property \Illuminate\Database\Eloquent\Collection $d_o_c_e_n_t_e__i_d_o_n_e_o_s
 * @property \Illuminate\Database\Eloquent\Collection $e_v_a_l_u_a_c_i_o_n_s
 * @property \Illuminate\Database\Eloquent\Collection $t_i_p_o__p_l_a_z_a_s
 *
 * @package App\Models
 */
class DOCENTE extends Eloquent
{
	protected $table = 'DOCENTE';

	protected $casts = [
		'horas_frente_grupo' => 'int',
		'horas_descarga_academica' => 'int',
		'horas_administrativas' => 'int'
	];

	protected $fillable = [
		'cct',
		'curp',
		'rfc',
		'nombre',
		'primer_apellido',
		'segundo_apellido',
		'perfil_profesional',
		'horas_frente_grupo',
		'horas_descarga_academica',
		'horas_administrativas',
		'correo',
		'telefono_celuar',
		'telefono_domicilio',
		'domicilio'
	];

	public function d_i_s_c_i_p_l_i_n_a_s()
	{
		return $this->belongsToMany(\App\Models\DISCIPLINA::class, 'DISCIPLINA_DOCENTE', 'docente_id', 'disciplina_id')
					->withPivot('id')
					->withTimestamps();
	}

	public function d_o_c_e_n_t_e__d_e_f_i_n_i_t_i_v_o_s()
	{
		return $this->hasMany(\App\Models\DOCENTEDEFINITIVO::class, 'docente_id');
	}

	public function d_o_c_e_n_t_e__i_d_o_n_e_o_s()
	{
		return $this->hasMany(\App\Models\DOCENTEIDONEO::class, 'docente_id');
	}

	public function e_v_a_l_u_a_c_i_o_n_s()
	{
		return $this->belongsToMany(\App\Models\EVALUACION::class, 'HISTORIAL_EVALUACION_DOCENTE', 'docente_id', 'historial_evaluacion_id')
					->withPivot('id')
					->withTimestamps();
	}

	public function t_i_p_o__p_l_a_z_a_s()
	{
		return $this->belongsToMany(\App\Models\TIPOPLAZA::class, 'TIPO_PLAZA_DOCENTE', 'docente_id', 'tipo_plaza_id')
					->withPivot('tipo_nombramiento_id', 'total_horas_plaza', 'plaza', 'id')
					->withTimestamps();
	}
}
