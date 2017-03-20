<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDOCENTEATPTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DOCENTE_ATP', function(Blueprint $table)
		{
			$table->foreign('docente_definitivo_id', 'fk_DOCENTES_ATP_DOCENTES_DEFINITIVO1')->references('id')->on('DOCENTE_DEFINITIVO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('concurso_id', 'fk_DOCENTES_ATP_CONCURSO1')->references('id')->on('CONCURSO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DOCENTE_ATP', function(Blueprint $table)
		{
			$table->dropForeign('fk_DOCENTES_ATP_DOCENTES_DEFINITIVO1');
			$table->dropForeign('fk_DOCENTES_ATP_CONCURSO1');
		});
	}

}
