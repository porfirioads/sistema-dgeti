<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToINSTITUCIONEVIDENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('INSTITUCION_EVIDENCIA', function(Blueprint $table)
		{
			$table->foreign('evidencia_id', 'fk_INSTITUCION_EVIDENCIA_EVIDENCIA1')->references('id')->on('EVIDENCIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('criterio_existencia_id', 'fk_INSTITUCION_EVIDENCIA_CRITERIO_EXISTENCIA1')->references('id')->on('CRITERIO_EXISTENCIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('criterio_pertinencia_id', 'fk_INSTITUCION_EVIDENCIA_CRITERIO_PERTINENCIA1')->references('id')->on('CRITERIO_PERTINENCIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('criterio_suficiencia_id', 'fk_INSTITUCION_EVIDENCIA_CRITERIO_SUFICIENCIA1')->references('id')->on('CRITERIO_SUFICIENCIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('institucion_id', 'fk_INSTITUCION_EVIDENCIA_INSTITUCION1')->references('id')->on('INSTITUCION')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('INSTITUCION_EVIDENCIA', function(Blueprint $table)
		{
			$table->dropForeign('fk_INSTITUCION_EVIDENCIA_EVIDENCIA1');
			$table->dropForeign('fk_INSTITUCION_EVIDENCIA_CRITERIO_EXISTENCIA1');
			$table->dropForeign('fk_INSTITUCION_EVIDENCIA_CRITERIO_PERTINENCIA1');
			$table->dropForeign('fk_INSTITUCION_EVIDENCIA_CRITERIO_SUFICIENCIA1');
			$table->dropForeign('fk_INSTITUCION_EVIDENCIA_INSTITUCION1');
		});
	}

}
