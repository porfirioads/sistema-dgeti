<?php

use App\Models\AspectoEvaluacion;
use App\Models\SubaspectoEvaluacion;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Deshabilita llaves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Manda eliminar las tablas
        $this->dropTables();
        // Crea las tablas a partir del script sql
        shell_exec('mysql -u root --password="padsMysql" '
            . 'dgetiadmin < database/ddl_script/script.sql');
        // Llena las tablas con los seeders
        $this->seedTables();
        // Habilita las llaves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    private function dropTables() {
        Schema::drop('RESULTADO_EVALUACION');
        Schema::drop('TIPO_EVALUACION');
        Schema::drop('TIPO_NOMBRAMIENTO');
        Schema::drop('DESCRIPCION_TIPO_PLAZA');
        Schema::drop('TIPO_PLAZA');
        Schema::drop('STATUS');
        Schema::drop('FUNCION');
        Schema::drop('COMPONENTE_FORMACION');
        Schema::drop('CAMPO_DISCIPLINAR');
        Schema::drop('DISCIPLINA');
        Schema::drop('EVALUACION');
        Schema::drop('DOCENTE');
        Schema::drop('HISTORIAL_EVALUACION_DOCENTE');
        Schema::drop('DOCENTE_DEFINITIVO');
        Schema::drop('DOCENTE_EVALUADOR');
        Schema::drop('CONCURSO');
        Schema::drop('DOCENTE_ATP');
        Schema::drop('DOCENTE_IDONEO');
        Schema::drop('DOCENTE_TUTOR');
        Schema::drop('PLAZA_DOCENTE');
        Schema::drop('DISCIPLINA_DOCENTE');
        Schema::drop('FUNCION_DOCENTE_TUTOR');
        Schema::drop('TUTORIA');
        Schema::drop('ASPECTO_EVALUACION');
        Schema::drop('SUBASPECTO_EVALUACION');
        Schema::drop('EVIDENCIA');
        Schema::drop('CRITERIO_EXISTENCIA');
        Schema::drop('CRITERIO_PERTINENCIA');
        Schema::drop('CRITERIO_SUFICIENCIA');
        Schema::drop('INSTITUCION');
        Schema::drop('INSTITUCION_EVIDENCIA');
    }

    private function seedTables() {
        $this->call(ResultadoEvaluacionTableSeeder::class);
        $this->call(TipoEvaluacionTableSeeder::class);
        $this->call(TipoNombramientoTableSeeder::class);
        $this->call(DescripcionPlazaTableSeeder::class);
        $this->call(TipoPlazaTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(FuncionTableSeeder::class);
        $this->call(ComponenteFormacionTableSeeder::class);
        $this->call(CampoDisciplinarTableSeeder::class);
        $this->call(DisciplinaTableSeeder::class);
        $this->call(EvaluacionTableSeeder::class);
        $this->call(DocenteTableSeeder::class);
        $this->call(HistorialEvaluacionDocenteTableSeeder::class);
        $this->call(DocenteDefinitivoTableSeeder::class);
        $this->call(DocenteEvaluadorTableSeeder::class);
        $this->call(ConcursoTableSeeder::class);
        $this->call(DocenteAtpTableSeeder::class);
        $this->call(DocenteIdoneoTableSeeder::class);
        $this->call(DocenteTutorTableSeeder::class);
        $this->call(TipoPlazaDocenteTableSeeder::class);
        $this->call(DisciplinaDocenteTableSeeder::class);
        $this->call(FuncionDocenteTutorTableSeeder::class);
        $this->call(TutoriaTableSeeder::class);
        $this->call(AspectoEvaluacionTableSeeder::class);
        $this->call(SubaspectoEvaluacionTableSeeder::class);
        $this->call(EvidenciaTableSeeder::class);
        $this->call(CriterioExistenciaTableSeeder::class);
        $this->call(CriterioPertinenciaTableSeeder::class);
        $this->call(CriterioSuficienciaTableSeeder::class);
    }
}
