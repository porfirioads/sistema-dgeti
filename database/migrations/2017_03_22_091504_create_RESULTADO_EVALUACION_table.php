<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRESULTADOEVALUACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('RESULTADO_EVALUACION', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tipo_resultado', 35);
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
		Schema::drop('RESULTADO_EVALUACION');
	}

}
