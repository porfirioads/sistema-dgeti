<?php

use Illuminate\Database\Seeder;

class CampoDisciplinarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CAMPO_DISCIPLINAR')->truncate();

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'1',
            'campo_disciplinar' => 'Ciencias Experimentales',
            'componente_formacion_id' => '1',
        ]);

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'2',
            'campo_disciplinar' => e('Comunicación'),
            'componente_formacion_id' => '1',
        ]);

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'3',
            'campo_disciplinar' => 'Humanidades',
            'componente_formacion_id' => '1',
        ]);

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'4',
            'campo_disciplinar' => 'Ciencias Sociales',
            'componente_formacion_id' => '1',
        ]);

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'5',
            'campo_disciplinar' => e('Matemáticas'),
            'componente_formacion_id' => '1',
        ]);

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'6',
            'campo_disciplinar' => e('Común. Todas Las Especialidades'),
            'componente_formacion_id' => '2',
        ]);

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'7',
            'campo_disciplinar' => e('Físico-Matemático'),
            'componente_formacion_id' => '2',
        ]);

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'8',
            'campo_disciplinar' => e('Económico-Administrativo'),
            'componente_formacion_id' => '2',
        ]);

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'9',
            'campo_disciplinar' => 'Humanidades y Ciencias Sociales',
            'componente_formacion_id' => '2',
        ]);

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'10',
            'campo_disciplinar' => e('Químico-Biológo'),
            'componente_formacion_id' => '2',
        ]);

        DB::table('CAMPO_DISCIPLINAR')->insert([
            'id'=>'11',
            'campo_disciplinar' => 'Disciplinas Asociadas al Componente Profesional',
            'componente_formacion_id' => '3',
        ]);
    }
}
