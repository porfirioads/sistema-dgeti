<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDOCENTEIDONEOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DOCENTE_IDONEO', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('docente_id')->index('fk_DOCENTES_IDONEOS_DOCENTE1_idx');
			$table->integer('folio_federal')->unique('folio_general_UNIQUE');
			$table->integer('concurso_id')->index('fk_DOCENTES_IDONEOS_CONCURSO1_idx');
			$table->date('deleted_at')->nullable();
			$table->date('created_at');
			$table->date('updated_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('DOCENTE_IDONEO');
	}

}
