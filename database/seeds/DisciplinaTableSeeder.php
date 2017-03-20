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
            'disciplina' => utf8_encode('Biolog�a'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'2',
            'disciplina' => utf8_encode('F�sica'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'3',
            'disciplina' => utf8_encode('Qu�mica'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'4',
            'disciplina' => utf8_encode('Ecolog�a'),
            'campo_disciplinar_id' => '1',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'5',
            'disciplina' => utf8_encode('Ingl�s'),
            'campo_disciplinar_id' => '2',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'6',
            'disciplina' => utf8_encode('Tecnolog�as de la Informaci�n y la Comunicaci�n'),
            'campo_disciplinar_id' => '2',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'7',
            'disciplina' => utf8_encode('Lectura, Expresi�n Oral y Escrita'),
            'campo_disciplinar_id' => '2',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'8',
            'disciplina' => utf8_encode('L�gica'),
            'campo_disciplinar_id' => '3',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'9',
            'disciplina' => utf8_encode('�tica'),
            'campo_disciplinar_id' => '3',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'10',
            'disciplina' => utf8_encode('Filosof�a'),
            'campo_disciplinar_id' => '3',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'11',
            'disciplina' => utf8_encode('CTSyV'),
            'campo_disciplinar_id' => '4',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'12',
            'disciplina' => utf8_encode('Matem�ticas'),
            'campo_disciplinar_id' => '5',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'13',
            'disciplina' => utf8_encode('C�lculo Integral'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'14',
            'disciplina' => utf8_encode('Ingl�s V'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'15',
            'disciplina' => utf8_encode('Probabilidad y Estad�stica'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'16',
            'disciplina' => utf8_encode('Temas de Filosof�a'),
            'campo_disciplinar_id' => '6',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'17',
            'disciplina' => utf8_encode('Temas de F�sica'),
            'campo_disciplinar_id' => '7',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'18',
            'disciplina' => utf8_encode('Dibujo T�cnico'),
            'campo_disciplinar_id' => '7',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'19',
            'disciplina' => utf8_encode('Matem�ticas Aplicadas'),
            'campo_disciplinar_id' => '7',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'20',
            'disciplina' => utf8_encode('Temas de Administraci�n'),
            'campo_disciplinar_id' => '8',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'21',
            'disciplina' => utf8_encode('Introducci�n a la Econom�a'),
            'campo_disciplinar_id' => '8',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'22',
            'disciplina' => utf8_encode('Introducci�n al Derecho'),
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
            'disciplina' => utf8_encode('Introducci�n a la Bioqu�mica'),
            'campo_disciplinar_id' => '10',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'27',
            'disciplina' => utf8_encode('Temas de Biolog�a Contempor�nea'),
            'campo_disciplinar_id' => '10',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'28',
            'disciplina' => utf8_encode('Temas de Ciencias de la Salud'),
            'campo_disciplinar_id' => '10',
        ]);

        DB::table('DISCIPLINA')->insert([
            'id'=>'29',
            'disciplina' => utf8_encode('Ingenier�a de Software'),
            'campo_disciplinar_id' => '11',
        ]);
    }
}
