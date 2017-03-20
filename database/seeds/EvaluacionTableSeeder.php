<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EVALUACION')->truncate();

        DB::table('EVALUACION')->insert([
            'id'=>'1',
            'fecha_evaluacion' => Carbon::parse('2016-08-03'),
            'vigencia_evaluacion' => Carbon::parse('2017-02-11'),
            'tipo_evaluacion_id' => '1',
            'resultado_evaluacion_id' => '5'
        ]);

        DB::table('EVALUACION')->insert([
            'id'=>'2',
            'fecha_evaluacion' => Carbon::parse('2014-08-03'),
            'vigencia_evaluacion' => Carbon::parse('2015-02-11'),
            'tipo_evaluacion_id' => '2',
            'resultado_evaluacion_id' => '3'
        ]);

        DB::table('EVALUACION')->insert([
            'id'=>'3',
            'fecha_evaluacion' => Carbon::parse('2016-09-03'),
            'vigencia_evaluacion' => Carbon::parse('2017-01-11'),
            'tipo_evaluacion_id' => '2',
            'resultado_evaluacion_id' => '2'
        ]);

        DB::table('EVALUACION')->insert([
            'id'=>'4',
            'fecha_evaluacion' => Carbon::parse('2014-05-04'),
            'vigencia_evaluacion' => Carbon::parse('2015-03-13'),
            'tipo_evaluacion_id' => '1',
            'resultado_evaluacion_id' => '4'
        ]);
    }
}
