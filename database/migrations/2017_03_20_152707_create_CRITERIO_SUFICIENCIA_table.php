<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCRITERIOSUFICIENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CRITERIO_SUFICIENCIA', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('criterio', 500)->nullable();
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
		Schema::drop('CRITERIO_SUFICIENCIA');
	}

}
