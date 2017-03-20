<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEVALUACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('EVALUACION', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('fecha_evaluacion');
			$table->date('vigencia_evaluacion');
			$table->integer('tipo_evaluacion_id')->index('fk_HISTORIAL_EVALUACION_TIPO_EVALUACION1_idx');
			$table->integer('resultado_evaluacion_id')->index('fk_EVALUACION_RESULTADO_EVALUACION1_idx');
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
		Schema::drop('EVALUACION');
	}

}
