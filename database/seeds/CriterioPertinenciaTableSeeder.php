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
            'id' => 1,
            'criterio' => e('Muy adecuado'),
        ], [
            'id' => 2,
            'criterio' => e('Medianamente adecuado'),
        ], [
            'id' => 3,
            'criterio' => e('Poco adecuado'),
        ], [
            'id' => 4,
            'criterio' => e('Inadecuado'),
        ]));
    }
}
