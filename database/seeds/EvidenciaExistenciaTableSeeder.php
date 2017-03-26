<?php

use Illuminate\Database\Seeder;

class EvidenciaExistenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EVIDENCIA_EXISTENCIA')->truncate();

        DB::table('EVIDENCIA_EXISTENCIA')->insert(array([
            'aplica' => '',
            'criterio_existencia_id' => 1,
            'evidencia_id' => 'A01_S01_E01'
        ]
        ));
    }
}
