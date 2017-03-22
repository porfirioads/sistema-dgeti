<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEVALUACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('EVALUACION', function(Blueprint $table)
		{
			$table->foreign('resultado_evaluacion_id', 'fk_EVALUACION_RESULTADO_EVALUACION1')->references('id')->on('RESULTADO_EVALUACION')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipo_evaluacion_id', 'fk_HISTORIAL_EVALUACION_TIPO_EVALUACION1')->references('id')->on('TIPO_EVALUACION')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('EVALUACION', function(Blueprint $table)
		{
			$table->dropForeign('fk_EVALUACION_RESULTADO_EVALUACION1');
			$table->dropForeign('fk_HISTORIAL_EVALUACION_TIPO_EVALUACION1');
		});
	}

}
