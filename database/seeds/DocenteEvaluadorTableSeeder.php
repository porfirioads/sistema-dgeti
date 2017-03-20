<?php

use Illuminate\Database\Seeder;

class DocenteEvaluadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DOCENTE_EVALUADOR')->truncate();

        DB::table('DOCENTE_EVALUADOR')->insert([
            'id'=>'1',
            'docente_definitivo_id' => '1',
            'status_id'=>'2',
            'funcion'=>'Evaluador CENEVAL'
        ]);
    }
}
