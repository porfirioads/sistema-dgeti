<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPLAZADOCENTETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('PLAZA_DOCENTE', function(Blueprint $table)
		{
			$table->foreign('docente_id', 'fk_PLAZA_DOCENTE_DOCENTE1')->references('id')->on('DOCENTE')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipo_nombramiento_id', 'fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_NOMBRAMIENTO1')->references('id')->on('TIPO_NOMBRAMIENTO')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('tipo_plaza_id', 'fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_PLAZA1')->references('id')->on('TIPO_PLAZA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('PLAZA_DOCENTE', function(Blueprint $table)
		{
			$table->dropForeign('fk_PLAZA_DOCENTE_DOCENTE1');
			$table->dropForeign('fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_NOMBRAMIENTO1');
			$table->dropForeign('fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_PLAZA1');
		});
	}

}
