<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFUNCIONDOCENTETUTORTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FUNCION_DOCENTE_TUTOR', function(Blueprint $table)
		{
			$table->integer('docente_tutor_id')->index('fk_DOCENTE_TUTOR_has_FUNCION_DOCENTE_TUTOR1_idx');
			$table->integer('funcion_id')->index('fk_DOCENTE_TUTOR_has_FUNCION_FUNCION1_idx');
			$table->integer('id', true);
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
		Schema::drop('FUNCION_DOCENTE_TUTOR');
	}

}
