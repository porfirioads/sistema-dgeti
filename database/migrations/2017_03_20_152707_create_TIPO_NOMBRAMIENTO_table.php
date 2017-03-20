<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTIPONOMBRAMIENTOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('TIPO_NOMBRAMIENTO', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tipo_nombramiento', 35);
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
		Schema::drop('TIPO_NOMBRAMIENTO');
	}

}
