<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTUTORIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('TUTORIA', function(Blueprint $table)
		{
			$table->foreign('docente_idoneo_id', 'fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_IDONEO1')->references('id')->on('DOCENTE_IDONEO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('docente_tutor_id', 'fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_TUTOR1')->references('id')->on('DOCENTE_TUTOR')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('TUTORIA', function(Blueprint $table)
		{
			$table->dropForeign('fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_IDONEO1');
			$table->dropForeign('fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_TUTOR1');
		});
	}

}
