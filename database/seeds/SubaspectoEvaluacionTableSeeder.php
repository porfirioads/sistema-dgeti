<?php

use Illuminate\Database\Seeder;

class SubaspectoEvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtiene los aspectos de evaluación
        $aspectos = \App\Models\AspectoEvaluacion::all();
        // Cuenta los registros obtenidos
        $count = count($aspectos);

        // Inserta un subaspecto por cada uno de los aspectos encontrados
        for($i = 0; $i < $count; $i++) {
            DB::table('SUBASPECTO_EVALUACION')->insert([
                'id' => null,
                'subaspecto' => e('Subaspecto ' . rand(1, 10)),
                'aspecto_evaluacion_id' => $aspectos[$i]->id
            ]);
        }

    }
}
