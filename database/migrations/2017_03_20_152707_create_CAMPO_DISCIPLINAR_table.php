<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCAMPODISCIPLINARTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CAMPO_DISCIPLINAR', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('campo_disciplinar', 45);
			$table->integer('componente_formacion_id')->index('fk_CAMPO_DISCIPLINAR_COMPONENTE_FORMACION1_idx');
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
		Schema::drop('CAMPO_DISCIPLINAR');
	}

}
