<?php

use Illuminate\Database\Seeder;

class ComponenteFormacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('COMPONENTE_FORMACION')->truncate();

        DB::table('COMPONENTE_FORMACION')->insert([
            'id'=>'1',
            'componente_formacion' => e('Componente de Formación Básico')
        ]);

        DB::table('COMPONENTE_FORMACION')->insert([
            'id'=>'2',
            'componente_formacion' => e('Componente de Formación Propedéutico')
        ]);

        DB::table('COMPONENTE_FORMACION')->insert([
            'id'=>'3',
            'componente_formacion' => e('Componente de Formación Profesional')
        ]);
    }
}
