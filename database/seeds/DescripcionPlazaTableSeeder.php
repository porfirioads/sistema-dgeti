<?php

use Illuminate\Database\Seeder;

class DescripcionPlazaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DESCRIPCION_TIPO_PLAZA')->truncate();

        DB::table('DESCRIPCION_TIPO_PLAZA')->insert([
            'id'=>'1',
            'descripcion' => 'Tiempo Completo'
        ]);

        DB::table('DESCRIPCION_TIPO_PLAZA')->insert([
            'id'=>'2',
            'descripcion' => 'Tres Cuartos de Tiempo'
        ]);

        DB::table('DESCRIPCION_TIPO_PLAZA')->insert([
            'id'=>'3',
            'descripcion' => 'Medio Tiempo'
        ]);

        DB::table('DESCRIPCION_TIPO_PLAZA')->insert([
            'id'=>'4',
            'descripcion' => 'Hora/Semana/Mes'
        ]);
    }
}
