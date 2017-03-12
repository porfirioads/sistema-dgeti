<?php

use Illuminate\Database\Seeder;

class DocenteDefinitivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DOCENTE_DEFINITIVO')->insert([
            'id'=>'1',
            'docente_id' => '1'
        ]);

        DB::table('DOCENTE_DEFINITIVO')->insert([
            'id'=>'2',
            'docente_id' => '2'
        ]);

        DB::table('DOCENTE_DEFINITIVO')->insert([
            'id'=>'3',
            'docente_id' => '3'
        ]);
    }
}
