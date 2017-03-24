<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEVIDENCIAEXISTENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('EVIDENCIA_EXISTENCIA', function(Blueprint $table)
		{
			$table->foreign('evidencia_id', 'fk_EVIDENCIA_EXISTENCIA_EVIDENCIA1')->references('id')->on('EVIDENCIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('criterio_existencia_id', 'fk_EVIDENCIA_EXISTENCIA_CRITERIO_EXISTENCIA1')->references('id')->on('CRITERIO_EXISTENCIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('EVIDENCIA_EXISTENCIA', function(Blueprint $table)
		{
			$table->dropForeign('fk_EVIDENCIA_EXISTENCIA_EVIDENCIA1');
			$table->dropForeign('fk_EVIDENCIA_EXISTENCIA_CRITERIO_EXISTENCIA1');
		});
	}

}
