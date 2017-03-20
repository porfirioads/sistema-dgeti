<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePLAZADOCENTETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PLAZA_DOCENTE', function(Blueprint $table)
		{
			$table->string('plaza', 45);
			$table->integer('tipo_nombramiento_id')->index('fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_NOMBRAMIENTO1_idx');
			$table->integer('tipo_plaza_id')->index('fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_PLAZA1_idx');
			$table->integer('id');
			$table->integer('docente_id')->index('fk_PLAZA_DOCENTE_DOCENTE1_idx');
			$table->date('deleted_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('PLAZA_DOCENTE');
	}

}
