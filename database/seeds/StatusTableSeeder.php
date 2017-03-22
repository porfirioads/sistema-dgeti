<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('STATUS')->truncate();

        DB::table('STATUS')->insert([
            'id'=>'1',
            'status' => ('Activo')
        ]);

        DB::table('STATUS')->insert([
            'id'=>'2',
            'status' => e('En Evaluación')
        ]);
    }
}
