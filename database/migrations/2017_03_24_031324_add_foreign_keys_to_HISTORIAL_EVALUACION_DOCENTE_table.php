<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHISTORIALEVALUACIONDOCENTETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('HISTORIAL_EVALUACION_DOCENTE', function(Blueprint $table)
		{
			$table->foreign('docente_id', 'fk_HISTORIAL_EVALUACION_has_DOCENTE_DOCENTE1')->references('id')->on('DOCENTE')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('evaluacion_id', 'fk_HISTORIAL_EVALUACION_has_DOCENTE_HISTORIAL_EVALUACION1')->references('id')->on('EVALUACION')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('HISTORIAL_EVALUACION_DOCENTE', function(Blueprint $table)
		{
			$table->dropForeign('fk_HISTORIAL_EVALUACION_has_DOCENTE_DOCENTE1');
			$table->dropForeign('fk_HISTORIAL_EVALUACION_has_DOCENTE_HISTORIAL_EVALUACION1');
		});
	}

}
