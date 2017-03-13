<?php

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
        Model::unguard();

        $this->call(ResultadoEvaluacionTableSeeder::class);
        $this->call(TipoEvaluacionTableSeeder::class);
        $this->call(TipoNombramientoTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(ActividadAdminTableSeeder::class);
        $this->call(FuncionTableSeeder::class);
        $this->call(ComponenteFormacionTableSeeder::class);
        $this->call(CampoDisciplinarTableSeeder::class);
        $this->call(DisciplinaTableSeeder::class);
        $this->call(EvaluacionTableSeeder::class);
        $this->call(DocenteTableSeeder::class);
        $this->call(HistorialEvaluacionDocenteTableSeeder::class);
        $this->call(DocenteDefinitivoTableSeeder::class);
        $this->call(DocenteEvaluadorTableSeeder::class);
        $this->call(ActividadAdminDocenteDefinitivoTableSeeder::class);
        $this->call(ConcursoTableSeeder::class);
        $this->call(DocenteAtpTableSeeder::class);
        $this->call(DocenteIdoneoTableSeeder::class);
        $this->call(DocenteTutorTableSeeder::class);
        $this->call(TipoPlazaDocenteTableSeeder::class);
        $this->call(DisciplinaDocenteTableSeeder::class);
        $this->call(FuncionDocenteTutorTableSeeder::class);
        $this->call(TutoriaTableSeeder::class);


        Model::reguard();
    }
}
