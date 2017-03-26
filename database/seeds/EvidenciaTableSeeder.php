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
            'evidencia' => e('Documento de creación u otro que avale el nombre oficial del plantel;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S01_E02',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Domicilio (calle, número exterior y en su caso interior o piso, colonia, delegación o municipio, localidad y entidad federativa, así como cualquier otro dato que permita ubicar con precisión el plantel sede y las instalaciones distantes donde se realice actividad docente;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S01_E03',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Clave del centro de trabajo;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '0',
            'aplica_suficiencia' => '0'
        ], [
            'id' => 'A01_S01_E04',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Teléfono (directo y extensiones si es el caso), fax, página web y correo electrónico del plantel sede e instalaciones distantes;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S01_E05',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Régimen de sostenimiento;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '0',
            'aplica_suficiencia' => '0'
        ], [
            'id' => 'A01_S01_E06',
            'subaspecto_evaluacion_id' => 'A01_S01',
            'evidencia' => e('Nombre del director(a) de la institución y en su caso, también de los responsables de las instalaciones distantes.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S02_E01',
            'subaspecto_evaluacion_id' => 'A01_S02',
            'evidencia' => e('Documentación oficial (licencias, permisos, etc.);'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S02_E02',
            'subaspecto_evaluacion_id' => 'A01_S02',
            'evidencia' => e('Para planteles públicos, el acuerdo de creación de la autoridad educativa que formaliza la creación del plantel y de sus instalaciones distantes;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S02_E03',
            'subaspecto_evaluacion_id' => 'A01_S02',
            'evidencia' => e('En el caso de planteles particulares, el Reconocimiento de Validez Oficial de Estudios (RVOE) o el documento de incorporación.'),
            'aplica_existencia' => '0',
            'aplica_pertinencia' => '0',
            'aplica_suficiencia' => '0'
        ], [
            'id' => 'A01_S03_E01',
            'subaspecto_evaluacion_id' => 'A01_S03',
            'evidencia' => e('Documento oficial que indique si los planes de estudio que se imparten corresponden al bachillerato general, al bachillerato general con formación para el trabajo, al bachillerato tecnológico o a la formación profesional técnica;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S03_E02',
            'subaspecto_evaluacion_id' => 'A01_S03',
            'evidencia' => e('Planes y programas de estudio, en caso de que el plantel no pertenezca a una institución multiplantel.'),
            'aplica_existencia' => '0',
            'aplica_pertinencia' => '0',
            'aplica_suficiencia' => '0'
        ], [
            'id' => 'A01_S04_E01',
            'subaspecto_evaluacion_id' => 'A01_S04',
            'evidencia' => e('Documentación oficial que de manera explícita indique las modalidades y opciones educativas que se imparten en el plantel sede y sus instalaciones distantes.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S05_E01',
            'subaspecto_evaluacion_id' => 'A01_S05',
            'evidencia' => e('Documentación oficial (croquis descriptivo de espacios físicos, Word o pdf elaborado por el plantel).'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S06_E01',
            'subaspecto_evaluacion_id' => 'A01_S06',
            'evidencia' => e('Calendario escolar;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '0'
        ], [
            'id' => 'A01_S07_E01',
            'subaspecto_evaluacion_id' => 'A01_S07',
            'evidencia' => e('Documentación oficial actualizada, población estudiantil total, por plan de estudios, asignatura o UCA, turno y grupo escolar que se encuentran bajo la RIEMS; lo que se definió como “matrícula RIEMS”, que se distingue de la población total que pudiera estar cursando un programa no alineado a la Reforma'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E01',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Plantilla docente y el currículo de cada profesor actualizado para los semestres a evaluar durante la visita. Grupos y horarios de clase (incluyendo laboratorios) de cada docente.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E02',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Características de la planta docente;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E03',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Nombre (apellido paterno, materno y nombre(s);'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E04',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Registro de curriculum vitae de cada docente;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E05',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('CURP;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E06',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Formación académica (institución, año de titulación, cédula profesional, cuando aplique);'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E07',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Programas de formación y certificación en educación media superior (Profordems, Certidems o cualquier otro que llegase a ser reconocido por el CD-SNB): nombre del programa, institución fecha de término;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E08',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Otros estudios relacionados a su formación docente (40 horas o más): nombre del programa, institución y fecha de término;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E09',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Trayectoria académica: cargos académicos no docentes desempeñados en los últimos cinco años (cargo, institución y periodo);'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E10',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Asignaturas impartidas en los semestres que coinciden con el proceso de evaluación;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E11',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Otras actividades profesionales no académicas en los últimos cinco años (actividad, organización y periodo); y'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S08_E12',
            'subaspecto_evaluacion_id' => 'A01_S08',
            'evidencia' => e('Horarios de clase.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S09_E01',
            'subaspecto_evaluacion_id' => 'A01_S09',
            'evidencia' => e('Cantidad de computadoras que cuentan con conexión a Internet y que se encuentran disponibles para uso de los estudiantes durante la aplicación de la encuesta;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S09_E02',
            'subaspecto_evaluacion_id' => 'A01_S09',
            'evidencia' => e('Características de la conexión a Internet y ancho de banda;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A01_S09_E03',
            'subaspecto_evaluacion_id' => 'A01_S09',
            'evidencia' => e('En caso de no contar con conexión a Internet, indicar el número de computadoras conectadas en red o en su caso, el número de computadoras disponibles para uso individual de los estudiantes durante la encuesta;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S01_E01',
            'subaspecto_evaluacion_id' => 'A02_S01',
            'evidencia' => e(' Los derechos y obligaciones de manera clara, mismos que deben ser de su conocimiento; y'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S01_E02',
            'subaspecto_evaluacion_id' => 'A02_S01',
            'evidencia' => e('Los criterios normativos para el uso de derechos y el cumplimiento de las obligaciones.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S02_E01',
            'subaspecto_evaluacion_id' => 'A02_S02',
            'evidencia' => e(' Los requisitos y perfil del estudiante de manera clara, mismos que deben ser de su conocimiento; y'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S02_E02',
            'subaspecto_evaluacion_id' => 'A02_S02',
            'evidencia' => e('b. Los criterios normativos para el ingreso o reingreso al plantel.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S03_E01',
            'subaspecto_evaluacion_id' => 'A02_S03',
            'evidencia' => e('Instancia que realiza la evaluación;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S03_E02',
            'subaspecto_evaluacion_id' => 'A02_S03',
            'evidencia' => e('Requisitos para la certificación, indicando:'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S03_E03',
            'subaspecto_evaluacion_id' => 'A02_S03',
            'evidencia' => e('Cumplimiento y acreditación parcial o total del plan de estudios por medio de documentos con validez oficial; y'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S03_E04',
            'subaspecto_evaluacion_id' => 'A02_S03',
            'evidencia' => e('Procesos de evaluación mediante los cuales se lleva a cabo la certificación.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S03_E05',
            'subaspecto_evaluacion_id' => 'A02_S03',
            'evidencia' => e('Instancia que otorga el certificado, diploma o título.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S04_E01',
            'subaspecto_evaluacion_id' => 'A02_S04',
            'evidencia' => e('El plantel, con base en las políticas y perfiles que definen sus autoridades y cuerpos académicos, establecerá y presentará las normas con las cuales se rige la planta docente'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S05_E01',
            'subaspecto_evaluacion_id' => 'A02_S05',
            'evidencia' => e('Academias, consejos técnicos, comités o su equivalente'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S06_E01',
            'subaspecto_evaluacion_id' => 'A02_S06',
            'evidencia' => e('La reglamentación para la integración de la comisión o cuerpo académico y el alcance y efecto de sus resultados; y'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S06_E02',
            'subaspecto_evaluacion_id' => 'A02_S06',
            'evidencia' => e('La periodicidad con la que se revisarán el plan y los programas de estudio.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S07_E01',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Aulas;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S07_E02',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Talleres;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S07_E03',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Laboratorios;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S07_E04',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Biblioteca y espacios afines;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S07_E05',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Sala de cómputo;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S07_E06',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Áreas administrativas;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S07_E07',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Sanitarios;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S07_E08',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Áreas deportivas, culturales y recreativas; y'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S07_E09',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Otros (auditorio, área de medios audiovisuales, cafetería, servicio médico, salas de   uso múltiple, etc.). '),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S08_E01',
            'subaspecto_evaluacion_id' => 'A02_S08',
            'evidencia' => e('Normas para la contratación, permanencia y promoción del personal administrativo;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S08_E02',
            'subaspecto_evaluacion_id' => 'A02_S08',
            'evidencia' => e('Normas para la contratación, permanencia y promoción del personal de servicios.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S09_E01',
            'subaspecto_evaluacion_id' => 'A02_S09',
            'evidencia' => e('Reglamento de Protección Civil;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S09_E02',
            'subaspecto_evaluacion_id' => 'A02_S09',
            'evidencia' => e('Prevención de accidentes;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S09_E03',
            'subaspecto_evaluacion_id' => 'A02_S09',
            'evidencia' => e('Señalizaciones en caso de riesgo; y'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A02_S09_E04',
            'subaspecto_evaluacion_id' => 'A02_S09',
            'evidencia' => e('Cuerpos brigadistas.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S01_E01',
            'subaspecto_evaluacion_id' => 'A03_S01',
            'evidencia' => e('Identificar en cada plan de estudios y sus respectivos programas de “unidades curriculares de aprendizaje” (UCA), las competencias genéricas, disciplinares (básicas y extendidas) y profesionales (básicas y extendidas) que correspondan a su enfoque educativo y garanticen el desarrollo del MCC y, en general, del perfil del egresado;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S01_E02',
            'subaspecto_evaluacion_id' => 'A03_S01',
            'evidencia' => e('Mostrar los procesos académicos internos con los que el plantel pretende asegurar el logro de los fines y objetivos de cada plan de estudios;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S01_E03',
            'subaspecto_evaluacion_id' => 'A03_S01',
            'evidencia' => e('Identificar la vinculación entre el perfil de egreso y las competencias y otros logros que obtendrá el estudiante en cada UAC;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S01_E04',
            'subaspecto_evaluacion_id' => 'A03_S01',
            'evidencia' => e('Mostrar el funcionamiento de los servicios de orientación y tutoría y los dedicados a la atención de otras necesidades de los estudiantes; y'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S01_E05',
            'subaspecto_evaluacion_id' => 'A03_S01',
            'evidencia' => e('Precisar en el perfil de egreso las competencias que el estudiante desarrollará al concluir satisfactoriamente sus estudios.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S02_E01',
            'subaspecto_evaluacion_id' => 'A03_S02',
            'evidencia' => e('Serán exigibles documentalmente desde el nivel III; es decir, deberán estar plasmadas en documentos que las describan; a partir del nivel II tendrá que verificarse que estén en funciones las estrategias  que se establecen en los programas de las UAC;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S02_E02',
            'subaspecto_evaluacion_id' => 'A03_S02',
            'evidencia' => e('Conjunto de estrategias didácticas aplicadas para el desarrollo de competencias genéricas y disciplinares.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S03_E01',
            'subaspecto_evaluacion_id' => 'A03_S03',
            'evidencia' => e('Programas de asignatura o UAC de cada plan de estudios acordes a la RIEMS y la verificación de su aplicación en la práctica educativa;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S03_E02',
            'subaspecto_evaluacion_id' => 'A03_S03',
            'evidencia' => e('Indicación explícita del uso de recursos didácticos en los programas de laS UAC;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S03_E03',
            'subaspecto_evaluacion_id' => 'A03_S03',
            'evidencia' => e('Inclusión de estos recursos en la planeación didáctica;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S03_E04',
            'subaspecto_evaluacion_id' => 'A03_S03',
            'evidencia' => e('Conjunto de recursos didácticos acorde a la cantidad de docentes y grupos escolares existente en el plantel;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S03_E05',
            'subaspecto_evaluacion_id' => 'A03_S03',
            'evidencia' => e('Conjunto de estrategias didácticas puesto a disposición de los docentes, además de un catálogo de buenas prácticas.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S04_E01',
            'subaspecto_evaluacion_id' => 'A03_S04',
            'evidencia' => e('Programas de asignatura o UAC de cada plan de estudios acorde a la RIEMS y la verificación de su aplicación en la práctica educativa;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S04_E02',
            'subaspecto_evaluacion_id' => 'A03_S04',
            'evidencia' => e('Indicación del uso de recursos bibliográficos en los programas de estudio;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S04_E03',
            'subaspecto_evaluacion_id' => 'A03_S04',
            'evidencia' => e('Inclusión de estos recursos en la planeación didáctica;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S04_E04',
            'subaspecto_evaluacion_id' => 'A03_S04',
            'evidencia' => e('Inventario de recursos bibliográficos en función a la matrícula de estudiantes RIEMS y a la bibliografía básica señalada en los programas de estudio;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S05_E01',
            'subaspecto_evaluacion_id' => 'A03_S05',
            'evidencia' => e('Dichas fuentes deberán estar ceñidas a favorecer los procesos de enseñanza, aprendizaje y evaluación, así como el desarrollo de las competencias, considerando primordialmente el uso de las tecnologías para el aprendizaje y el conocimiento como equipos, programas, simuladores, acceso a bibliotecas y bases de datos remotas, Internet, etc'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S06_E01',
            'subaspecto_evaluacion_id' => 'A03_S06',
            'evidencia' => e('Documento oficial normativo que contiene los elementos para evaluar los logros de competencias de los estudiantes;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S06_E02',
            'subaspecto_evaluacion_id' => 'A03_S06',
            'evidencia' => e('La normativa que establece los procedimientos para el egreso, la certificación y, en su caso, el servicio social y la titulación de los estudiantes;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S06_E03',
            'subaspecto_evaluacion_id' => 'A03_S06',
            'evidencia' => e('Descripción en los planes y programas de estudio de los métodos, medios e instrumentos para evaluar los aprendizajes;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S06_E04',
            'subaspecto_evaluacion_id' => 'A03_S06',
            'evidencia' => e('Ejemplos de instrumentos utilizados en la evaluación de los aprendizajes y desarrollo de las competencias (matrices de evaluación, portafolios de evidencias, evidencias de comportamiento, entre otros);'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S06_E05',
            'subaspecto_evaluacion_id' => 'A03_S06',
            'evidencia' => e('Ejemplos de heteroevaluación: exámenes externos institucionales, departamentales, o por jueces o sinodales diferentes al docente del grupo.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S07_E01',
            'subaspecto_evaluacion_id' => 'A03_S07',
            'evidencia' => e('Documentos institucionales sancionados por la autoridad respectiva (programa correspondiente establecido en el plantel, nombramiento de tutores y sus asignaciones de trabajo); o la lista de control en los casos en los que conforme al programa de tutoría se utilicen prestadores de servicio social u otro de tipo de colaboradores con los cuales el plantel no tenga una relación laboral;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S07_E02',
            'subaspecto_evaluacion_id' => 'A03_S07',
            'evidencia' => e('Currículum vitae y documentos comprobatorios que correspondan a su perfil docente (escolaridad requerida y acreditación en un programa reconocido por el CD-SNB). La tutoría podrá ofrecerse mediante prestadores de servicio social, cuando así lo establezca el programa de tutoría aprobado por la dependencia o institución educativa, pero para el nivel I es exigible que los tutores cumplan con los requisitos de escolaridad y acreditación en un programa reconocido por el CD-SNB. En el caso de la opción virtual el tutor deberá mostrar competencias en el uso de tecnologías de información y comunicación;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S07_E03',
            'subaspecto_evaluacion_id' => 'A03_S07',
            'evidencia' => e('Expedientes de estudiantes tutorados;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S07_E04',
            'subaspecto_evaluacion_id' => 'A03_S07',
            'evidencia' => e('Desde el nivel II, la disponibilidad de espacios reflejada en la conformación de los horarios. Para el nivel I será exigible la existencia de espacios exclusivos (cubículos) para la atención.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S08_E01',
            'subaspecto_evaluacion_id' => 'A03_S08',
            'evidencia' => e('Programa oficial de orientación educativa aprobado y difundido en la comunidad educativa;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S08_E02',
            'subaspecto_evaluacion_id' => 'A03_S08',
            'evidencia' => e('Nombramiento o asignación oficial del orientador para la atención de determinados alumnos; o la lista de control en los casos en los que conforme al programa de orientación educativa se utilicen prestadores de servicio social u otro de tipo de colaboradores con los cuales el plantel no tenga una relación laboral;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S08_E03',
            'subaspecto_evaluacion_id' => 'A03_S08',
            'evidencia' => e('Currículum vitae y documentos comprobatorios que correspondan a su perfil docente (escolaridad requerida y acreditación en un programa reconocido por el CD-SNB). La orientación educativa podrá ofrecerse mediante prestadores de servicio social, cuando así lo establezca el programa de orientación aprobado por la dependencia o institución educativa, pero para el nivel I es exigible que los orientadores cumplan con los requisitos de escolaridad y acreditación en un programa reconocido por el CD-SNB. En el caso de la opción virtual el orientador deberá mostrar competencias en el uso de tecnologías de información y comunicación;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S08_E04',
            'subaspecto_evaluacion_id' => 'A03_S08',
            'evidencia' => e('Registros de atención a estudiantes, padres de familia e interacción con tutores;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S08_E05',
            'subaspecto_evaluacion_id' => 'A03_S08',
            'evidencia' => e('Desde el nivel II, la disponibilidad de espacios reflejada en la conformación de los horarios. Para el nivel I será exigible la existencia de espacios exclusivos (cubículos) para la atención.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S09_E01',
            'subaspecto_evaluacion_id' => 'A03_S09',
            'evidencia' => e('Servicio médico;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S09_E02',
            'subaspecto_evaluacion_id' => 'A03_S09',
            'evidencia' => e('Servicio de transporte;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S09_E03',
            'subaspecto_evaluacion_id' => 'A03_S09',
            'evidencia' => e('Servicio de alimentos para estudiantes de bajos recursos;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A03_S09_E04',
            'subaspecto_evaluacion_id' => 'A03_S09',
            'evidencia' => e('Becas.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A04_S01_E01',
            'subaspecto_evaluacion_id' => 'A04_S01',
            'evidencia' => e('Currículum vitae de los docentes y documentos probatorios;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A04_S01_E02',
            'subaspecto_evaluacion_id' => 'A04_S01',
            'evidencia' => e('Satisfacción de los porcentajes de docentes con diploma Profordems y certificado Certidems establecidos por el Acuerdo 12/CD del SNB.'),
            'aplica_existencia' => '9',
            'aplica_pertinencia' => '9',
            'aplica_suficiencia' => '9'
        ], [
            'id' => 'A04_S01_E03',
            'subaspecto_evaluacion_id' => 'A04_S01',
            'evidencia' => e('Satisfacción de los porcentajes de docentes con diploma Profordems y certificado Certidems para NIVEL I'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '0',
            'aplica_suficiencia' => '0'
        ], [
            'id' => 'A04_S01_E04',
            'subaspecto_evaluacion_id' => 'A04_S01',
            'evidencia' => e('Satisfacción de los porcentajes de docentes con diploma Profordems y certificado Certidems para NIVEL II'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '0',
            'aplica_suficiencia' => '0'
        ], [
            'id' => 'A04_S01_E05',
            'subaspecto_evaluacion_id' => 'A04_S01',
            'evidencia' => e('Satisfacción de los porcentajes de docentes con diploma Profordems para NIVEL III'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '0',
            'aplica_suficiencia' => '0'
        ], [
            'id' => 'A04_S02_E01',
            'subaspecto_evaluacion_id' => 'A04_S02',
            'evidencia' => e('Listado de docentes que imparten asignaturas a la matrícula RIEMS de acuerdo al formato III.2 del manual '),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A04_S03_E01',
            'subaspecto_evaluacion_id' => 'A04_S03',
            'evidencia' => e('Currículum vitae y documentos probatorios del personal docente que imparte asignaturas o UAC a los estudiantes que componen la “matrícula RIEMS” de acuerdo al formato III.3'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A04_S04_E01',
            'subaspecto_evaluacion_id' => 'A04_S04',
            'evidencia' => e('Los horarios del plantel con los nombres de las asignaturas y los docentes que imparten clases a los estudiantes de la “matrícula RIEMS”, de acuerdo al formato III.4'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A05_S01_E01',
            'subaspecto_evaluacion_id' => 'A05_S01',
            'evidencia' => e('La documentación consignada para ejercer como director de plantel (nombramiento, contrato, títulos, constancias, etc.);'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A05_S01_E02',
            'subaspecto_evaluacion_id' => 'A05_S01',
            'evidencia' => e('Constancia que acredite su experiencia docente o administrativa de al menos cinco años, preferentemente en educación media superior;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A05_S01_E03',
            'subaspecto_evaluacion_id' => 'A05_S01',
            'evidencia' => e('Constancia que acredite su experiencia en el desarrollo de proyectos de gestión, innovación y mejora continua en la educación;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A05_S01_E04',
            'subaspecto_evaluacion_id' => 'A05_S01',
            'evidencia' => e('Desde el nivel III habrá que presentar el título de licenciatura o de grado;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A05_S01_E05',
            'subaspecto_evaluacion_id' => 'A05_S01',
            'evidencia' => e('Para el nivel I se deberá mostrar el documento que avale la conclusión satisfactoria de un programa de formación de directores reconocido por el CD-SNB'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S01_E01',
            'subaspecto_evaluacion_id' => 'A06_S01',
            'evidencia' => e('Desde el nivel III se observará en el plantel la operación de modos, maneras, mecanismos, instrumentos, estrategias o sistema de registro en cuestión (no necesariamente computarizado), que permitan dar seguimiento al desarrollo de las competencias señaladas en la RIEMS, e ir conformando un directorio actualizado de egresados en el marco de la misma reforma;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S01_E02',
            'subaspecto_evaluacion_id' => 'A06_S01',
            'evidencia' => e('Desde el nivel II el sistema de servicios escolares ha de tener la información y la forma de operar que permita el registro confiable y seguro de la trayectoria académica de los estudiantes, así como del desarrollo de sus competencias genéricas, disciplinares y profesionales en su caso;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S01_E03',
            'subaspecto_evaluacion_id' => 'A06_S01',
            'evidencia' => e('Para el nivel I el sistema ha de generar información que permita construir indicadores de la eficacia y eficiencia del plantel.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E01',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Registros en el sistema en cuestión del plantel de estudiantes matriculados, calificaciones obtenidas, competencias genéricas, disciplinares y profesionales en su caso, alcanzadas durante su trayectoria escolar;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E02',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Los registros en el sistema de servicios escolares del plantel deberán abarcar los siguientes aspectos:'),
            'aplica_existencia' => '9',
            'aplica_pertinencia' => '9',
            'aplica_suficiencia' => '9'
        ], [
            'id' => 'A06_S02_E03',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Cobertura;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E04',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Absorción'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E05',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Matrícula;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E06',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Alumnos matriculados;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E07',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Calificaciones obtenidas;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E08',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Desde el nivel II registro de logro de competencias genéricas, disciplinares y profesionales por alumno alcanzadas a lo largo de su trayectoria escolar;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E09',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Eficiencia terminal;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E10',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Índices y registros de reprobación por asignatura o UAC;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E11',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Índices y registros de deserción;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E12',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Datos de trayectoria de los estudiantes;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A06_S02_E13',
            'subaspecto_evaluacion_id' => 'A06_S02',
            'evidencia' => e('Únicamente para el nivel I, se solicitarán mecanismos para seguimiento de egresados, en su caso.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S01_E01',
            'subaspecto_evaluacion_id' => 'A07_S01',
            'evidencia' => e('Existencia de aulas y mobiliario para el aprendizaje y desarrollo de competencias;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S01_E02',
            'subaspecto_evaluacion_id' => 'A07_S01',
            'evidencia' => e('Cumplimiento de la normativa de la autoridad municipal competente;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S01_E03',
            'subaspecto_evaluacion_id' => 'A07_S01',
            'evidencia' => e('Evidencia fotográfica y de video cuando las condiciones lo permitan. Estas evidencias serán compiladas por los evaluadores durante la visita al plantel;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S02_E01',
            'subaspecto_evaluacion_id' => 'A07_S02',
            'evidencia' => e('Existencia de laboratorios, talleres, equipo, herramienta, simuladores y material para que los estudiantes incorporados a la “matrícula RIEMS” realicen prácticas;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S02_E02',
            'subaspecto_evaluacion_id' => 'A07_S02',
            'evidencia' => e('Inventario de los laboratorios y talleres existentes en el plantel y en sus instalaciones distantes, si es el caso, mismos que serán revisados in situ;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S02_E03',
            'subaspecto_evaluacion_id' => 'A07_S02',
            'evidencia' => e('Reglamentos o normativa del plantel que expliciten el cumplimiento de las Normas Oficiales Mexicanas aplicables a aspectos de seguridad, protección civil e higiene;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S02_E04',
            'subaspecto_evaluacion_id' => 'A07_S02',
            'evidencia' => e('Descripción de los laboratorios, talleres, herramientas y materiales señalados en los programas de estudio.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S03_E01',
            'subaspecto_evaluacion_id' => 'A07_S03',
            'evidencia' => e('Descripción de las TIC y tecnologías para el aprendizaje y el conocimiento señaladas en los programas de asignatura o UAC;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S03_E02',
            'subaspecto_evaluacion_id' => 'A07_S03',
            'evidencia' => e('Verificación en funciones de las TIC y tecnologías para el aprendizaje y el conocimiento tales como equipos, programas, simuladores, acceso a bibliotecas y bases de datos remotas, Internet, etc., así como sus respectivos inventarios;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S03_E03',
            'subaspecto_evaluacion_id' => 'A07_S03',
            'evidencia' => e('Licencias de uso de los programas informáticos;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S04_E01',
            'subaspecto_evaluacion_id' => 'A07_S04',
            'evidencia' => e('Normativa de la biblioteca;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S04_E02',
            'subaspecto_evaluacion_id' => 'A07_S04',
            'evidencia' => e('Reglamento de usuarios de la biblioteca;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S04_E03',
            'subaspecto_evaluacion_id' => 'A07_S04',
            'evidencia' => e('Reglamento para préstamo de material bibliográfico;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S04_E04',
            'subaspecto_evaluacion_id' => 'A07_S04',
            'evidencia' => e('Biblioteca(s) en servicio indicando horarios y requisitos de uso;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S04_E05',
            'subaspecto_evaluacion_id' => 'A07_S04',
            'evidencia' => e('Acervo bibliográfico con su respectivo inventario y catálogo en función a la matrícula de estudiantes RIEMS y de la bibliografía básica señalada en los programas de estudio;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S04_E06',
            'subaspecto_evaluacion_id' => 'A07_S04',
            'evidencia' => e('Bitácora de préstamo a domicilio, cuando aplique;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S05_E01',
            'subaspecto_evaluacion_id' => 'A07_S05',
            'evidencia' => e('Existencia de espacios para docentes;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S05_E02',
            'subaspecto_evaluacion_id' => 'A07_S05',
            'evidencia' => e('Equipamiento de TIC en los espacios para docentes o, en su caso, disponibilidad de estas tecnologías en la biblioteca o el aula de medios;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S06_E01',
            'subaspecto_evaluacion_id' => 'A07_S06',
            'evidencia' => e('Verificación en funciones de espacios destinados para brindar orientación y tutoría individual y en pequeños grupos;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S06_E02',
            'subaspecto_evaluacion_id' => 'A07_S06',
            'evidencia' => e('Registros del seguimiento a los alumnos atendidos;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S07_E01',
            'subaspecto_evaluacion_id' => 'A07_S07',
            'evidencia' => e('Verificación en funciones de los espacios administrativos, mobiliario y equipo, acordes al volumen de personas que trabajan y la cantidad de actividades administrativas que realizan;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S08_E01',
            'subaspecto_evaluacion_id' => 'A07_S08',
            'evidencia' => e('Verificación de la norma en funciones de los sanitarios con que cuenta el plantel, observando su señalización y condiciones de acceso, según el tipo de población para la que están destinados;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S08_E02',
            'subaspecto_evaluacion_id' => 'A07_S08',
            'evidencia' => e('Disposición del mobiliario diferenciado según género;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A07_S09_E01',
            'subaspecto_evaluacion_id' => 'A07_S09',
            'evidencia' => e('Verificación en funciones de los espacios propios o de uso por convenio, destinados a las actividades deportivas, culturales y recreativas;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S01_E01',
            'subaspecto_evaluacion_id' => 'A08_S01',
            'evidencia' => e('Plan y programas anuales de mejora continua;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S02_E01',
            'subaspecto_evaluacion_id' => 'A08_S02',
            'evidencia' => e('Existencia de la obra civil (edificio), instalaciones y equipo conforme a la norma vigente;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S02_E02',
            'subaspecto_evaluacion_id' => 'A08_S02',
            'evidencia' => e('Funcionamiento del programa de mantenimiento preventivo y correctivo del equipo, instalaciones y obra civil;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S02_E03',
            'subaspecto_evaluacion_id' => 'A08_S02',
            'evidencia' => e('Existencia del programa de mantenimiento de las instalaciones;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S03_E01',
            'subaspecto_evaluacion_id' => 'A08_S03',
            'evidencia' => e('Normativa vigente;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S03_E02',
            'subaspecto_evaluacion_id' => 'A08_S03',
            'evidencia' => e('Actas de la sesión de instalación del “Comité de protección civil y prevención de riesgos”;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S03_E03',
            'subaspecto_evaluacion_id' => 'A08_S03',
            'evidencia' => e('Validación del cumplimiento de las normas aplicables en la materia otorgada por la autoridad local competente;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S03_E04',
            'subaspecto_evaluacion_id' => 'A08_S03',
            'evidencia' => e('Existencia del programa de higiene y seguridad;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S03_E05',
            'subaspecto_evaluacion_id' => 'A08_S03',
            'evidencia' => e('Minutas o actas de la instalación, reuniones y actividades del Comité de higiene y seguridad;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S04_E01',
            'subaspecto_evaluacion_id' => 'A08_S04',
            'evidencia' => e('Verificar la ejecución de acciones de protección al medio ambiente;'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ], [
            'id' => 'A08_S04_E02',
            'subaspecto_evaluacion_id' => 'A08_S04',
            'evidencia' => e('Minutas, actas o bitácoras que den cuenta de la existencia e instrumentación de las estrategias.'),
            'aplica_existencia' => '1',
            'aplica_pertinencia' => '1',
            'aplica_suficiencia' => '1'
        ]
        ));
    }
}
