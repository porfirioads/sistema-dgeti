<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCRITERIOEXISTENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CRITERIO_EXISTENCIA', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('criterio', 500)->nullable();
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
		Schema::drop('CRITERIO_EXISTENCIA');
	}

}
