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
        ], [
            'id' => 'A02_S01_E01',
            'subaspecto_evaluacion_id' => 'A02_S01',
            'evidencia' => e(' Los derechos y obligaciones de manera clara, mismos que deben ser de su conocimiento; y')
        ], [
            'id' => 'A02_S01_E02',
            'subaspecto_evaluacion_id' => 'A02_S01',
            'evidencia' => e('Los criterios normativos para el uso de derechos y el cumplimiento de las obligaciones.')
        ], [
            'id' => 'A02_S02_E01',
            'subaspecto_evaluacion_id' => 'A02_S02',
            'evidencia' => e(' Los requisitos y perfil del estudiante de manera clara, mismos que deben ser de su conocimiento; y')
        ], [
            'id' => 'A02_S02_E02',
            'subaspecto_evaluacion_id' => 'A02_S02',
            'evidencia' => e('b. Los criterios normativos para el ingreso o reingreso al plantel.')
        ], [
            'id' => 'A02_S03_E01',
            'subaspecto_evaluacion_id' => 'A02_S03',
            'evidencia' => e('Instancia que realiza la evaluación;')
        ], [
            'id' => 'A02_S03_E02',
            'subaspecto_evaluacion_id' => 'A02_S03',
            'evidencia' => e('Requisitos para la certificación, indicando:')
        ], [
            'id' => 'A02_S03_E03',
            'subaspecto_evaluacion_id' => 'A02_S03',
            'evidencia' => e('Cumplimiento y acreditación parcial o total del plan de estudios por medio de documentos con validez oficial; y')
        ], [
            'id' => 'A02_S03_E04',
            'subaspecto_evaluacion_id' => 'A02_S03',
            'evidencia' => e('Procesos de evaluación mediante los cuales se lleva a cabo la certificación.')
        ], [
            'id' => 'A02_S03_E05',
            'subaspecto_evaluacion_id' => 'A02_S03',
            'evidencia' => e('Instancia que otorga el certificado, diploma o título.')
        ], [
            'id' => 'A02_S04_E01',
            'subaspecto_evaluacion_id' => 'A02_S04',
            'evidencia' => e('El plantel, con base en las políticas y perfiles que definen sus autoridades y cuerpos académicos, establecerá y presentará las normas con las cuales se rige la planta docente')
        ], [
            'id' => 'A02_S05_E01',
            'subaspecto_evaluacion_id' => 'A02_S05',
            'evidencia' => e('Academias, consejos técnicos, comités o su equivalente')
        ], [
            'id' => 'A02_S06_E01',
            'subaspecto_evaluacion_id' => 'A02_S06',
            'evidencia' => e('La reglamentación para la integración de la comisión o cuerpo académico y el alcance y efecto de sus resultados; y')
        ], [
            'id' => 'A02_S06_E02',
            'subaspecto_evaluacion_id' => 'A02_S06',
            'evidencia' => e('La periodicidad con la que se revisarán el plan y los programas de estudio.')
        ], [
            'id' => 'A02_S07_E01',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Aulas;')
        ], [
            'id' => 'A02_S07_E02',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Talleres;')
        ], [
            'id' => 'A02_S07_E03',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Laboratorios;')
        ], [
            'id' => 'A02_S07_E04',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Biblioteca y espacios afines;')
        ], [
            'id' => 'A02_S07_E05',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Sala de cómputo;')
        ], [
            'id' => 'A02_S07_E06',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Áreas administrativas;')
        ], [
            'id' => 'A02_S07_E07',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Sanitarios;')
        ], [
            'id' => 'A02_S07_E08',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Áreas deportivas, culturales y recreativas; y')
        ], [
            'id' => 'A02_S07_E09',
            'subaspecto_evaluacion_id' => 'A02_S07',
            'evidencia' => e('Otros (auditorio, área de medios audiovisuales, cafetería, servicio médico, salas de   uso múltiple, etc.). ')
        ], [
            'id' => 'A02_S08_E01',
            'subaspecto_evaluacion_id' => 'A02_S08',
            'evidencia' => e('Normas para la contratación, permanencia y promoción del personal administrativo;')
        ], [
            'id' => 'A02_S08_E02',
            'subaspecto_evaluacion_id' => 'A02_S08',
            'evidencia' => e('Normas para la contratación, permanencia y promoción del personal de servicios.')
        ], [
            'id' => 'A02_S09_E01',
            'subaspecto_evaluacion_id' => 'A02_S09',
            'evidencia' => e('Reglamento de Protección Civil;')
        ], [
            'id' => 'A02_S09_E02',
            'subaspecto_evaluacion_id' => 'A02_S09',
            'evidencia' => e('Prevención de accidentes;')
        ], [
            'id' => 'A02_S09_E03',
            'subaspecto_evaluacion_id' => 'A02_S09',
            'evidencia' => e('Señalizaciones en caso de riesgo; y')
        ], [
            'id' => 'A02_S09_E04',
            'subaspecto_evaluacion_id' => 'A02_S09',
            'evidencia' => e('Cuerpos brigadistas.')
        ], [
            'id' => 'A03_S01_E01',
            'subaspecto_evaluacion_id' => 'A03_S01',
            'evidencia' => e('Identificar en cada plan de estudios y sus respectivos programas de “unidades curriculares de aprendizaje” (UCA), las competencias genéricas, disciplinares (básicas y extendidas) y profesionales (básicas y extendidas) que correspondan a su enfoque educativo y garanticen el desarrollo del MCC y, en general, del perfil del egresado;')
        ], [
            'id' => 'A03_S01_E02',
            'subaspecto_evaluacion_id' => 'A03_S01',
            'evidencia' => e('Mostrar los procesos académicos internos con los que el plantel pretende asegurar el logro de los fines y objetivos de cada plan de estudios;')
        ], [
            'id' => 'A03_S01_E03',
            'subaspecto_evaluacion_id' => 'A03_S01',
            'evidencia' => e('Identificar la vinculación entre el perfil de egreso y las competencias y otros logros que obtendrá el estudiante en cada UAC;')
        ], [
            'id' => 'A03_S01_E04',
            'subaspecto_evaluacion_id' => 'A03_S01',
            'evidencia' => e('Mostrar el funcionamiento de los servicios de orientación y tutoría y los dedicados a la atención de otras necesidades de los estudiantes; y')
        ], [
            'id' => 'A03_S01_E05',
            'subaspecto_evaluacion_id' => 'A03_S01',
            'evidencia' => e('Precisar en el perfil de egreso las competencias que el estudiante desarrollará al concluir satisfactoriamente sus estudios.')
        ], [
            'id' => 'A03_S02_E01',
            'subaspecto_evaluacion_id' => 'A03_S02',
            'evidencia' => e('Serán exigibles documentalmente desde el nivel III; es decir, deberán estar plasmadas en documentos que las describan; a partir del nivel II tendrá que verificarse que estén en funciones las estrategias  que se establecen en los programas de las UAC;')
        ], [
            'id' => 'A03_S02_E02',
            'subaspecto_evaluacion_id' => 'A03_S02',
            'evidencia' => e('Conjunto de estrategias didácticas aplicadas para el desarrollo de competencias genéricas y disciplinares.')
        ], [
            'id' => 'A03_S03_E01',
            'subaspecto_evaluacion_id' => 'A03_S03',
            'evidencia' => e('Programas de asignatura o UAC de cada plan de estudios acordes a la RIEMS y la verificación de su aplicación en la práctica educativa;')
        ], [
            'id' => 'A03_S03_E02',
            'subaspecto_evaluacion_id' => 'A03_S03',
            'evidencia' => e('Indicación explícita del uso de recursos didácticos en los programas de laS UAC;')
        ], [
            'id' => 'A03_S03_E03',
            'subaspecto_evaluacion_id' => 'A03_S03',
            'evidencia' => e('Inclusión de estos recursos en la planeación didáctica;')
        ], [
            'id' => 'A03_S03_E04',
            'subaspecto_evaluacion_id' => 'A03_S03',
            'evidencia' => e('Conjunto de recursos didácticos acorde a la cantidad de docentes y grupos escolares existente en el plantel;')
        ], [
            'id' => 'A03_S03_E05',
            'subaspecto_evaluacion_id' => 'A03_S03',
            'evidencia' => e('Conjunto de estrategias didácticas puesto a disposición de los docentes, además de un catálogo de buenas prácticas.')
        ], [
            'id' => 'A03_S04_E01',
            'subaspecto_evaluacion_id' => 'A03_S04',
            'evidencia' => e('Programas de asignatura o UAC de cada plan de estudios acorde a la RIEMS y la verificación de su aplicación en la práctica educativa;')
        ], [
            'id' => 'A03_S04_E02',
            'subaspecto_evaluacion_id' => 'A03_S04',
            'evidencia' => e('Indicación del uso de recursos bibliográficos en los programas de estudio;')
        ], [
            'id' => 'A03_S04_E03',
            'subaspecto_evaluacion_id' => 'A03_S04',
            'evidencia' => e('Inclusión de estos recursos en la planeación didáctica;')
        ], [
            'id' => 'A03_S04_E04',
            'subaspecto_evaluacion_id' => 'A03_S04',
            'evidencia' => e('Inventario de recursos bibliográficos en función a la matrícula de estudiantes RIEMS y a la bibliografía básica señalada en los programas de estudio;')
        ], [
            'id' => 'A03_S05_E01',
            'subaspecto_evaluacion_id' => 'A03_S05',
            'evidencia' => e('Dichas fuentes deberán estar ceñidas a favorecer los procesos de enseñanza, aprendizaje y evaluación, así como el desarrollo de las competencias, considerando primordialmente el uso de las tecnologías para el aprendizaje y el conocimiento como equipos, programas, simuladores, acceso a bibliotecas y bases de datos remotas, Internet, etc')
        ], [
            'id' => 'A03_S06_E01',
            'subaspecto_evaluacion_id' => 'A03_S06',
            'evidencia' => e('Documento oficial normativo que contiene los elementos para evaluar los logros de competencias de los estudiantes;')
        ], [
            'id' => 'A03_S06_E02',
            'subaspecto_evaluacion_id' => 'A03_S06',
            'evidencia' => e('La normativa que establece los procedimientos para el egreso, la certificación y, en su caso, el servicio social y la titulación de los estudiantes;')
        ], [
            'id' => 'A03_S06_E03',
            'subaspecto_evaluacion_id' => 'A03_S06',
            'evidencia' => e('Descripción en los planes y programas de estudio de los métodos, medios e instrumentos para evaluar los aprendizajes;')
        ], [
            'id' => 'A03_S06_E04',
            'subaspecto_evaluacion_id' => 'A03_S06',
            'evidencia' => e('Ejemplos de instrumentos utilizados en la evaluación de los aprendizajes y desarrollo de las competencias (matrices de evaluación, portafolios de evidencias, evidencias de comportamiento, entre otros);')
        ], [
            'id' => 'A03_S06_E05',
            'subaspecto_evaluacion_id' => 'A03_S06',
            'evidencia' => e('Ejemplos de heteroevaluación: exámenes externos institucionales, departamentales, o por jueces o sinodales diferentes al docente del grupo.')
        ], [
            'id' => 'A03_S07_E01',
            'subaspecto_evaluacion_id' => 'A03_S07',
            'evidencia' => e('Documentos institucionales sancionados por la autoridad respectiva (programa correspondiente establecido en el plantel, nombramiento de tutores y sus asignaciones de trabajo); o la lista de control en los casos en los que conforme al programa de tutoría se utilicen prestadores de servicio social u otro de tipo de colaboradores con los cuales el plantel no tenga una relación laboral;')
        ], [
            'id' => 'A03_S07_E02',
            'subaspecto_evaluacion_id' => 'A03_S07',
            'evidencia' => e('Currículum vitae y documentos comprobatorios que correspondan a su perfil docente (escolaridad requerida y acreditación en un programa reconocido por el CD-SNB). La tutoría podrá ofrecerse mediante prestadores de servicio social, cuando así lo establezca el programa de tutoría aprobado por la dependencia o institución educativa, pero para el nivel I es exigible que los tutores cumplan con los requisitos de escolaridad y acreditación en un programa reconocido por el CD-SNB. En el caso de la opción virtual el tutor deberá mostrar competencias en el uso de tecnologías de información y comunicación;')
        ], [
            'id' => 'A03_S07_E03',
            'subaspecto_evaluacion_id' => 'A03_S07',
            'evidencia' => e('Expedientes de estudiantes tutorados;')
        ], [
            'id' => 'A03_S07_E04',
            'subaspecto_evaluacion_id' => 'A03_S07',
            'evidencia' => e('Desde el nivel II, la disponibilidad de espacios reflejada en la conformación de los horarios. Para el nivel I será exigible la existencia de espacios exclusivos (cubículos) para la atención.')
        ], [
            'id' => 'A03_S08_E01',
            'subaspecto_evaluacion_id' => 'A03_S08',
            'evidencia' => e('Programa oficial de orientación educativa aprobado y difundido en la comunidad educativa;')
        ], [
            'id' => 'A03_S08_E02',
            'subaspecto_evaluacion_id' => 'A03_S08',
            'evidencia' => e('Nombramiento o asignación oficial del orientador para la atención de determinados alumnos; o la lista de control en los casos en los que conforme al programa de orientación educativa se utilicen prestadores de servicio social u otro de tipo de colaboradores con los cuales el plantel no tenga una relación laboral;')
        ], [
            'id' => 'A03_S08_E03',
            'subaspecto_evaluacion_id' => 'A03_S08',
            'evidencia' => e('Currículum vitae y documentos comprobatorios que correspondan a su perfil docente (escolaridad requerida y acreditación en un programa reconocido por el CD-SNB). La orientación educativa podrá ofrecerse mediante prestadores de servicio social, cuando así lo establezca el programa de orientación aprobado por la dependencia o institución educativa, pero para el nivel I es exigible que los orientadores cumplan con los requisitos de escolaridad y acreditación en un programa reconocido por el CD-SNB. En el caso de la opción virtual el orientador deberá mostrar competencias en el uso de tecnologías de información y comunicación;')
        ], [
            'id' => 'A03_S08_E04',
            'subaspecto_evaluacion_id' => 'A03_S08',
            'evidencia' => e('Registros de atención a estudiantes, padres de familia e interacción con tutores;')
        ], [
            'id' => 'A03_S08_E05',
            'subaspecto_evaluacion_id' => 'A03_S08',
            'evidencia' => e('Desde el nivel II, la disponibilidad de espacios reflejada en la conformación de los horarios. Para el nivel I será exigible la existencia de espacios exclusivos (cubículos) para la atención.')
        ], [
            'id' => 'A03_S09_E01',
            'subaspecto_evaluacion_id' => 'A03_S09',
            'evidencia' => e('Servicio médico;')
        ], [
            'id' => 'A03_S09_E02',
            'subaspecto_evaluacion_id' => 'A03_S09',
            'evidencia' => e('Servicio de transporte;')
        ], [
            'id' => 'A03_S09_E03',
            'subaspecto_evaluacion_id' => 'A03_S09',
            'evidencia' => e('Servicio de alimentos para estudiantes de bajos recursos;')
        ], [
            'id' => 'A03_S09_E04',
            'subaspecto_evaluacion_id' => 'A03_S09',
            'evidencia' => e('Becas.')
        ], [
            'id' => 'A04_S01_E01',
            'subaspecto_evaluacion_id' => 'A04_S01',
            'evidencia' => e('Currículum vitae de los docentes y documentos probatorios;')
        ], [
            'id' => 'A04_S01_E02',
            'subaspecto_evaluacion_id' => 'A04_S01',
            'evidencia' => e('Satisfacción de los porcentajes de docentes con diploma Profordems y certificado Certidems establecidos por el Acuerdo 12/CD del SNB.')
        ], [
            'id' => 'A04_S01_E03',
            'subaspecto_evaluacion_id' => 'A04_S01',
            'evidencia' => e('Satisfacción de los porcentajes de docentes con diploma Profordems y certificado Certidems para NIVEL I')
        ], [
            'id' => 'A04_S01_E04',
            'subaspecto_evaluacion_id' => 'A04_S01',
            'evidencia' => e('Satisfacción de los porcentajes de docentes con diploma Profordems y certificado Certidems para NIVEL II')
        ], [
            'id' => 'A04_S01_E05',
            'subaspecto_evaluacion_id' => 'A04_S01',
            'evidencia' => e('Satisfacción de los porcentajes de docentes con diploma Profordems para NIVEL III')
        ], [
            'id' => 'A04_S02_E01',
            'subaspecto_evaluacion_id' => 'A04_S02',
            'evidencia' => e('Listado de docentes que imparten asignaturas a la matrícula RIEMS de acuerdo al formato III.2 del manual ')
        ], [
            'id' => 'A04_S03_E01',
            'subaspecto_evaluacion_id' => 'A04_S03',
            'evidencia' => e('Currículum vitae y documentos probatorios del personal docente que imparte asignaturas o UAC a los estudiantes que componen la “matrícula RIEMS” de acuerdo al formato III.3')
        ], [
            'id' => 'A04_S04_E01',
            'subaspecto_evaluacion_id' => 'A04_S04',
            'evidencia' => e('Los horarios del plantel con los nombres de las asignaturas y los docentes que imparten clases a los estudiantes de la “matrícula RIEMS”, de acuerdo al formato III.4')
        ], [
            'id' => 'A05_S01_E01',
            'subaspecto_evaluacion_id' => 'A05_S01',
            'evidencia' => e('La documentación consignada para ejercer como director de plantel (nombramiento, contrato, títulos, constancias, etc.);')
        ], [
            'id' => 'A05_S01_E02',
            'subaspecto_evaluacion_id' => 'A05_S01',
            'evidencia' => e('Constancia que acredite su experiencia docente o administrativa de al menos cinco años, preferentemente en educación media superior;')
        ], [
            'id' => 'A05_S01_E03',
            'subaspecto_evaluacion_id' => 'A05_S01',
            'evidencia' => e('Constancia que acredite su experiencia en el desarrollo de proyectos de gestión, innovación y mejora continua en la educación;')
        ], [
            'id' => 'A05_S01_E04',
            'subaspecto_evaluacion_id' => 'A05_S01',
            'evidencia' => e('Desde el nivel III habrá que presentar el título de licenciatura o de grado;')
        ], [
            'id' => 'A05_S01_E05',
            'subaspecto_evaluacion_id' => 'A05_S01',
            'evidencia' => e('Para el nivel I se deberá mostrar el documento que avale la conclusión satisfactoria de un programa de formación de directores reconocido por el CD-SNB')
        ]
        ));
    }
}
