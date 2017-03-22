<?php

use Illuminate\Database\Seeder;

class DisciplinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DISCIPLINA')->truncate();

        DB::table('DISCIPLINA')->insert([
            'id'=>'1',
            'disciplina' => e('Biología'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'2',
            'disciplina' => e('Física'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'3',
            'disciplina' => e('Química'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'4',
            'disciplina' => e('Ecología'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'5',
            'disciplina' => e('Inglés'),
            'campo_disciplinar_id' => '2',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'6',
            'disciplina' => e('Tecnologías de la Información y la Comunicación'),
            'campo_disciplinar_id' => '2',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'7',
            'disciplina' => e('Lectura, Expresión Oral y Escrita'),
            'campo_disciplinar_id' => '2',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'8',
            'disciplina' => e('Lógica'),
            'campo_disciplinar_id' => '3',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'9',
            'disciplina' => e('Ética'),
            'campo_disciplinar_id' => '3',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'10',
            'disciplina' => e('Filosofía'),
            'campo_disciplinar_id' => '3',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'11',
            'disciplina' => e('CTSyV'),
            'campo_disciplinar_id' => '4',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'12',
            'disciplina' => e('Matemáticas'),
            'campo_disciplinar_id' => '5',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'13',
            'disciplina' => e('Cálculo Integral'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'14',
            'disciplina' => e('Inglés V'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'15',
            'disciplina' => e('Probabilidad y Estadística'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'16',
            'disciplina' => e('Temas de Filosofía'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'17',
            'disciplina' => e('Temas de Física'),
            'campo_disciplinar_id' => '7',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'18',
            'disciplina' => e('Dibujo Técnico'),
            'campo_disciplinar_id' => '7',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'19',
            'disciplina' => e('Matemáticas Aplicadas'),
            'campo_disciplinar_id' => '7',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'20',
            'disciplina' => e('Temas de Administración'),
            'campo_disciplinar_id' => '8',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'21',
            'disciplina' => e('Introducción a la Economía'),
            'campo_disciplinar_id' => '8',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'22',
            'disciplina' => e('Introducción al Derecho'),
            'campo_disciplinar_id' => '8',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'23',
            'disciplina' => e('Temas de Ciencias Sociales'),
            'campo_disciplinar_id' => '9',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'24',
            'disciplina' => e('Literatura'),
            'campo_disciplinar_id' => '9',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'25',
            'disciplina' => e('Historia'),
            'campo_disciplinar_id' => '9',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'26',
            'disciplina' => e('Introducción a la Bioquímica'),
            'campo_disciplinar_id' => '10',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'27',
            'disciplina' => e('Temas de Biología Contemporánea'),
            'campo_disciplinar_id' => '10',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'28',
            'disciplina' => e('Temas de Ciencias de la Salud'),
            'campo_disciplinar_id' => '10',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'29',
            'disciplina' => e('Ingeniería de Software'),
            'campo_disciplinar_id' => '11',
        ]);
    }
}
