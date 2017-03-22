<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDOCENTETUTORTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DOCENTE_TUTOR', function(Blueprint $table)
		{
			$table->foreign('docente_definitivo_id', 'fk_DOCENTES_TUTORES_DOCENTES_DEFINITIVO1')->references('id')->on('DOCENTE_DEFINITIVO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DOCENTE_TUTOR', function(Blueprint $table)
		{
			$table->dropForeign('fk_DOCENTES_TUTORES_DOCENTES_DEFINITIVO1');
		});
	}

}
