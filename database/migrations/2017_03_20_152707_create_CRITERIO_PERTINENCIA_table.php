<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCRITERIOPERTINENCIATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CRITERIO_PERTINENCIA', function(Blueprint $table)
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
		Schema::drop('CRITERIO_PERTINENCIA');
	}

}
