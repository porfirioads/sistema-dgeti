<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEVIDENCIAEXISTENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('EVIDENCIA_EXISTENCIA', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('aplica', 1)->nullable();
			$table->integer('criterio_existencia_id')->index('fk_EVIDENCIA_EXISTENCIA_CRITERIO_EXISTENCIA1_idx');
			$table->char('evidencia_id', 11)->index('fk_EVIDENCIA_EXISTENCIA_EVIDENCIA1_idx');
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
		Schema::drop('EVIDENCIA_EXISTENCIA');
	}

}
