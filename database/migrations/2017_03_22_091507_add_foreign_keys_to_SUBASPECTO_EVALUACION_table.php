<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSUBASPECTOEVALUACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('SUBASPECTO_EVALUACION', function(Blueprint $table)
		{
			$table->foreign('aspecto_evaluacion_id', 'fk_SUBASPECTO_EVALUACION_ASPECTO_EVALUACION1')->references('id')->on('ASPECTO_EVALUACION')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('SUBASPECTO_EVALUACION', function(Blueprint $table)
		{
			$table->dropForeign('fk_SUBASPECTO_EVALUACION_ASPECTO_EVALUACION1');
		});
	}

}
