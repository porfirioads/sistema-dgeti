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
			$table->integer('numero_horas');
			$table->date('deleted_at')->nullable();
			$table->date('created_at');
			$table->date('updated_at');
			$table->integer('descripcion_tipo_plaza_id')->index('fk_TIPO_PLAZA_DESCRIPCION_TIPO_PLAZA1_idx');
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
