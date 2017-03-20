<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateACTIVIDADADMINDOCENTEDEFINITIVOTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO', function(Blueprint $table)
		{
			$table->integer('actividad_admin_id')->index('fk_ACTIVIDAD_ADMINISTRATIVA_has_DOCENTE_DEFINITIVO_ACTIVIDA_idx');
			$table->integer('docente_definitivo_id')->index('fk_ACTIVIDAD_ADMINISTRATIVA_has_DOCENTE_DEFINITIVO_DOCENTE__idx');
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
		Schema::drop('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO');
	}

}
