<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFUNCIONDOCENTETUTORTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('FUNCION_DOCENTE_TUTOR', function(Blueprint $table)
		{
			$table->foreign('funcion_id', 'fk_DOCENTE_TUTOR_has_FUNCION_FUNCION1')->references('id')->on('FUNCION')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('docente_tutor_id', 'fk_DOCENTE_TUTOR_has_FUNCION_DOCENTE_TUTOR1')->references('id')->on('DOCENTE_TUTOR')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('FUNCION_DOCENTE_TUTOR', function(Blueprint $table)
		{
			$table->dropForeign('fk_DOCENTE_TUTOR_has_FUNCION_FUNCION1');
			$table->dropForeign('fk_DOCENTE_TUTOR_has_FUNCION_DOCENTE_TUTOR1');
		});
	}

}
