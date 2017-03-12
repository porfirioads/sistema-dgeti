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
        DB::table('COMPONENTE_FORMACION')->insert([
            'id'=>'1',
            'componente_formacion' => utf8_encode('Componente de Formaci�n B�sico')]);

        DB::table('COMPONENTE_FORMACION')->insert([
            'id'=>'2',
            'componente_formacion' => utf8_encode('Componente de Formaci�n Proped�utico')]);

        DB::table('COMPONENTE_FORMACION')->insert([
            'id'=>'3',
            'componente_formacion' => utf8_encode('Componente de Formaci�n Profesional')]);
    }
}
