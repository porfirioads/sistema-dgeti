<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDISCIPLINATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DISCIPLINA', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('disciplina', 45);
			$table->integer('campo_disciplinar_id')->index('fk_DISCIPLINA_CAMPO_DISCIPLINAR1_idx');
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
		Schema::drop('DISCIPLINA');
	}

}
