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
        DB::table('DISCIPLINA')->insert([
            'id'=>'1',
            'disciplina' => utf8_encode('Biología'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'2',
            'disciplina' => utf8_encode('Física'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'3',
            'disciplina' => utf8_encode('Química'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'4',
            'disciplina' => utf8_encode('Ecología'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'5',
            'disciplina' => utf8_encode('Inglés'),
            'campo_disciplinar_id' => '2',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'6',
            'disciplina' => utf8_encode('Tecnologías de la Información y la Comunicación'),
            'campo_disciplinar_id' => '2',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'7',
            'disciplina' => utf8_encode('Lectura, Expresión Oral y Escrita'),
            'campo_disciplinar_id' => '2',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'8',
            'disciplina' => utf8_encode('Lógica'),
            'campo_disciplinar_id' => '3',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'9',
            'disciplina' => utf8_encode('Ética'),
            'campo_disciplinar_id' => '3',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'10',
            'disciplina' => utf8_encode('Filosofía'),
            'campo_disciplinar_id' => '3',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'11',
            'disciplina' => utf8_encode('CTSyV'),
            'campo_disciplinar_id' => '4',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'12',
            'disciplina' => utf8_encode('Matemáticas'),
            'campo_disciplinar_id' => '5',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'13',
            'disciplina' => utf8_encode('Cálculo Integral'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'14',
            'disciplina' => utf8_encode('Inglés V'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'15',
            'disciplina' => utf8_encode('Probabilidad y Estadística'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'16',
            'disciplina' => utf8_encode('Temas de Filosofía'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'17',
            'disciplina' => utf8_encode('Temas de Física'),
            'campo_disciplinar_id' => '7',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'18',
            'disciplina' => utf8_encode('Dibujo Técnico'),
            'campo_disciplinar_id' => '7',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'19',
            'disciplina' => utf8_encode('Matemáticas Aplicadas'),
            'campo_disciplinar_id' => '7',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'20',
            'disciplina' => utf8_encode('Temas de Administración'),
            'campo_disciplinar_id' => '8',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'21',
            'disciplina' => utf8_encode('Introducción a la Economía'),
            'campo_disciplinar_id' => '8',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'22',
            'disciplina' => utf8_encode('Introducción al Derecho'),
            'campo_disciplinar_id' => '8',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'23',
            'disciplina' => utf8_encode('Temas de Ciencias Sociales'),
            'campo_disciplinar_id' => '9',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'24',
            'disciplina' => utf8_encode('Literatura'),
            'campo_disciplinar_id' => '9',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'25',
            'disciplina' => utf8_encode('Historia'),
            'campo_disciplinar_id' => '9',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'26',
            'disciplina' => utf8_encode('Introducción a la Bioquímica'),
            'campo_disciplinar_id' => '10',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'27',
            'disciplina' => utf8_encode('Temas de Biología Contemporánea'),
            'campo_disciplinar_id' => '10',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'28',
            'disciplina' => utf8_encode('Temas de Ciencias de la Salud'),
            'campo_disciplinar_id' => '10',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'29',
            'disciplina' => utf8_encode('Ingeniería de Software'),
            'campo_disciplinar_id' => '11',
        ]);
    }
}
