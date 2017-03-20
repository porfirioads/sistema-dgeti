<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTIPOPLAZATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('TIPO_PLAZA', function(Blueprint $table)
		{
			$table->foreign('numero_horas_id', 'fk_TIPO_PLAZA_NUMERO_HORAS1')->references('id')->on('NUMERO_HORAS')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('TIPO_PLAZA', function(Blueprint $table)
		{
			$table->dropForeign('fk_TIPO_PLAZA_NUMERO_HORAS1');
		});
	}

}
