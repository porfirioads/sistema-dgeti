<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDOCENTEDEFINITIVOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DOCENTE_DEFINITIVO', function(Blueprint $table)
		{
			$table->foreign('docente_id', 'fk_DOCENTES_DEFINITIVO_DOCENTE')->references('id')->on('DOCENTE')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DOCENTE_DEFINITIVO', function(Blueprint $table)
		{
			$table->dropForeign('fk_DOCENTES_DEFINITIVO_DOCENTE');
		});
	}

}
