<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateINSTITUCIONTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('INSTITUCION', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombre', 100);
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
		Schema::drop('INSTITUCION');
	}

}