<?php

use Illuminate\Database\Seeder;

class TipoPlazaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TIPO_PLAZA')->truncate();

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'1',
            'numero_horas' => '40',
            'descripcion_tipo_plaza_id' => '1'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'2',
            'numero_horas' => '30',
            'descripcion_tipo_plaza_id' => '2'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'3',
            'numero_horas' => '20',
            'descripcion_tipo_plaza_id' => '3'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'4',
            'numero_horas' => '19',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'5',
            'numero_horas' => '18',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'6',
            'numero_horas' => '17',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'7',
            'numero_horas' => '16',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'8',
            'numero_horas' => '15',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'9',
            'numero_horas' => '14',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'10',
            'numero_horas' => '13',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'11',
            'numero_horas' => '12',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'12',
            'numero_horas' => '11',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'13',
            'numero_horas' => '10',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'14',
            'numero_horas' => '9',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'15',
            'numero_horas' => '8',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'16',
            'numero_horas' => '7',
            'descripcion_tipo_plaza_id' => '4'
        ]);
        DB::table('TIPO_PLAZA')->insert([
            'id'=>'17',
            'numero_horas' => '6',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'18',
            'numero_horas' => '5',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'19',
            'numero_horas' => '4',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'20',
            'numero_horas' => '3',
            'descripcion_tipo_plaza_id' => '4'
        ]);

        DB::table('TIPO_PLAZA')->insert([
            'id'=>'21',
            'numero_horas' => '2',
            'descripcion_tipo_plaza_id' => '4'
        ]);

    }
}
