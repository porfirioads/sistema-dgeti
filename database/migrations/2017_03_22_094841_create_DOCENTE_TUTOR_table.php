<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDOCENTETUTORTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DOCENTE_TUTOR', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('docente_definitivo_id')->index('fk_DOCENTES_TUTORES_DOCENTES_DEFINITIVO1_idx');
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
		Schema::drop('DOCENTE_TUTOR');
	}

}
