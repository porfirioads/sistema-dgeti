<?php

use Illuminate\Database\Seeder;

class ActividadAdminDocenteDefinitivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO')->truncate();

        DB::table('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO')->insert([
            'id'=>'1',
            'actividad_admin_id' => ('1'),
            'docente_definitivo_id' => ('1')
        ]);

        DB::table('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO')->insert([
            'id'=>'2',
            'actividad_admin_id' => ('2'),
            'docente_definitivo_id' => ('1')
        ]);

        DB::table('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO')->insert([
            'id'=>'3',
            'actividad_admin_id' => ('3'),
            'docente_definitivo_id' => ('2')
        ]);

        DB::table('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO')->insert([
            'id'=>'4',
            'actividad_admin_id' => ('5'),
            'docente_definitivo_id' => ('2')
        ]);

        DB::table('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO')->insert([
            'id'=>'5',
            'actividad_admin_id' => ('6'),
            'docente_definitivo_id' => ('3')
        ]);

    }
}
