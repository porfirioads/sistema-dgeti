<?php

use Illuminate\Database\Seeder;

class DocenteAtpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DOCENTE_ATP')->insert([
            'id'=>'1',
            'docente_definitivo_id'=>'2',
            'concurso_id'=>'2',
            'diagnostico_realizado'=>'1',
            'plan_trabajo_realizado'=>'0',
            'capacitacion_realizado'=>'0',
            'evaluacion_realizado'=>'1',
            'funcion'=>'Docente ATP para Motivos'
        ]);
    }
}
