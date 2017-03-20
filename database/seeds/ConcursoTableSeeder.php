<?php

use Illuminate\Database\Seeder;

class ConcursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CONCURSO')->truncate();

        DB::table('CONCURSO')->insert([
            'id'=>'1',
            'concurso' => ('2014')
        ]);

        DB::table('CONCURSO')->insert([
            'id'=>'2',
            'concurso' => ('2015')
        ]);

        DB::table('CONCURSO')->insert([
            'id'=>'3',
            'concurso' => ('2016')
        ]);
    }
}
