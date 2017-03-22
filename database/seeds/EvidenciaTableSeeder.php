<?php

use Illuminate\Database\Seeder;

class EvidenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EVIDENCIA')->truncate();

        DB::table('EVIDENCIA')->insert(array([
            'id' => 'A01_S01_E01',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Documento de creación u otro que avale el nombre oficial del plantel;')
        ], [
            'id' => 'A01_S01_E02',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Domicilio (calle, número exterior y en su caso interior o piso, colonia, delegación o municipio, localidad y entidad federativa, así como cualquier otro dato que permita ubicar con precisión el plantel sede y las instalaciones distantes donde se realice actividad docente;')
        ], [
            'id' => 'A01_S01_E03',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Clave del centro de trabajo;')
        ], [
            'id' => 'A01_S01_E04',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Teléfono (directo y extensiones si es el caso), fax, página web y correo electrónico del plantel sede e instalaciones distantes;')
        ], [
            'id' => 'A01_S01_E05',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Régimen de sostenimiento;')
        ], [
            'id' => 'A01_S01_E06',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Nombre del director(a) de la institución y en su caso, también de los responsables de las instalaciones distantes.')
        ], [
            'id' => 'A01_S02_E01',
            'subaspecto_evaluacion_id' => 'A01_S02',
            'evidencia' => e('Documentación oficial (licencias, permisos, etc.);')
        ], [
            'id' => 'A01_S02_E02',
            'subaspecto_evaluacion_id' => 'A01_S02',
            'evidencia' => e('Para planteles públicos, el acuerdo de creación de la autoridad educativa que formaliza la creación del plantel y de sus instalaciones distantes;')
        ], [
            'id' => 'A01_S02_E03',
            'subaspecto_evaluacion_id' => 'A01_S02',
            'evidencia' => e('En el caso de planteles particulares, el Reconocimiento de Validez Oficial de Estudios (RVOE) o el documento de incorporación.')
        ], [
            'id' => 'A01_S03_E01',
            'subaspecto_evaluacion_id' => 'A01_S03',
            'evidencia' => e('Documento oficial que indique si los planes de estudio que se imparten corresponden al bachillerato general, al bachillerato general con formación para el trabajo, al bachillerato tecnológico o a la formación profesional técnica;')
        ], [
            'id' => 'A01_S03_E02',
            'subaspecto_evaluacion_id' => 'A01_S03',
            'evidencia' => e('Planes y programas de estudio, en caso de que el plantel no pertenezca a una institución multiplantel.')
        ], [
            'id' => 'A01_S04_E01',
            'subaspecto_evaluacion_id' => 'A01_S04',
            'evidencia' => e('Documentación oficial que de manera explícita indique las modalidades y opciones educativas que se imparten en el plantel sede y sus instalaciones distantes.')
        ], [
            'id' => 'A01_S05_E01',
            'subaspecto_evaluacion_id' => 'A01_S05',
            'evidencia' => e('Documentación oficial (croquis descriptivo de espacios físicos, Word o pdf elaborado por el plantel).')
        ], [
            'id' => 'A01_S06_E01',
            'subaspecto_evaluacion_id' => 'A01_S06',
            'evidencia' => e('Calendario escolar;')
        ], [
            'id' => 'A01_S07_E01',
            'subaspecto_evaluacion_id' => 'A01_S07',
            'evidencia' => e('Documentación oficial actualizada, población estudiantil total, por plan de estudios, asignatura o UCA, turno y grupo escolar que se encuentran bajo la RIEMS; lo que se definió como “matrícula RIEMS”, que se distingue de la población total que pudiera estar cursando un programa no alineado a la Reforma')
        ], [
            'id' => 'A01_S08_E01',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Plantilla docente y el currículo de cada profesor actualizado para los semestres a evaluar durante la visita. Grupos y horarios de clase (incluyendo laboratorios) de cada docente.')
        ], [
            'id' => 'A01_S08_E02',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Características de la planta docente;')
        ], [
            'id' => 'A01_S08_E03',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Nombre (apellido paterno, materno y nombre(s);')
        ], [
            'id' => 'A01_S08_E04',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Registro de curriculum vitae de cada docente;')
        ], [
            'id' => 'A01_S08_E05',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('CURP;')
        ], [
            'id' => 'A01_S08_E06',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Formación académica (institución, año de titulación, cédula profesional, cuando aplique);')
        ], [
            'id' => 'A01_S08_E07',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Programas de formación y certificación en educación media superior (Profordems, Certidems o cualquier otro que llegase a ser reconocido por el CD-SNB): nombre del programa, institución fecha de término;')
        ], [
            'id' => 'A01_S08_E08',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Otros estudios relacionados a su formación docente (40 horas o más): nombre del programa, institución y fecha de término;')
        ], [
            'id' => 'A01_S08_E09',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Trayectoria académica: cargos académicos no docentes desempeñados en los últimos cinco años (cargo, institución y periodo);')
        ], [
            'id' => 'A01_S08_E10',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Asignaturas impartidas en los semestres que coinciden con el proceso de evaluación;')
        ], [
            'id' => 'A01_S08_E11',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Otras actividades profesionales no académicas en los últimos cinco años (actividad, organización y periodo); y')
        ], [
            'id' => 'A01_S08_E12',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Horarios de clase.')
        ], [
            'id' => 'A01_S09_E01',
            'subaspecto_evaluacion_id' => 'A01_S09',
            'evidencia' => e('Cantidad de computadoras que cuentan con conexión a Internet y que se encuentran disponibles para uso de los estudiantes durante la aplicación de la encuesta;')
        ], [
            'id' => 'A01_S09_E02',
            'subaspecto_evaluacion_id' => 'A01_S09',
            'evidencia' => e('Características de la conexión a Internet y ancho de banda;')
        ], [
            'id' => 'A01_S09_E03',
            'subaspecto_evaluacion_id' => 'A01_S09',
            'evidencia' => e('En caso de no contar con conexión a Internet, indicar el número de computadoras conectadas en red o en su caso, el número de computadoras disponibles para uso individual de los estudiantes durante la encuesta;')
        ],
//            [
//            'id' => 'A02_S01_E01',
//            'subaspecto_evaluacion_id' => 'A02_S01',
//            'evidencia' => e('')
//        ], [
//            'id' => 'A02_S02_E01',
//            'subaspecto_evaluacion_id' => 'A02_S02',
//            'evidencia' => e('')
//        ], [
//            'id' => 'A02_S03_E01',
//            'subaspecto_evaluacion_id' => 'A02_S03',
//            'evidencia' => e('')
//        ], [
//            'id' => 'A02_S04_E01',
//            'subaspecto_evaluacion_id' => 'A02_S04',
//            'evidencia' => e('')
//        ], [
//            'id' => 'A02_S05_E01',
//            'subaspecto_evaluacion_id' => 'A02_S05',
//            'evidencia' => e('')
//        ], [
//            'id' => 'A02_S06_E01',
//            'subaspecto_evaluacion_id' => 'A02_S06',
//            'evidencia' => e('')
//        ], [
//            'id' => 'A02_S07_E01',
//            'subaspecto_evaluacion_id' => 'A02_S07',
//            'evidencia' => e('')
//        ], [
//            'id' => 'A02_S08_E01',
//            'subaspecto_evaluacion_id' => 'A02_S08',
//            'evidencia' => e('')
//        ], [
//            'id' => 'A02_S09_E01',
//            'subaspecto_evaluacion_id' => 'A02_S09',
//            'evidencia' => e('')
//        ]
    ));
    }
}
