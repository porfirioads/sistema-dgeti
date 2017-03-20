<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDOCENTETable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DOCENTE', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('cct', 11);
			$table->string('curp', 18)->unique('curp_UNIQUE');
			$table->string('rfc', 13)->unique('rfc_UNIQUE');
			$table->string('nombre', 45);
			$table->string('primer_apellido', 45);
			$table->string('segundo_apellido', 45);
			$table->string('perfil_profesional', 41);
			$table->integer('horas_frente_grupo');
			$table->integer('horas_descarga_academica');
			$table->integer('horas_administrativas');
			$table->string('correo', 45);
			$table->string('telefono_celular', 20);
			$table->string('telefono_domicilio', 20)->nullable();
			$table->string('domicilio', 50);
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
		Schema::drop('DOCENTE');
	}

}
