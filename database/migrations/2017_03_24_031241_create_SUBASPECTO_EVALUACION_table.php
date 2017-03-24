<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSUBASPECTOEVALUACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('SUBASPECTO_EVALUACION', function(Blueprint $table)
		{
			$table->char('id', 7)->primary();
			$table->string('subaspecto');
			$table->char('aspecto_evaluacion_id', 3)->index('fk_SUBASPECTO_EVALUACION_ASPECTO_EVALUACION1_idx');
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
		Schema::drop('SUBASPECTO_EVALUACION');
	}

}
