<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDOCENTEDEFINITIVOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DOCENTE_DEFINITIVO', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('docente_id')->index('fk_DOCENTES_DEFINITIVO_DOCENTE_idx');
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
		Schema::drop('DOCENTE_DEFINITIVO');
	}

}
