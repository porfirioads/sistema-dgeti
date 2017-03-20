<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateASPECTOEVALUACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ASPECTO_EVALUACION', function(Blueprint $table)
		{
			$table->char('id', 3)->primary();
			$table->string('aspecto');
			$table->string('descripcion', 500)->nullable();
			$table->date('deleted_at')->nullable();
            $table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ASPECTO_EVALUACION');
	}

}
