<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHISTORIALEVALUACIONDOCENTETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('HISTORIAL_EVALUACION_DOCENTE', function(Blueprint $table)
		{
			$table->integer('evaluacion_id')->index('fk_HISTORIAL_EVALUACION_has_DOCENTE_HISTORIAL_EVALUACION1_idx');
			$table->integer('docente_id')->index('fk_HISTORIAL_EVALUACION_has_DOCENTE_DOCENTE1_idx');
			$table->integer('id', true);
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
		Schema::drop('HISTORIAL_EVALUACION_DOCENTE');
	}

}
