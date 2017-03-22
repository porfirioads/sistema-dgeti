<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDISCIPLINATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DISCIPLINA', function(Blueprint $table)
		{
			$table->foreign('campo_disciplinar_id', 'fk_DISCIPLINA_CAMPO_DISCIPLINAR1')->references('id')->on('CAMPO_DISCIPLINAR')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DISCIPLINA', function(Blueprint $table)
		{
			$table->dropForeign('fk_DISCIPLINA_CAMPO_DISCIPLINAR1');
		});
	}

}
