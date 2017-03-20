<?php

use Illuminate\Database\Seeder;

class ResultadoEvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('RESULTADO_EVALUACION')->truncate();

        DB::table('RESULTADO_EVALUACION')->insert([
            'id'=>'1',
            'tipo_resultado' => 'Insuficiente'
        ]);

        DB::table('RESULTADO_EVALUACION')->insert([
            'id'=>'2',
            'tipo_resultado' => 'Suficente'
        ]);

        DB::table('RESULTADO_EVALUACION')->insert([
            'id'=>'3',
            'tipo_resultado' => 'Bueno'
        ]);

        DB::table('RESULTADO_EVALUACION')->insert([
            'id'=>'4',
            'tipo_resultado' => 'Destacado'
        ]);

        DB::table('RESULTADO_EVALUACION')->insert([
            'id'=>'5',
            'tipo_resultado' => 'Excelente'
        ]);
    }
}
