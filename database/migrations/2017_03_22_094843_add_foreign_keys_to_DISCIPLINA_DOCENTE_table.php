<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDISCIPLINADOCENTETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DISCIPLINA_DOCENTE', function(Blueprint $table)
		{
			$table->foreign('docente_id', 'fk_DOCENTE_has_DISCIPLINA_DOCENTE1')->references('id')->on('DOCENTE')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('disciplina_id', 'fk_DOCENTE_has_DISCIPLINA_DISCIPLINA1')->references('id')->on('DISCIPLINA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DISCIPLINA_DOCENTE', function(Blueprint $table)
		{
			$table->dropForeign('fk_DOCENTE_has_DISCIPLINA_DOCENTE1');
			$table->dropForeign('fk_DOCENTE_has_DISCIPLINA_DISCIPLINA1');
		});
	}

}
