<?php

use Illuminate\Database\Seeder;

class DisciplinaDocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DISCIPLINA_DOCENTE')->truncate();

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'1',
            'docente_id'=>'1',
            'disciplina_id'=>'2',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'2',
            'docente_id'=>'1',
            'disciplina_id'=>'3',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'3',
            'docente_id'=>'1',
            'disciplina_id'=>'4',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'4',
            'docente_id'=>'2',
            'disciplina_id'=>'3',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'5',
            'docente_id'=>'2',
            'disciplina_id'=>'4',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'6',
            'docente_id'=>'2',
            'disciplina_id'=>'5',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'7',
            'docente_id'=>'3',
            'disciplina_id'=>'5',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'8',
            'docente_id'=>'3',
            'disciplina_id'=>'6',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'9',
            'docente_id'=>'3',
            'disciplina_id'=>'7',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'10',
            'docente_id'=>'4',
            'disciplina_id'=>'8',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'11',
            'docente_id'=>'4',
            'disciplina_id'=>'9',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'12',
            'docente_id'=>'4',
            'disciplina_id'=>'10',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'13',
            'docente_id'=>'5',
            'disciplina_id'=>'11',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'14',
            'docente_id'=>'5',
            'disciplina_id'=>'12',
        ]);

        DB::table('DISCIPLINA_DOCENTE')->insert([
            'id'=>'15',
            'docente_id'=>'5',
            'disciplina_id'=>'13',
        ]);


    }
}
