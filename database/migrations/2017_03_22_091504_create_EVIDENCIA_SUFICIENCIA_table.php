<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEVIDENCIASUFICIENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('EVIDENCIA_SUFICIENCIA', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('aplica', 1)->nullable();
			$table->integer('criterio_suficiencia_id')->index('fk_EVIDENCIA_SUFICIENCIA_CRITERIO_SUFICIENCIA1_idx');
			$table->char('evidencia_id', 11)->index('fk_EVIDENCIA_SUFICIENCIA_EVIDENCIA1_idx');
			$table->date('deleted_at')->nullable();
			$table->date('created_at')->default('1970-01-01');
			$table->date('updated_at')->default('1970-01-01');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('EVIDENCIA_SUFICIENCIA');
	}

}
