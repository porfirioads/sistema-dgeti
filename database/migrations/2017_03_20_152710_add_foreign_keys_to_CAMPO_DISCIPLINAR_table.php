<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCAMPODISCIPLINARTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('CAMPO_DISCIPLINAR', function(Blueprint $table)
		{
			$table->foreign('componente_formacion_id', 'fk_CAMPO_DISCIPLINAR_COMPONENTE_FORMACION1')->references('id')->on('COMPONENTE_FORMACION')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('CAMPO_DISCIPLINAR', function(Blueprint $table)
		{
			$table->dropForeign('fk_CAMPO_DISCIPLINAR_COMPONENTE_FORMACION1');
		});
	}

}
