<?php

use Illuminate\Database\Seeder;

class NumeroHorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('NUMERO_HORAS')->truncate();

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'1',
            'numero_horas' => '40'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'2',
            'numero_horas' => '30'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'3',
            'numero_horas' => '20'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'4',
            'numero_horas' => '19'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'5',
            'numero_horas' => '18'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'6',
            'numero_horas' => '17'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'7',
            'numero_horas' => '16'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'8',
            'numero_horas' => '15'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'9',
            'numero_horas' => '14'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'10',
            'numero_horas' => '13'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'11',
            'numero_horas' => '12'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'12',
            'numero_horas' => '11'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'13',
            'numero_horas' => '10'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'14',
            'numero_horas' => '9'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'15',
            'numero_horas' => '8'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'16',
            'numero_horas' => '7'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'17',
            'numero_horas' => '6'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'18',
            'numero_horas' => '5'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'19',
            'numero_horas' => '4'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'20',
            'numero_horas' => '3'
        ]);

        DB::table('NUMERO_HORAS')->insert([
            'id'=>'21',
            'numero_horas' => '2'
        ]);

    }
}
