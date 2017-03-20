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
		Schema::drop('SUBASPECTO_EVALUACION');
	}

}
