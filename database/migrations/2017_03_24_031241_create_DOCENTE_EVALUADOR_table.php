<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDOCENTEEVALUADORTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DOCENTE_EVALUADOR', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('docente_definitivo_id')->index('fk_DOCENTES_EVALUADORES_DOCENTES_DEFINITIVO1_idx');
			$table->string('funcion', 45);
			$table->integer('status_id')->index('fk_DOCENTE_EVALUADOR_STATUS1_idx');
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
		Schema::drop('DOCENTE_EVALUADOR');
	}

}
