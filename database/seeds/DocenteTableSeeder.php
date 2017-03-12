<?php

use Illuminate\Database\Seeder;

class DocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DOCENTE')->insert([
            'id'=>'1',
            'cct' => utf8_encode('12DJN0090U'),
            'curp' => utf8_encode('MOGA950715HCLRRD03'),
            'rfc' => utf8_encode('MOGA950715'),
            'nombre' => utf8_encode('Adrián Homero'),
            'primer_apellido' => 'Moreno',
            'segundo_apellido' => 'García',
            'perfil_profesional' => 'Ingeniero en Negocios',
            'horas_frente_grupo' => '5',
            'horas_descarga_academica' => '2',
            'horas_administrativas' => '6',
            'correo' => 'adrian.hmg@gmail.com',
            'telefono_celular' => '8717881112',
            'telefono_domicilio' => '8717230319',
            'domicilio' => utf8_encode('Calle Grava #456 Rincón del Pedregal II, Goméz Palacio, Durango')
        ]);

        DB::table('DOCENTE')->insert([
            'id'=>'2',
            'cct' => utf8_encode('27HQW2200E'),
            'curp' => utf8_encode('PEAO213243QWHJKL23'),
            'rfc' => utf8_encode('PEAO213243'),
            'nombre' => utf8_encode('Rafael Porfirio'),
            'primer_apellido' => 'Zepeda',
            'segundo_apellido' => utf8_encode('Ortíz'),
            'perfil_profesional' => 'Ingeniero Químico',
            'horas_frente_grupo' => '4',
            'horas_descarga_academica' => '4',
            'horas_administrativas' => '0',
            'correo' => 'porfirin@gmail.com',
            'telefono_celular' => '7854123698',
            'telefono_domicilio' => '871240591',
            'domicilio' => utf8_encode('Calle Rulas #132 La Escondida, Jerez, Zacatecas')
        ]);

        DB::table('DOCENTE')->insert([
            'id'=>'3',
            'cct' => utf8_encode('32PJJ1390K'),
            'curp' => utf8_encode('POLA920184YCLRRP02'),
            'rfc' => utf8_encode('POLA920184'),
            'nombre' => utf8_encode('Julieta Hamurabi'),
            'primer_apellido' => 'Morin',
            'segundo_apellido' => utf8_encode('García'),
            'perfil_profesional' => 'Licenciado en Derecho',
            'horas_frente_grupo' => '5',
            'horas_descarga_academica' => '6',
            'horas_administrativas' => '1',
            'correo' => 'julietin@gmail.com',
            'telefono_celular' => '7825663312',
            'telefono_domicilio' => '987236578',
            'domicilio' => utf8_encode('Calle Malos #132 El Revez, Hidalgo, Pachuca')
        ]);

        DB::table('DOCENTE')->insert([
            'id'=>'4',
            'cct' => utf8_encode('78QED1234B'),
            'curp' => utf8_encode('POGA981022HCPRRO30'),
            'rfc' => utf8_encode('POGA981022'),
            'nombre' => utf8_encode('Sodel Emiliano'),
            'primer_apellido' => 'Haro',
            'segundo_apellido' => utf8_encode('Moreno'),
            'perfil_profesional' => utf8_encode('Licenciado en Gastronomía'),
            'horas_frente_grupo' => '7',
            'horas_descarga_academica' => '1',
            'horas_administrativas' => '5',
            'correo' => 'sodelin@gmail.com',
            'telefono_celular' => '1254887723',
            'telefono_domicilio' => '963230456',
            'domicilio' => utf8_encode('Calle Scalab #132 El Tuerto, Guanajuato, Guanajuato')
        ]);

        DB::table('DOCENTE')->insert([
            'id'=>'5',
            'cct' => utf8_encode('54ERG3456N'),
            'curp' => utf8_encode('QKFA930218PCLRRW93'),
            'rfc' => utf8_encode('QKFA930218'),
            'nombre' => utf8_encode('Manuel'),
            'primer_apellido' => 'Dorlingas',
            'segundo_apellido' => utf8_encode('Hernández'),
            'perfil_profesional' => utf8_encode('Licenciado en Administración'),
            'horas_frente_grupo' => '8',
            'horas_descarga_academica' => '2',
            'horas_administrativas' => '3',
            'correo' => 'manuelin@gmail.com',
            'telefono_celular' => '3602557788',
            'telefono_domicilio' => '147562389',
            'domicilio' => utf8_encode('Calle Estable #222 El Cerro, Mérida, Yucatán')
        ]);
    }
}
