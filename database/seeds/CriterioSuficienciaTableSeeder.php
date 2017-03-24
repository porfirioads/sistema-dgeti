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
            'id' => null,
            'criterio' => e('Suficiente'),
        ], [
            'id' => null,
            'criterio' => e('Cubierto en un 70%'),
        ], [
            'id' => null,
            'criterio' => e('Cubierto en un 50%'),
        ], [
            'id' => null,
            'criterio' => e('Insuficiente'),
        ]));
    }
}
