<?php

use Illuminate\Database\Seeder;

class TipoPlazaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TIPO_PLAZA')->insert(['id'=>'1','plaza' => 'Tiempo Completo (40 horas)']);
        DB::table('TIPO_PLAZA')->insert(['id'=>'2','plaza' => 'Tres Cuartos de Tiempo (30 horas)']);
        DB::table('TIPO_PLAZA')->insert(['id'=>'3','plaza' => 'Medio Tiempo (20 horas)']);
    }
}
