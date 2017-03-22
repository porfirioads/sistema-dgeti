<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEVIDENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('EVIDENCIA', function(Blueprint $table)
		{
			$table->foreign('subaspecto_evaluacion_id', 'fk_EVIDENCIA_SUBASPECTO_EVALUACION1')->references('id')->on('SUBASPECTO_EVALUACION')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('EVIDENCIA', function(Blueprint $table)
		{
			$table->dropForeign('fk_EVIDENCIA_SUBASPECTO_EVALUACION1');
		});
	}

}
