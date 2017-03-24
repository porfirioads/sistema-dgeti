<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEVIDENCIAPERTINENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('EVIDENCIA_PERTINENCIA', function(Blueprint $table)
		{
			$table->foreign('evidencia_id', 'fk_EVIDENCIA_PERTINENCIA_EVIDENCIA1')->references('id')->on('EVIDENCIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('criterio_pertinencia_id', 'fk_EVIDENCIA_PERTINENCIA_CRITERIO_PERTINENCIA1')->references('id')->on('CRITERIO_PERTINENCIA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('EVIDENCIA_PERTINENCIA', function(Blueprint $table)
		{
			$table->dropForeign('fk_EVIDENCIA_PERTINENCIA_EVIDENCIA1');
			$table->dropForeign('fk_EVIDENCIA_PERTINENCIA_CRITERIO_PERTINENCIA1');
		});
	}

}
