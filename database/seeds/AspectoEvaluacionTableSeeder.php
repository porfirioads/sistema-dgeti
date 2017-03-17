<?php

use Illuminate\Database\Seeder;

class AspectoEvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'aspecto' => e('Información General'),
            'descripcion' => e('Esta es la descripción')
        ]);

        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'aspecto' => e('Aspecto evaluación 2'),
            'descripcion' => e('Esta es la descripción')
        ]);

        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'aspecto' => e('Aspecto evaluación 3'),
            'descripcion' => e('Esta es la descripción')
        ]);

        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'aspecto' => e('Aspecto evaluación 4'),
            'descripcion' => e('Esta es la descripción')
        ]);

        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'aspecto' => e('Aspecto evaluación 5'),
            'descripcion' => e('Esta es la descripción')
        ]);

        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'aspecto' => e('Aspecto evaluación 6'),
            'descripcion' => e('Esta es la descripción')
        ]);

        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'aspecto' => e('Aspecto evaluación 7'),
            'descripcion' => e('Esta es la descripción')
        ]);

        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'aspecto' => e('Aspecto evaluación 8'),
            'descripcion' => e('Esta es la descripción')
        ]);

        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'aspecto' => e('Aspecto evaluación 9'),
            'descripcion' => e('Esta es la descripción')
        ]);

        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'aspecto' => e('Aspecto evaluación 10'),
            'descripcion' => e('Esta es la descripción')
        ]);
    }
}
