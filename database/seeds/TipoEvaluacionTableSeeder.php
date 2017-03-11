<?php

use Illuminate\Database\Seeder;

class TipoEvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TIPO_EVALUACION')->insert(['id'=>'1','tipo_evaluacion' => utf8_encode('Diagn�stica')]);
        DB::table('TIPO_EVALUACION')->insert(['id'=>'2','tipo_evaluacion' => utf8_encode('Desempe�o')]);
        DB::table('TIPO_EVALUACION')->insert(['id'=>'3','tipo_evaluacion' => 'Ninguna']);
    }
}
