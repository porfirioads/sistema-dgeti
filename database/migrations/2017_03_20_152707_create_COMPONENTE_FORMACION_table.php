<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCOMPONENTEFORMACIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('COMPONENTE_FORMACION', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('componente_formacion', 45);
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
		Schema::drop('COMPONENTE_FORMACION');
	}

}
