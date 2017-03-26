<?php

use Illuminate\Database\Seeder;

class CriterioSuficienciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CRITERIO_SUFICIENCIA')->truncate();

        DB::table('CRITERIO_SUFICIENCIA')->insert(array([
            'id' => 1,
            'criterio' => e('Suficiente'),
        ], [
            'id' => 2,
            'criterio' => e('Cubierto en un 70%'),
        ], [
            'id' => 3,
            'criterio' => e('Cubierto en un 50%'),
        ], [
            'id' => 4,
            'criterio' => e('Insuficiente'),
        ]));
    }
}
