<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDOCENTEEVALUADORTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DOCENTE_EVALUADOR', function(Blueprint $table)
		{
			$table->foreign('docente_definitivo_id', 'fk_DOCENTES_EVALUADORES_DOCENTES_DEFINITIVO1')->references('id')->on('DOCENTE_DEFINITIVO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('status_id', 'fk_DOCENTE_EVALUADOR_STATUS1')->references('id')->on('STATUS')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DOCENTE_EVALUADOR', function(Blueprint $table)
		{
			$table->dropForeign('fk_DOCENTES_EVALUADORES_DOCENTES_DEFINITIVO1');
			$table->dropForeign('fk_DOCENTE_EVALUADOR_STATUS1');
		});
	}

}
