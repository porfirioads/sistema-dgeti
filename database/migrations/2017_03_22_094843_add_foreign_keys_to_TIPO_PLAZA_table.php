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
			$table->foreign('descripcion_tipo_plaza_id', 'fk_TIPO_PLAZA_DESCRIPCION_TIPO_PLAZA1')->references('id')->on('DESCRIPCION_TIPO_PLAZA')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
			$table->dropForeign('fk_TIPO_PLAZA_DESCRIPCION_TIPO_PLAZA1');
		});
	}

}
