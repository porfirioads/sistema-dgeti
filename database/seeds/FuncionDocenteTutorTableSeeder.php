<?php

use Illuminate\Database\Seeder;

class FuncionDocenteTutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('FUNCION_DOCENTE_TUTOR')->truncate();

        DB::table('FUNCION_DOCENTE_TUTOR')->insert([
            'id'=>'1',
            'docente_tutor_id'=>'1',
            'funcion_id'=>'1',
        ]);

        DB::table('FUNCION_DOCENTE_TUTOR')->insert([
            'id'=>'2',
            'docente_tutor_id'=>'1',
            'funcion_id'=>'3',
        ]);
    }
}
