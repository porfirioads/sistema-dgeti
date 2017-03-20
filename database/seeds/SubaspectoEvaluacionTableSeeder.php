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
        ],[
            'id' => 'A01_S02',
            'subaspecto' => e('Condiciones que avalen la autorización vigente del (los) inmueble (s) para funcionar como plantel educativo.'),
            'aspecto_evaluacion_id' => 'A01'
        ],[
            'id' => 'A01_S03',
            'subaspecto' => e('Formación que imparte:'),
            'aspecto_evaluacion_id' => 'A01'
        ],[
            'id' => 'A01_S04',
            'subaspecto' => e('Modalidades y opciones educativas.'),
            'aspecto_evaluacion_id' => 'A01'
        ],[
            'id' => 'A01_S05',
            'subaspecto' => e('Superficie del predio y de la construcción (m2) del plantel sede y de sus instalaciones distantes.'),
            'aspecto_evaluacion_id' => 'A01'
        ],[
            'id' => 'A01_S06',
            'subaspecto' => e('Calendario escolar vigente del plantel para todos sus planes y programas de estudio (archivo en pdf o Word elaborado por el plantel).'),
            'aspecto_evaluacion_id' => 'A01'
        ],[
            'id' => 'A01_S07',
            'subaspecto' => e('Registro de la población estudiantil atendida en cada plan de estudios y programa de asignatura o unidad curricular de aprendizaje (UCA), así como en cada grupo y turno del plantel sede e instalaciones distantes.'),
            'aspecto_evaluacion_id' => 'A01'
        ],[
            'id' => 'A01_S08',
            'subaspecto' => e('Personal docente que opera el o los planes y programas de estudio'),
            'aspecto_evaluacion_id' => 'A01'
        ],[
            'id' => 'A01_S09',
            'subaspecto' => e('Equipo de cómputo y conexión a Internet para el desarrollo de la encuesta'),
            'aspecto_evaluacion_id' => 'A01'
        ]));
    }
}
