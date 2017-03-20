<?php

use Illuminate\Database\Seeder;

class ActividadAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ACTIVIDAD_ADMIN')->truncate();

        DB::table('ACTIVIDAD_ADMIN')->insert([
            'id'=>'1',
            'actividad' => ('Docente Tutor')
        ]);

        DB::table('ACTIVIDAD_ADMIN')->insert([
            'id'=>'2',
            'actividad' => ('Docente ATP')
        ]);

        DB::table('ACTIVIDAD_ADMIN')->insert([
            'id'=>'3',
            'actividad' => ('Docente Evaluador')
        ]);

        DB::table('ACTIVIDAD_ADMIN')->insert([
            'id'=>'4',
            'actividad' => ('Director')
        ]);

        DB::table('ACTIVIDAD_ADMIN')->insert([
            'id'=>'5',
            'actividad' => ('Subdirector')
        ]);

        DB::table('ACTIVIDAD_ADMIN')->insert([
            'id'=>'6',
            'actividad' => ('Jefe Departamento')
        ]);

        DB::table('ACTIVIDAD_ADMIN')->insert([
            'id'=>'7',
            'actividad' => ('Jefe Oficina')
        ]);

        DB::table('ACTIVIDAD_ADMIN')->insert([
            'id'=>'8',
            'actividad' => ('Jefe Taller o Laboratorio')
        ]);

        DB::table('ACTIVIDAD_ADMIN')->insert([
            'id'=>'9',
            'actividad' => ('Comisionado')
        ]);
    }
}
