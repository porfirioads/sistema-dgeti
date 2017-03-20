<?php

use Illuminate\Database\Seeder;
use App\Models\AspectoEvaluacion;

class AspectoEvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('ASPECTO_EVALUACION')->truncate();

        DB::table('ASPECTO_EVALUACION')->insert(array([
            'id' => 'A01',
            'aspecto' => e('Información General'),
            'descripcion' => e('Un plantel que imparte educación media superior deberá de contar con la documentación legal que avale y describa su ubicación, infraestructura, permisos y tipo de oferta educativa que le caracterizan.')
        ], [
            'id' => 'A02',
            'aspecto' => e('Normativa'),
            'descripcion' => e('Un plantel que imparte educación media superior deberá de contar con la documentación normativa que regule su operación y garantice la seguridad, desarrollo y salvaguarda de su población estudiantil, docente y administrativa; así como el cumplimiento de las disposiciones a que estaría sujeto como parte del SNB.')
        ], [
            'id' => 'A03',
            'aspecto' => e('Planes de Estudio y Programas de "Unidades Curriculares de Aprendizaje" (UCA)'),
            'descripcion' => e('"En este apartado se integran los aspectos y criterios de evaluación que permiten demostrar que en el plan de estudios que opera en el plantel se han incorporado todas las competencias (genéricas y disciplinares básicas) que constituyen el MCC del SNB, además de las disciplinares extendidas y profesionales. Los programas de asignatura o UCA deberán incluir la información necesaria de las estrategias de enseñanza, aprendizaje y evaluación, actividades, recursos didácticos, métodos de evaluación y bibliografía básica y complementaria, entre otros, para que los docentes y estudiantes orienten su participación en los procesos asociados a esas estrategias, lo que permitirá desarrollar las competencias establecidas en el plan de estudios, en concordancia con lo señalado en el perfil de egreso. Este conjunto de elementos es exigible desde el nivel III."')
        ], [
            'id' => 'A04',
            'aspecto' => e('Planta Docente'),
            'descripcion' => e('El personal docente es el elemento que mayor influencia tiene en la calidad de los servicios que ofrece un plantel de educación media superior. De ahí la importancia de su formación, desempeño, actualización y compromiso con su intervención docente.')
        ], [
            'id' => 'A05',
            'aspecto' => e('Director del Plantel'),
            'descripcion' => e('Los directores han de constituirse en líderes del proyecto educativo de su comunidad, pues a ellos corresponde promover los diagnósticos, análisis y programas para que sus planteles sigan la ruta de la mejora continua e ingresen al SNB. En tal empeño, la participación de la comunidad educativa es indispensable.')
        ], [
            'id' => 'A06',
            'aspecto' => e('Servicios Escolares'),
            'descripcion' => e('La eficacia y eficiencia del sistema de servicios escolares debe analizarse con base en el flujo de los estudiantes en los diferentes periodos lectivos (años, semestres, tetramestres, trimestres, etc.) que se consideren dentro del plan de estudios. En este sentido, cada plantel debe contar con un sistema que le asegure el registro confiable y seguro de la trayectoria académica de los estudiantes, así como la posibilidad de elaborar a partir de ellos estadísticas e indicadores')
        ], [
            'id' => 'A07',
            'aspecto' => e('Instalaciones y Equipamiento'),
            'descripcion' => e('"Las instalaciones, el equipamiento y los materiales en un plantel de educación media superior son elementos fundamentales para que los actores educativos puedan conducir las actividades académico administrativas hacia mejores niveles de eficacia. En cada uno de los espacios educativos se evaluará la pertinencia pedagógica, la suficiencia, la funcionalidad, las condiciones higiénicas y de seguridad, con base en las características propias del uso para el que fueron destinados. Especial atención se pondrá en las condiciones de iluminación, ventilación, temperatura, dimensiones, mobiliario, así como en las instalaciones para medios audiovisuales, tecnologías de la información y la comunicación (TIC), tecnologías para el aprendizaje y el conocimiento (TAC) equipo y materiales. El plantel deberá contar con programas de mantenimiento integral orientados a expandir o adecuar a largo plazo las instalaciones y el equipo. Además, en el plantel se adecuarán las instalaciones para el acceso y tránsito de personas con discapacidad."')
        ], [
            'id' => 'A08',
            'aspecto' => e('Programa de Mejora y Desarrollo'),
            'descripcion' => e('El director del plantel es responsable de asegurar que los procesos de gestión interna, externa, además de los de la administración del plantel, operen con transparencia, oportunidad y de forma expedita, a fin de garantizar su operación y la atención de los usuarios (población estudiantil, docente y administrativa), y permitan también subsanar y corregir insuficiencias, atender recomendaciones y dar respuesta a quejas o sugerencias de alumnos, padres de familia y docentes.')
        ]));

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
