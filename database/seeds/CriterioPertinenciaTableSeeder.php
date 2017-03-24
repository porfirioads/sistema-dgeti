<?php

use Illuminate\Database\Seeder;

class CriterioPertinenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CRITERIO_PERTINENCIA')->truncate();

        DB::table('CRITERIO_PERTINENCIA')->insert(array([
            'id' => null,
            'criterio' => e('Muy adecuado'),
        ], [
            'id' => null,
            'criterio' => e('Medianamente adecuado'),
        ], [
            'id' => null,
            'criterio' => e('Poco adecuado'),
        ], [
            'id' => null,
            'criterio' => e('Inadecuado'),
        ]));
    }
}
