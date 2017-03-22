<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTIPOEVALUACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TIPO_EVALUACION', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tipo_evaluacion', 15);
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
		Schema::drop('TIPO_EVALUACION');
	}

}
