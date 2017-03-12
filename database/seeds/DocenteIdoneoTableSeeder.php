<?php

use Illuminate\Database\Seeder;

class DocenteIdoneoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DOCENTE_IDONEO')->insert([
            'id'=>'1',
            'docente_id'=>'4',
            'folio_federal'=>'975864132',
            'concurso_id'=>'2'
        ]);
    }
}
