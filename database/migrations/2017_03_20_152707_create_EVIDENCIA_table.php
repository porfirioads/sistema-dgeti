<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEVIDENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('EVIDENCIA', function(Blueprint $table)
		{
			$table->char('id', 11)->primary();
			$table->string('evidencia');
			$table->char('subaspecto_evaluacion_id', 7)->index('fk_EVIDENCIA_SUBASPECTO_EVALUACION1_idx');
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
		Schema::drop('EVIDENCIA');
	}

}
