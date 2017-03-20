<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TipoNombramientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TIPO_NOMBRAMIENTO')->truncate();

        DB::table('TIPO_NOMBRAMIENTO')->insert([
            'id'=>'1',
            'tipo_nombramiento' => 'Definitivo'
        ]);

        DB::table('TIPO_NOMBRAMIENTO')->insert([
            'id'=>'2',
            'tipo_nombramiento' => 'Temporal'
        ]);
    }
}
