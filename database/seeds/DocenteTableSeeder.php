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
        DB::table('DOCENTE')->truncate();

        DB::table('DOCENTE')->insert([
            'id'=>'1',
            'cct' => e('12DJN0090U'),
            'curp' => e('MOGA950715HCLRRD03'),
            'rfc' => e('MOGA950715'),
            'nombre' => e('Adrián Homero'),
            'primer_apellido' => 'Moreno',
            'segundo_apellido' => e('García'),
            'perfil_profesional' => 'Ingeniero en Negocios',
            'horas_frente_grupo' => '5',
            'horas_descarga_academica' => '2',
            'horas_administrativas' => '6',
            'correo' => e('adrian.hmg@gmail.com'),
            'telefono_celular' => '8717881112',
            'telefono_domicilio' => '8717230319',
            'domicilio' => e('Calle Grava #456 Rincón del Pedregal II, Goméz Palacio, Durango')
        ]);

        DB::table('DOCENTE')->insert([
            'id'=>'2',
            'cct' => e('27HQW2200E'),
            'curp' => e('PEAO213243QWHJKL23'),
            'rfc' => e('PEAO213243'),
            'nombre' => e('Rafael Porfirio'),
            'primer_apellido' => 'Zepeda',
            'segundo_apellido' => e('Ortíz'),
            'perfil_profesional' => e('Ingeniero Químico'),
            'horas_frente_grupo' => '4',
            'horas_descarga_academica' => '4',
            'horas_administrativas' => '0',
            'correo' => 'porfirin@gmail.com',
            'telefono_celular' => '7854123698',
            'telefono_domicilio' => '871240591',
            'domicilio' => e('Calle Rulas #132 La Escondida, Jerez, Zacatecas')
        ]);

        DB::table('DOCENTE')->insert([
            'id'=>'3',
            'cct' => e('32PJJ1390K'),
            'curp' => e('POLA920184YCLRRP02'),
            'rfc' => e('POLA920184'),
            'nombre' => e('Julieta Hamurabi'),
            'primer_apellido' => 'Morin',
            'segundo_apellido' => e('García'),
            'perfil_profesional' => 'Licenciado en Derecho',
            'horas_frente_grupo' => '5',
            'horas_descarga_academica' => '6',
            'horas_administrativas' => '1',
            'correo' => 'julietin@gmail.com',
            'telefono_celular' => '7825663312',
            'telefono_domicilio' => '987236578',
            'domicilio' => e('Calle Malos #132 El Revez, Hidalgo, Pachuca')
        ]);

        DB::table('DOCENTE')->insert([
            'id'=>'4',
            'cct' => e('78QED1234B'),
            'curp' => e('POGA981022HCPRRO30'),
            'rfc' => e('POGA981022'),
            'nombre' => e('Sodel Emiliano'),
            'primer_apellido' => 'Haro',
            'segundo_apellido' => e('Moreno'),
            'perfil_profesional' => e('Licenciado en Gastronomía'),
            'horas_frente_grupo' => '7',
            'horas_descarga_academica' => '1',
            'horas_administrativas' => '5',
            'correo' => 'sodelin@gmail.com',
            'telefono_celular' => '1254887723',
            'telefono_domicilio' => '963230456',
            'domicilio' => e('Calle Scalab #132 El Tuerto, Guanajuato, Guanajuato')
        ]);

        DB::table('DOCENTE')->insert([
            'id'=>'5',
            'cct' => e('54ERG3456N'),
            'curp' => e('QKFA930218PCLRRW93'),
            'rfc' => e('QKFA930218'),
            'nombre' => e('Manuel'),
            'primer_apellido' => 'Dorlingas',
            'segundo_apellido' => e('Hernández'),
            'perfil_profesional' => e('Licenciado en Administración'),
            'horas_frente_grupo' => '8',
            'horas_descarga_academica' => '2',
            'horas_administrativas' => '3',
            'correo' => e('manuelin@gmail.com'),
            'telefono_celular' => '3602557788',
            'telefono_domicilio' => '147562389',
            'domicilio' => e('Calle Estable #222 El Cerro, Mérida, Yucatán')
        ]);
    }
}
