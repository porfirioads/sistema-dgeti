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
        AspectoEvaluacion::getQuery()->delete();

        DB::table('ASPECTO_EVALUACION')->insert([
            'id' => null,
            'clave_aspecto' => 'INFO_GRAL',
            'aspecto' => e('Información General'),
            'descripcion' => e('Un plantel que imparte educación media superior deberá de contar con la documentación legal que avale y describa su ubicación, infraestructura, permisos y tipo de oferta educativa que le caracterizan')
        ]);
    }
}
