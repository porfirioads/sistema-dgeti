<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDOCENTEATPTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DOCENTE_ATP', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('docente_definitivo_id')->index('fk_DOCENTES_ATP_DOCENTES_DEFINITIVO1_idx');
			$table->integer('concurso_id')->index('fk_DOCENTES_ATP_CONCURSO1_idx');
			$table->string('diagnostico_realizado', 1);
			$table->string('plan_trabajo_realizado', 1);
			$table->string('capacitacion_realizado', 1);
			$table->string('evaluacion_realizado', 1);
			$table->string('funcion', 21);
			$table->date('deleted_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('DOCENTE_ATP');
	}

}
