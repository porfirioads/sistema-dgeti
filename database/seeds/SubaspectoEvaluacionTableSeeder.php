<?php

use Illuminate\Database\Seeder;

class SubaspectoEvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('SUBASPECTO_EVALUACION')->truncate();

        DB::table('SUBASPECTO_EVALUACION')->insert(array([
            'id' => 'A01_S01',
            'subaspecto' => e('Identificación y localización del plantel sede y si es el caso, de sus instalaciones distantes u otras donde se realice actividad docente que dependa del plantel:'),
            'aspecto_evaluacion_id' => 'A01'
        ], [
            'id' => 'A01_S02',
            'subaspecto' => e('Condiciones que avalen la autorización vigente del (los) inmueble (s) para funcionar como plantel educativo.'),
            'aspecto_evaluacion_id' => 'A01'
        ], [
            'id' => 'A01_S03',
            'subaspecto' => e('Formación que imparte:'),
            'aspecto_evaluacion_id' => 'A01'
        ], [
            'id' => 'A01_S04',
            'subaspecto' => e('Modalidades y opciones educativas.'),
            'aspecto_evaluacion_id' => 'A01'
        ], [
            'id' => 'A01_S05',
            'subaspecto' => e('Superficie del predio y de la construcción (m2) del plantel sede y de sus instalaciones distantes.'),
            'aspecto_evaluacion_id' => 'A01'
        ], [
            'id' => 'A01_S06',
            'subaspecto' => e('Calendario escolar vigente del plantel para todos sus planes y programas de estudio (archivo en pdf o Word elaborado por el plantel).'),
            'aspecto_evaluacion_id' => 'A01'
        ], [
            'id' => 'A01_S07',
            'subaspecto' => e('Registro de la población estudiantil atendida en cada plan de estudios y programa de asignatura o unidad curricular de aprendizaje (UCA), así como en cada grupo y turno del plantel sede e instalaciones distantes.'),
            'aspecto_evaluacion_id' => 'A01'
        ], [
            'id' => 'A01_S08',
            'subaspecto' => e('Personal docente que opera el o los planes y programas de estudio'),
            'aspecto_evaluacion_id' => 'A01'
        ], [
            'id' => 'A01_S09',
            'subaspecto' => e('Equipo de cómputo y conexión a Internet para el desarrollo de la encuesta'),
            'aspecto_evaluacion_id' => 'A01'
        ], [
            'id' => 'A02_S01',
            'subaspecto' => e('Normas respecto a los alumnos: El reglamento de alumnos establece:'),
            'aspecto_evaluacion_id' => 'A02'
        ], [
            'id' => 'A02_S02',
            'subaspecto' => e('Normas que regulan el ingreso y reingreso de alumnos. La normativa debe establecer:'),
            'aspecto_evaluacion_id' => 'A02'
        ], [
            'id' => 'A02_S03',
            'subaspecto' => e('Normas para la evaluación, acreditación, certificación y titulación'),
            'aspecto_evaluacion_id' => 'A02'
        ], [
            'id' => 'A02_S04',
            'subaspecto' => e('Normas respecto al personal docente'),
            'aspecto_evaluacion_id' => 'A02'
        ], [
            'id' => 'A02_S05',
            'subaspecto' => e('Normas para el funcionamiento de cuerpos colegiados'),
            'aspecto_evaluacion_id' => 'A02'
        ], [
            'id' => 'A02_S06',
            'subaspecto' => e('Normas para la actualización de planes y programas'),
            'aspecto_evaluacion_id' => 'A02'
        ], [
            'id' => 'A02_S07',
            'subaspecto' => e('Normas para el uso de instalaciones y servicios'),
            'aspecto_evaluacion_id' => 'A02'
        ], [
            'id' => 'A02_S08',
            'subaspecto' => e('Normas para la contratación, permanencia y promoción del personal administrativo y de servicios'),
            'aspecto_evaluacion_id' => 'A02'
        ], [
            'id' => 'A02_S09',
            'subaspecto' => e('Normas para la seguridad y la protección civil de la comunidad escolar'),
            'aspecto_evaluacion_id' => 'A02'
        ], [
            'id' => 'A03_S01',
            'subaspecto' => e('Modelo educativo, planes de estudio y programas de “unidades de aprendizaje curricular” (UAC)'),
            'aspecto_evaluacion_id' => 'A03'
        ], [
            'id' => 'A03_S02',
            'subaspecto' => e('Estrategias de enseñanza, aprendizaje y evaluación (secuencias didácticas)'),
            'aspecto_evaluacion_id' => 'A03'
        ], [
            'id' => 'A03_S03',
            'subaspecto' => e('Recursos didácticos, bibliográficos y tecnologías para el aprendizaje y el conocimiento (TAC)'),
            'aspecto_evaluacion_id' => 'A03'
        ], [
            'id' => 'A03_S04',
            'subaspecto' => e('Bibliografía de los programas de las UCA'),
            'aspecto_evaluacion_id' => 'A03'
        ], [
            'id' => 'A03_S05',
            'subaspecto' => e('Las tecnologías para el aprendizaje y el conocimiento (TAC) como complemento de la bibliografía'),
            'aspecto_evaluacion_id' => 'A03'
        ], [
            'id' => 'A03_S06',
            'subaspecto' => e('Criterios, procedimientos, medios y estándares para la evaluación, la acreditación, la certificación y la titulación'),
            'aspecto_evaluacion_id' => 'A03'
        ], [
            'id' => 'A03_S07',
            'subaspecto' => e('Tutoría'),
            'aspecto_evaluacion_id' => 'A03'
        ], [
            'id' => 'A03_S08',
            'subaspecto' => e('Orientación educativa y vocacional'),
            'aspecto_evaluacion_id' => 'A03'
        ], [
            'id' => 'A03_S09',
            'subaspecto' => e('Servicios de apoyo adicionales'),
            'aspecto_evaluacion_id' => 'A03'
        ], [
            'id' => 'A04_S01',
            'subaspecto' => e('Competencias docentes implicadas'),
            'aspecto_evaluacion_id' => 'A04'
        ], [
            'id' => 'A04_S02',
            'subaspecto' => e('Plantilla general'),
            'aspecto_evaluacion_id' => 'A04'
        ], [
            'id' => 'A04_S03',
            'subaspecto' => e('Currículo, perfil e idoneidad'),
            'aspecto_evaluacion_id' => 'A04'
        ], [
            'id' => 'A04_S04',
            'subaspecto' => e('Horario vigente'),
            'aspecto_evaluacion_id' => 'A04'
        ], [
            'id' => 'A05_S01',
            'subaspecto' => e('Perfil del director(a)'),
            'aspecto_evaluacion_id' => 'A05'
        ], [
            'id' => 'A06_S01',
            'subaspecto' => e('Sistema de registro y seguimiento de la trayectoria escolar compatible con el SNB'),
            'aspecto_evaluacion_id' => 'A06'
        ], [
            'id' => 'A06_S02',
            'subaspecto' => e('Indicadores de eficacia, eficiencia, cobertura y seguimiento a egresados'),
            'aspecto_evaluacion_id' => 'A06'
        ], [
            'id' => 'A07_S01',
            'subaspecto' => e('Aulas'),
            'aspecto_evaluacion_id' => 'A07'
        ], [
            'id' => 'A07_S02',
            'subaspecto' => e('Laboratorios y talleres'),
            'aspecto_evaluacion_id' => 'A07'
        ], [
            'id' => 'A07_S03',
            'subaspecto' => e('Equipos y tecnologías de la información y la comunicación (TIC) y tecnologías para el aprendizaje y el conocimiento'),
            'aspecto_evaluacion_id' => 'A07'
        ], [
            'id' => 'A07_S04',
            'subaspecto' => e('Biblioteca y servicios de información'),
            'aspecto_evaluacion_id' => 'A07'
        ], [
            'id' => 'A07_S05',
            'subaspecto' => e('Espacios para docentes'),
            'aspecto_evaluacion_id' => 'A07'
        ], [
            'id' => 'A07_S06',
            'subaspecto' => e('Espacios para orientación y tutoría'),
            'aspecto_evaluacion_id' => 'A07'
        ], [
            'id' => 'A07_S07',
            'subaspecto' => e('Áreas administrativas'),
            'aspecto_evaluacion_id' => 'A07'
        ], [
            'id' => 'A07_S08',
            'subaspecto' => e('Sanitarios'),
            'aspecto_evaluacion_id' => 'A07'
        ], [
            'id' => 'A07_S09',
            'subaspecto' => e('Áreas deportivas, culturales y recreativas'),
            'aspecto_evaluacion_id' => 'A07'
        ], [
            'id' => 'A08_S01',
            'subaspecto' => e('Plan y programas anuales de mejora continua de la gestión'),
            'aspecto_evaluacion_id' => 'A08'
        ], [
            'id' => 'A08_S02',
            'subaspecto' => e('Programa de mantenimiento'),
            'aspecto_evaluacion_id' => 'A08'
        ], [
            'id' => 'A08_S03',
            'subaspecto' => e('Programa de protección civil'),
            'aspecto_evaluacion_id' => 'A08'
        ], [
            'id' => 'A08_S04',
            'subaspecto' => e('Programas para la sustentabilidad del plantel'),
            'aspecto_evaluacion_id' => 'A08'
        ]));
    }
}
