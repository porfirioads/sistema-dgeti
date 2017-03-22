<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDOCENTEIDONEOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DOCENTE_IDONEO', function(Blueprint $table)
		{
			$table->foreign('concurso_id', 'fk_DOCENTES_IDONEOS_CONCURSO1')->references('id')->on('CONCURSO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('docente_id', 'fk_DOCENTES_IDONEOS_DOCENTE1')->references('id')->on('DOCENTE')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DOCENTE_IDONEO', function(Blueprint $table)
		{
			$table->dropForeign('fk_DOCENTES_IDONEOS_CONCURSO1');
			$table->dropForeign('fk_DOCENTES_IDONEOS_DOCENTE1');
		});
	}

}
