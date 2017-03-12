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
        DB::table('FUNCION')->insert([
            'id'=>'1',
            'funcion' => 'Docente'
        ]);

        DB::table('FUNCION')->insert([
            'id'=>'2',
            'funcion' => utf8_encode('Subdirector Académico')
        ]);

        DB::table('FUNCION')->insert([
            'id'=>'3',
            'funcion' => 'Jefe de Docentes'
        ]);
    }
}
