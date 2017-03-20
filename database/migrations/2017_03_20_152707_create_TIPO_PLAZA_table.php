<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTIPOPLAZATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TIPO_PLAZA', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descripcion', 45);
			$table->integer('numero_horas_id')->index('fk_TIPO_PLAZA_NUMERO_HORAS1_idx');
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
		Schema::drop('TIPO_PLAZA');
	}

}
