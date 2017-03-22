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
		Schema::drop('CAMPO_DISCIPLINAR');
	}

}
