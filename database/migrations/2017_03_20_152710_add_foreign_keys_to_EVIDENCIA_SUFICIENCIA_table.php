<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEVIDENCIASUFICIENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('EVIDENCIA_SUFICIENCIA', function(Blueprint $table)
		{
			$table->foreign('criterio_suficiencia_id', 'fk_EVIDENCIA_SUFICIENCIA_CRITERIO_SUFICIENCIA1')->references('id')->on('CRITERIO_SUFICIENCIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('evidencia_id', 'fk_EVIDENCIA_SUFICIENCIA_EVIDENCIA1')->references('id')->on('EVIDENCIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('EVIDENCIA_SUFICIENCIA', function(Blueprint $table)
		{
			$table->dropForeign('fk_EVIDENCIA_SUFICIENCIA_CRITERIO_SUFICIENCIA1');
			$table->dropForeign('fk_EVIDENCIA_SUFICIENCIA_EVIDENCIA1');
		});
	}

}
