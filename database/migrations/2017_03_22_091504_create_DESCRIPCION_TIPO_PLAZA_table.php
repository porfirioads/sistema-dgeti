<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDESCRIPCIONTIPOPLAZATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DESCRIPCION_TIPO_PLAZA', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descripcion', 45);
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
		Schema::drop('DESCRIPCION_TIPO_PLAZA');
	}

}
