<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DOCENTE', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('cct', 11);
            $table->string('curp', 18);
            $table->string('rfc', 13);
            $table->string('nombre', 45);
            $table->string('primer_apellido', 45);
            $table->string('segundo_apellido', 45);
            $table->string('perfil_profesional', 41);
            $table->integer('horas_frente_grupo');
            $table->integer('horas_descarga_academica');
            $table->integer('horas_administrativas');
            $table->string('correo', 45);
            $table->string('telefono_celular', 20);
            $table->string('telefono_domicilio', 20)->nullable();
            $table->string('domicilio', 50);
            $table->date('deleted_at')->nullable();

            $table->unique('curp','curp_UNIQUE');
            $table->unique('rfc','rfc_UNIQUE');

            $table->timestamps();

        });

        Schema::create('DOCENTE_DEFINITIVO', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('docente_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('docente_id','fk_DOCENTES_DEFINITIVO_DOCENTE_idx');

            $table->foreign('docente_id')
                ->references('id')->on('DOCENTE');

            $table->timestamps();

        });

        Schema::create('CONCURSO', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('concurso');
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('DOCENTE_IDONEO', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('docente_id')->unsigned();
            $table->integer('folio_federal');
            $table->integer('concurso_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->unique('folio_federal','folio_general_UNIQUE');

            $table->index('docente_id','fk_DOCENTES_IDONEOS_DOCENTE1_idx');
            $table->index('concurso_id','fk_DOCENTES_IDONEOS_CONCURSO1_idx');

            $table->foreign('docente_id')
                ->references('id')->on('DOCENTE');

            $table->foreign('concurso_id')
                ->references('id')->on('CONCURSO');

            $table->timestamps();

        });

        Schema::create('DOCENTE_TUTOR', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('docente_definitivo_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('docente_definitivo_id','fk_DOCENTES_TUTORES_DOCENTES_DEFINITIVO1_idx');

            $table->foreign('docente_definitivo_id')
                ->references('id')->on('DOCENTE_DEFINITIVO');

            $table->timestamps();

        });

        Schema::create('DOCENTE_ATP', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('docente_definitivo_id')->unsigned();
            $table->integer('concurso_id')->unsigned();
            $table->string('diagnostico_realizado', 1);
            $table->string('plan_trabajo_realizado', 1);
            $table->string('capacitacion_realizado', 1);
            $table->string('evaluacion_realizado', 1);
            $table->string('funcion', 21);
            $table->date('deleted_at')->nullable();

            $table->index('docente_definitivo_id','fk_DOCENTES_ATP_DOCENTES_DEFINITIVO1_idx');
            $table->index('concurso_id','fk_DOCENTES_ATP_CONCURSO1_idx');

            $table->foreign('docente_definitivo_id')
                ->references('id')->on('DOCENTE_DEFINITIVO');

            $table->foreign('concurso_id')
                ->references('id')->on('CONCURSO');

            $table->timestamps();

        });

        Schema::create('STATUS', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('status', 20);
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('DOCENTE_EVALUADOR', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('docente_definitivo_id')->unsigned();
            $table->string('funcion', 45);
            $table->integer('status_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('docente_definitivo_id','fk_DOCENTES_EVALUADORES_DOCENTES_DEFINITIVO1_idx');
            $table->index('status_id','fk_DOCENTE_EVALUADOR_STATUS1_idx');

            $table->foreign('docente_definitivo_id')
                ->references('id')->on('DOCENTE_DEFINITIVO');

            $table->foreign('status_id')
                ->references('id')->on('STATUS');

            $table->timestamps();

        });

        Schema::create('ACTIVIDAD_ADMIN', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('actividad', 45);
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('COMPONENTE_FORMACION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('componente_formacion', 45);
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('CAMPO_DISCIPLINAR', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('campo_disciplinar', 45);
            $table->integer('componente_formacion_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('componente_formacion_id','fk_CAMPO_DISCIPLINAR_COMPONENTE_FORMACION1_idx');

            $table->foreign('componente_formacion_id')
                ->references('id')->on('COMPONENTE_FORMACION');

            $table->timestamps();

        });

        Schema::create('DISCIPLINA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('disciplina', 45);
            $table->integer('campo_disciplinar_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('campo_disciplinar_id','fk_DISCIPLINA_CAMPO_DISCIPLINAR1_idx');

            $table->foreign('campo_disciplinar_id')
                ->references('id')->on('CAMPO_DISCIPLINAR');

            $table->timestamps();

        });

        Schema::create('TIPO_EVALUACION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('tipo_evaluacion', 15);
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('FUNCION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('funcion', 45);
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('RESULTADO_EVALUACION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('tipo_resultado', 35);
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('EVALUACION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->date('fecha_evaluacion');
            $table->date('vigencia_evaluacion');
            $table->integer('tipo_evaluacion_id')->unsigned();
            $table->integer('resultado_evaluacion_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('tipo_evaluacion_id','fk_HISTORIAL_EVALUACION_TIPO_EVALUACION1_idx');
            $table->index('resultado_evaluacion_id','fk_EVALUACION_RESULTADO_EVALUACION1_idx');

            $table->foreign('tipo_evaluacion_id')
                ->references('id')->on('TIPO_EVALUACION');

            $table->foreign('resultado_evaluacion_id')
                ->references('id')->on('RESULTADO_EVALUACION');

            $table->timestamps();

        });

        Schema::create('HISTORIAL_EVALUACION_DOCENTE', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('evaluacion_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            $table->increments('id');
            $table->date('deleted_at')->nullable();

            $table->index('docente_id','fk_HISTORIAL_EVALUACION_has_DOCENTE_DOCENTE1_idx');
            $table->index('evaluacion_id','fk_HISTORIAL_EVALUACION_has_DOCENTE_HISTORIAL_EVALUACION1_idx');

            $table->foreign('evaluacion_id')
                ->references('id')->on('EVALUACION');

            $table->foreign('docente_id')
                ->references('id')->on('DOCENTE');

            $table->timestamps();

        });

        Schema::create('TIPO_NOMBRAMIENTO', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('tipo_nombramiento', 35);
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('actividad_admin_id')->unsigned();
            $table->integer('docente_definitivo_id')->unsigned();
            $table->increments('id');
            $table->date('deleted_at')->nullable();

            $table->index('docente_definitivo_id','fk_ACTIVIDAD_ADMINISTRATIVA_has_DOCENTE_DEFINITIVO_DOCENTE__idx');
            $table->index('actividad_admin_id','fk_ACTIVIDAD_ADMINISTRATIVA_has_DOCENTE_DEFINITIVO_ACTIVIDA_idx');

            $table->foreign('actividad_admin_id')
                ->references('id')->on('ACTIVIDAD_ADMIN');

            $table->foreign('docente_definitivo_id')
                ->references('id')->on('DOCENTE_DEFINITIVO');

            $table->timestamps();

        });

        Schema::create('TUTORIA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('docente_idoneo_id')->unsigned();
            $table->integer('docente_tutor_id')->unsigned();
            $table->date('fecha_inicio_semestre');
            $table->date('fecha_final_semestre');
            $table->string('observacion', 140);
            $table->integer('total_horas_semana');
            $table->increments('id');
            $table->date('deleted_at')->nullable();

            $table->index('docente_tutor_id','fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_TUTOR1_idx');
            $table->index('docente_idoneo_id','fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_IDONEO1_idx');

            $table->foreign('docente_idoneo_id')
                ->references('id')->on('DOCENTE_IDONEO');

            $table->foreign('docente_tutor_id')
                ->references('id')->on('DOCENTE_TUTOR');

            $table->timestamps();

        });

        Schema::create('DISCIPLINA_DOCENTE', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('docente_id')->unsigned();
            $table->integer('disciplina_id')->unsigned();
            $table->increments('id');
            $table->date('deleted_at')->nullable();

            $table->index('disciplina_id','fk_DOCENTE_has_DISCIPLINA_DISCIPLINA1_idx');
            $table->index('docente_id','fk_DOCENTE_has_DISCIPLINA_DOCENTE1_idx');

            $table->foreign('docente_id')
                ->references('id')->on('DOCENTE');

            $table->foreign('disciplina_id')
                ->references('id')->on('DISCIPLINA');

            $table->timestamps();

        });

        Schema::create('FUNCION_DOCENTE_TUTOR', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('docente_tutor_id')->unsigned();
            $table->integer('funcion_id')->unsigned();
            $table->increments('id');
            $table->date('deleted_at')->nullable();

            $table->index('funcion_id','fk_DOCENTE_TUTOR_has_FUNCION_FUNCION1_idx');
            $table->index('docente_tutor_id','fk_DOCENTE_TUTOR_has_FUNCION_DOCENTE_TUTOR1_idx');

            $table->foreign('docente_tutor_id')
                ->references('id')->on('DOCENTE_TUTOR');

            $table->foreign('funcion_id')
                ->references('id')->on('FUNCION');

            $table->timestamps();

        });

        Schema::create('NUMERO_HORAS', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('numero_horas');
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('TIPO_PLAZA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('descripcion', 45);
            $table->integer('numero_horas_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('numero_horas_id','fk_TIPO_PLAZA_NUMERO_HORAS1_idx');

            $table->foreign('numero_horas_id')
                ->references('id')->on('NUMERO_HORAS');

            $table->timestamps();

        });

        Schema::create('PLAZA_DOCENTE', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('plaza', 45);
            $table->integer('tipo_nombramiento_id')->unsigned();
            $table->integer('tipo_plaza_id')->unsigned();
            $table->integer('id');
            $table->integer('docente_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('tipo_nombramiento_id','fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_NOMBRAMIENTO1_idx');
            $table->index('tipo_plaza_id','fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_PLAZA1_idx');
            $table->index('docente_id','fk_PLAZA_DOCENTE_DOCENTE1_idx');

            $table->foreign('tipo_nombramiento_id')
                ->references('id')->on('TIPO_NOMBRAMIENTO');

            $table->foreign('tipo_plaza_id')
                ->references('id')->on('TIPO_PLAZA');

            $table->foreign('docente_id')
                ->references('id')->on('DOCENTE');

            $table->timestamps();

        });

        Schema::create('INSTITUCION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nombre', 100);
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('CRITERIO_EXISTENCIA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('criterio', 500)->nullable();
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('CRITERIO_PERTINENCIA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('criterio', 500)->nullable();
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('CRITERIO_SUFICIENCIA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('criterio', 500)->nullable();
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('ASPECTO_EVALUACION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('aspecto', 255);
            $table->string('descripcion', 500)->nullable();
            $table->date('deleted_at')->nullable();

            $table->timestamps();

        });

        Schema::create('SUBASPECTO_EVALUACION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('subaspecto', 255);
            $table->integer('aspecto_evaluacion_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('aspecto_evaluacion_id','fk_SUBASPECTO_EVALUACION_ASPECTO_EVALUACION1_idx');

            $table->foreign('aspecto_evaluacion_id')
                ->references('id')->on('ASPECTO_EVALUACION');

            $table->timestamps();

        });

        Schema::create('EVIDENCIA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('subaspecto', 255);
            $table->integer('subaspecto_evaluacion_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('subaspecto_evaluacion_id','fk_EVIDENCIA_SUBASPECTO_EVALUACION1_idx');

            $table->foreign('subaspecto_evaluacion_id')
                ->references('id')->on('SUBASPECTO_EVALUACION');

            $table->timestamps();

        });

        Schema::create('EVIDENCIA_EXISTENCIA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('aplica', 1)->nullable();
            $table->integer('evidencia_id')->unsigned();
            $table->integer('criterio_existencia_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('evidencia_id','fk_EVIDENCIA_EXISTENCIA_EVIDENCIA1_idx');
            $table->index('criterio_existencia_id','fk_EVIDENCIA_EXISTENCIA_CRITERIO_EXISTENCIA1_idx');

            $table->foreign('evidencia_id')
                ->references('id')->on('EVIDENCIA');

            $table->foreign('criterio_existencia_id')
                ->references('id')->on('CRITERIO_EXISTENCIA');

            $table->timestamps();

        });

        Schema::create('EVIDENCIA_PERTINENCIA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('aplica', 1)->nullable();
            $table->integer('evidencia_id')->unsigned();
            $table->integer('criterio_pertinencia_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('evidencia_id','fk_EVIDENCIA_PERTINENCIA_EVIDENCIA1_idx');
            $table->index('criterio_pertinencia_id','fk_EVIDENCIA_PERTINENCIA_CRITERIO_PERTINENCIA1_idx');

            $table->foreign('evidencia_id')
                ->references('id')->on('EVIDENCIA');

            $table->foreign('criterio_pertinencia_id')
                ->references('id')->on('CRITERIO_PERTINENCIA');

            $table->timestamps();

        });

        Schema::create('EVIDENCIA_SUFICIENCIA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('aplica', 1)->nullable();
            $table->integer('evidencia_id')->unsigned();
            $table->integer('criterio_suficiencia_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('evidencia_id','fk_EVIDENCIA_SUFICIENCIA_EVIDENCIA1_idx');
            $table->index('criterio_suficiencia_id','fk_EVIDENCIA_SUFICIENCIA_CRITERIO_SUFICIENCIA1_idx');

            $table->foreign('evidencia_id')
                ->references('id')->on('EVIDENCIA');

            $table->foreign('criterio_suficiencia_id')
                ->references('id')->on('CRITERIO_SUFICIENCIA');

            $table->timestamps();

        });

        Schema::create('INSTITUCION_EVIDENCIA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->date('fecha_evaluacion')->nullable();
            $table->integer('evidencia_id')->unsigned();
            $table->integer('criterio_existencia_id')->unsigned();
            $table->integer('criterio_pertinencia_id')->unsigned();
            $table->integer('criterio_suficiencia_id')->unsigned();
            $table->integer('institucion_id')->unsigned();
            $table->date('deleted_at')->nullable();

            $table->index('evidencia_id','fk_INSTITUCION_EVIDENCIA_EVIDENCIA1_idx');
            $table->index('criterio_existencia_id','fk_INSTITUCION_EVIDENCIA_CRITERIO_EXISTENCIA1_idx');
            $table->index('criterio_pertinencia_id','fk_INSTITUCION_EVIDENCIA_CRITERIO_PERTINENCIA1_idx');
            $table->index('criterio_suficiencia_id','fk_INSTITUCION_EVIDENCIA_CRITERIO_SUFICIENCIA1_idx');
            $table->index('institucion_id','fk_INSTITUCION_EVIDENCIA_INSTITUCION1_idx');

            $table->foreign('evidencia_id')
                ->references('id')->on('EVIDENCIA');

            $table->foreign('criterio_existencia_id')
                ->references('id')->on('CRITERIO_EXISTENCIA');

            $table->foreign('criterio_pertinencia_id')
                ->references('id')->on('CRITERIO_PERTINENCIA');

            $table->foreign('criterio_suficiencia_id')
                ->references('id')->on('CRITERIO_SUFICIENCIA');

            $table->foreign('institucion_id')
                ->references('id')->on('INSTITUCION');

            $table->timestamps();

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('DOCENTE');
        Schema::drop('DOCENTE_DEFINITIVO');
        Schema::drop('CONCURSO');
        Schema::drop('DOCENTE_IDONEO');
        Schema::drop('DOCENTE_TUTOR');
        Schema::drop('DOCENTE_ATP');
        Schema::drop('STATUS');
        Schema::drop('DOCENTE_EVALUADOR');
        Schema::drop('ACTIVIDAD_ADMIN');
        Schema::drop('COMPONENTE_FORMACION');
        Schema::drop('CAMPO_DISCIPLINAR');
        Schema::drop('DISCIPLINA');
        Schema::drop('TIPO_EVALUACION');
        Schema::drop('FUNCION');
        Schema::drop('RESULTADO_EVALUACION');
        Schema::drop('EVALUACION');
        Schema::drop('HISTORIAL_EVALUACION_DOCENTE');
        Schema::drop('TIPO_NOMBRAMIENTO');
        Schema::drop('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO');
        Schema::drop('TUTORIA');
        Schema::drop('DISCIPLINA_DOCENTE');
        Schema::drop('FUNCION_DOCENTE_TUTOR');
        Schema::drop('NUMERO_HORAS');
        Schema::drop('TIPO_PLAZA');
        Schema::drop('PLAZA_DOCENTE');
        Schema::drop('INSTITUCION');
        Schema::drop('CRITERIO_EXISTENCIA');
        Schema::drop('CRITERIO_PERTINENCIA');
        Schema::drop('CRITERIO_SUFICIENCIA');
        Schema::drop('ASPECTO_EVALUACION');
        Schema::drop('SUBASPECTO_EVALUACION');
        Schema::drop('EVIDENCIA');
        Schema::drop('EVIDENCIA_EXISTENCIA');
        Schema::drop('EVIDENCIA_PERTINENCIA');
        Schema::drop('EVIDENCIA_SUFICIENCIA');
        Schema::drop('INSTITUCION_EVIDENCIA');

    }
}