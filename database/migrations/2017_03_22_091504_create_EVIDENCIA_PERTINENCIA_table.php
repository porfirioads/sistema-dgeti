<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEVIDENCIAPERTINENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('EVIDENCIA_PERTINENCIA', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('aplica', 1)->nullable();
			$table->integer('criterio_pertinencia_id')->index('fk_EVIDENCIA_PERTINENCIA_CRITERIO_PERTINENCIA1_idx');
			$table->char('evidencia_id', 11)->index('fk_EVIDENCIA_PERTINENCIA_EVIDENCIA1_idx');
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
		Schema::drop('EVIDENCIA_PERTINENCIA');
	}

}
