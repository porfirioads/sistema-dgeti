<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDISCIPLINADOCENTETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DISCIPLINA_DOCENTE', function(Blueprint $table)
		{
			$table->integer('docente_id')->index('fk_DOCENTE_has_DISCIPLINA_DOCENTE1_idx');
			$table->integer('disciplina_id')->index('fk_DOCENTE_has_DISCIPLINA_DISCIPLINA1_idx');
			$table->integer('id', true);
			$table->date('deleted_at')->nullable();
			$table->date('created_at')->default('1970-01-01');
			$table->date('updated_at')->default('1970-01-01');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('DISCIPLINA_DOCENTE');
	}

}
