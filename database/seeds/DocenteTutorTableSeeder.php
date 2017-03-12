<?php

use Illuminate\Database\Seeder;

class DocenteTutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DOCENTE_TUTOR')->insert([
            'id'=>'1',
            'docente_definitivo_id'=>'3'
        ]);
    }
}
