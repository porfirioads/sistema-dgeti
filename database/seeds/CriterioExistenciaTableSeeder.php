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
            'id' => 1,
            'criterio' => e('Existente'),
        ], [
            'id' => 2,
            'criterio' => e('Existente a mediano plazo'),
        ], [
            'id' => 3,
            'criterio' => e('Existente a largo plazo (más de un año)'),
        ], [
            'id' => 4,
            'criterio' => e('Inexistente'),
        ]));
    }
}
