<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToACTIVIDADADMINDOCENTEDEFINITIVOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO', function(Blueprint $table)
		{
			$table->foreign('actividad_admin_id', 'fk_ACTIVIDAD_ADMINISTRATIVA_has_DOCENTE_DEFINITIVO_ACTIVIDAD_1')->references('id')->on('ACTIVIDAD_ADMIN')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('docente_definitivo_id', 'fk_ACTIVIDAD_ADMINISTRATIVA_has_DOCENTE_DEFINITIVO_DOCENTE_DE1')->references('id')->on('DOCENTE_DEFINITIVO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO', function(Blueprint $table)
		{
			$table->dropForeign('fk_ACTIVIDAD_ADMINISTRATIVA_has_DOCENTE_DEFINITIVO_ACTIVIDAD_1');
			$table->dropForeign('fk_ACTIVIDAD_ADMINISTRATIVA_has_DOCENTE_DEFINITIVO_DOCENTE_DE1');
		});
	}

}
