<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateACTIVIDADADMINTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ACTIVIDAD_ADMIN', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('actividad', 45);
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
		Schema::drop('ACTIVIDAD_ADMIN');
	}

}
