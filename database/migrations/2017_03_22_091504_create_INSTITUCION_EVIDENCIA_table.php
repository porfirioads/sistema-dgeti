<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateINSTITUCIONEVIDENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('INSTITUCION_EVIDENCIA', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('fecha_evaluacion')->nullable();
			$table->integer('criterio_existencia_id')->index('fk_INSTITUCION_EVIDENCIA_CRITERIO_EXISTENCIA1_idx');
			$table->integer('criterio_pertinencia_id')->index('fk_INSTITUCION_EVIDENCIA_CRITERIO_PERTINENCIA1_idx');
			$table->integer('criterio_suficiencia_id')->index('fk_INSTITUCION_EVIDENCIA_CRITERIO_SUFICIENCIA1_idx');
			$table->integer('institucion_id')->index('fk_INSTITUCION_EVIDENCIA_INSTITUCION1_idx');
			$table->char('evidencia_id', 11)->index('fk_INSTITUCION_EVIDENCIA_EVIDENCIA1_idx');
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
		Schema::drop('INSTITUCION_EVIDENCIA');
	}

}
