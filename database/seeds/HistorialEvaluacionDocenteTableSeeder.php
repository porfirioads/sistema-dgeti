<?php

use Illuminate\Database\Seeder;

class HistorialEvaluacionDocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('HISTORIAL_EVALUACION_DOCENTE')->truncate();

        DB::table('HISTORIAL_EVALUACION_DOCENTE')->insert([
            'id'=>'1',
            'evaluacion_id'=>'1',
            'docente_id'=>'2'
        ]);

        DB::table('HISTORIAL_EVALUACION_DOCENTE')->insert([
            'id'=>'2',
            'evaluacion_id'=>'2',
            'docente_id'=>'3'
        ]);

        DB::table('HISTORIAL_EVALUACION_DOCENTE')->insert([
            'id'=>'3',
            'evaluacion_id'=>'3',
            'docente_id'=>'1'
        ]);

        DB::table('HISTORIAL_EVALUACION_DOCENTE')->insert([
            'id'=>'4',
            'evaluacion_id'=>'4',
            'docente_id'=>'1'
        ]);
    }
}
