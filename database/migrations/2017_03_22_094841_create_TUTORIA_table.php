<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTUTORIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TUTORIA', function(Blueprint $table)
		{
			$table->integer('docente_idoneo_id')->index('fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_IDONEO1_idx');
			$table->integer('docente_tutor_id')->index('fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_TUTOR1_idx');
			$table->date('fecha_inicio_semestre');
			$table->date('fecha_final_semestre');
			$table->string('observacion', 140);
			$table->integer('total_horas_semana');
			$table->integer('id', true);
			$table->date('deleted_at')->nullable();
			$table->date('created_at');
			$table->date('updated_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TUTORIA');
	}

}
