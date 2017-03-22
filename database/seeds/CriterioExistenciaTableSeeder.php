<?php

use Illuminate\Database\Seeder;

class CriterioExistenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CRITERIO_EXISTENCIA')->truncate();

        DB::table('CRITERIO_EXISTENCIA')->insert(array([
            'id' => null,
            'criterio' => e('Existente'),
        ], [
            'id' => null,
            'criterio' => e('Existente a mediano plazo'),
        ], [
            'id' => null,
            'criterio' => e('Existente a largo plazo (más de un año)'),
        ], [
            'id' => null,
            'criterio' => e('Inexistente'),
        ]));
    }
}
