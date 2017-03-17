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

            $table->increments('id')->comment('');
            $table->string('cct', 11)->comment('');
            $table->string('curp', 18)->comment('');
            $table->string('rfc', 13)->comment('');
            $table->string('nombre', 45)->comment('');
            $table->string('primer_apellido', 45)->comment('');
            $table->string('segundo_apellido', 45)->comment('');
            $table->string('perfil_profesional', 41)->comment('');
            $table->integer('horas_frente_grupo')->comment('');
            $table->integer('horas_descarga_academica')->comment('');
            $table->integer('horas_administrativas')->comment('');
            $table->string('correo', 45)->comment('');
            $table->string('telefono_celular', 20)->comment('');
            $table->string('telefono_domicilio', 20)->nullable()->comment('');
            $table->string('domicilio', 50)->comment('');

            $table->unique('curp','curp_UNIQUE');
            $table->unique('rfc','rfc_UNIQUE');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('DOCENTE_DEFINITIVO', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->integer('docente_id')->unsigned()->comment('');

            $table->index('docente_id','fk_DOCENTES_DEFINITIVO_DOCENTE_idx');

            $table->foreign('docente_id')
                ->references('id')->on('DOCENTE');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('CONCURSO', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->integer('concurso')->comment('');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('DOCENTE_IDONEO', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->integer('docente_id')->unsigned()->comment('');
            $table->integer('folio_federal')->comment('');
            $table->integer('concurso_id')->unsigned()->comment('');

            $table->unique('folio_federal','folio_general_UNIQUE');

            $table->index('docente_id','fk_DOCENTES_IDONEOS_DOCENTE1_idx');
            $table->index('concurso_id','fk_DOCENTES_IDONEOS_CONCURSO1_idx');

            $table->foreign('docente_id')
                ->references('id')->on('DOCENTE');

            $table->foreign('concurso_id')
                ->references('id')->on('CONCURSO');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('DOCENTE_TUTOR', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->integer('docente_definitivo_id')->unsigned()->comment('');

            $table->index('docente_definitivo_id','fk_DOCENTES_TUTORES_DOCENTES_DEFINITIVO1_idx');

            $table->foreign('docente_definitivo_id')
                ->references('id')->on('DOCENTE_DEFINITIVO');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('DOCENTE_ATP', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->integer('docente_definitivo_id')->unsigned()->comment('');
            $table->integer('concurso_id')->unsigned()->comment('');
            $table->string('diagnostico_realizado', 1)->comment('');
            $table->string('plan_trabajo_realizado', 1)->comment('');
            $table->string('capacitacion_realizado', 1)->comment('');
            $table->string('evaluacion_realizado', 1)->comment('');
            $table->string('funcion', 21)->comment('');

            $table->index('docente_definitivo_id','fk_DOCENTES_ATP_DOCENTES_DEFINITIVO1_idx');
            $table->index('concurso_id','fk_DOCENTES_ATP_CONCURSO1_idx');

            $table->foreign('docente_definitivo_id')
                ->references('id')->on('DOCENTE_DEFINITIVO');

            $table->foreign('concurso_id')
                ->references('id')->on('CONCURSO');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('STATUS', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->string('status', 20)->comment('');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('DOCENTE_EVALUADOR', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->integer('docente_definitivo_id')->unsigned()->comment('');
            $table->string('funcion', 45)->comment('');
            $table->integer('status_id')->unsigned()->comment('');

            $table->index('docente_definitivo_id','fk_DOCENTES_EVALUADORES_DOCENTES_DEFINITIVO1_idx');
            $table->index('status_id','fk_DOCENTE_EVALUADOR_STATUS1_idx');

            $table->foreign('docente_definitivo_id')
                ->references('id')->on('DOCENTE_DEFINITIVO');

            $table->foreign('status_id')
                ->references('id')->on('STATUS');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('ACTIVIDAD_ADMIN', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->string('actividad', 45)->comment('');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('COMPONENTE_FORMACION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->string('componente_formacion', 45)->comment('');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('CAMPO_DISCIPLINAR', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->string('campo_disciplinar', 45)->comment('');
            $table->integer('componente_formacion_id')->unsigned()->comment('');

            $table->index('componente_formacion_id','fk_CAMPO_DISCIPLINAR_COMPONENTE_FORMACION1_idx');

            $table->foreign('componente_formacion_id')
                ->references('id')->on('COMPONENTE_FORMACION');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('DISCIPLINA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->string('disciplina', 45)->comment('');
            $table->integer('campo_disciplinar_id')->unsigned()->comment('');

            $table->index('campo_disciplinar_id','fk_DISCIPLINA_CAMPO_DISCIPLINAR1_idx');

            $table->foreign('campo_disciplinar_id')
                ->references('id')->on('CAMPO_DISCIPLINAR');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('TIPO_EVALUACION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->string('tipo_evaluacion', 15)->comment('');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('FUNCION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->string('funcion', 45)->comment('');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('RESULTADO_EVALUACION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->string('tipo_resultado', 35)->comment('');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('EVALUACION', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->date('fecha_evaluacion')->comment('');
            $table->date('vigencia_evaluacion')->comment('');
            $table->integer('tipo_evaluacion_id')->unsigned()->comment('');
            $table->integer('resultado_evaluacion_id')->unsigned()->comment('');

            $table->index('tipo_evaluacion_id','fk_HISTORIAL_EVALUACION_TIPO_EVALUACION1_idx');
            $table->index('resultado_evaluacion_id','fk_EVALUACION_RESULTADO_EVALUACION1_idx');

            $table->foreign('tipo_evaluacion_id')
                ->references('id')->on('TIPO_EVALUACION');

            $table->foreign('resultado_evaluacion_id')
                ->references('id')->on('RESULTADO_EVALUACION');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('HISTORIAL_EVALUACION_DOCENTE', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('evaluacion_id')->unsigned()->comment('');
            $table->integer('docente_id')->unsigned()->comment('');
            $table->increments('id')->comment('');

            $table->index('docente_id','fk_HISTORIAL_EVALUACION_has_DOCENTE_DOCENTE1_idx');
            $table->index('evaluacion_id','fk_HISTORIAL_EVALUACION_has_DOCENTE_HISTORIAL_EVALUACION1_idx');

            $table->foreign('evaluacion_id')
                ->references('id')->on('EVALUACION');

            $table->foreign('docente_id')
                ->references('id')->on('DOCENTE');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('TIPO_NOMBRAMIENTO', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->comment('');
            $table->string('tipo_nombramiento', 35)->comment('');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('TIPO_PLAZA_DOCENTE', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('docente_id')->unsigned()->comment('');
            $table->integer('tipo_nombramiento_id')->unsigned()->comment('');
            $table->string('plaza', 45)->comment('');
            $table->integer('id')->comment('');
            $table->integer('tipo_plaza_horas')->comment('');

            $table->primary('id');

            $table->index('docente_id','fk_DOCENTE_has_TIPO_PLAZA_DOCENTE1_idx');
            $table->index('tipo_nombramiento_id','fk_TIPO_PLAZA_DOCENTE_TIPO_NOMBRAMIENTO1_idx');

            $table->foreign('docente_id')
                ->references('id')->on('DOCENTE');

            $table->foreign('tipo_nombramiento_id')
                ->references('id')->on('TIPO_NOMBRAMIENTO');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('actividad_admin_id')->unsigned()->comment('');
            $table->integer('docente_definitivo_id')->unsigned()->comment('');
            $table->increments('id')->comment('');

            $table->index('docente_definitivo_id','fk_ACTIVIDAD_ADMINISTRATIVA_has_DOCENTE_DEFINITIVO_DOCENTE__idx');
            $table->index('actividad_admin_id','fk_ACTIVIDAD_ADMINISTRATIVA_has_DOCENTE_DEFINITIVO_ACTIVIDA_idx');

            $table->foreign('actividad_admin_id')
                ->references('id')->on('ACTIVIDAD_ADMIN');

            $table->foreign('docente_definitivo_id')
                ->references('id')->on('DOCENTE_DEFINITIVO');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('TUTORIA', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('docente_idoneo_id')->unsigned()->comment('');
            $table->integer('docente_tutor_id')->unsigned()->comment('');
            $table->date('fecha_inicio_semestre')->comment('');
            $table->date('fecha_final_semestre')->comment('');
            $table->string('observacion', 140)->comment('');
            $table->integer('total_horas_semana')->comment('');
            $table->increments('id')->comment('');

            $table->index('docente_tutor_id','fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_TUTOR1_idx');
            $table->index('docente_idoneo_id','fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_IDONEO1_idx');

            $table->foreign('docente_idoneo_id')
                ->references('id')->on('DOCENTE_IDONEO');

            $table->foreign('docente_tutor_id')
                ->references('id')->on('DOCENTE_TUTOR');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('DISCIPLINA_DOCENTE', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('docente_id')->unsigned()->comment('');
            $table->integer('disciplina_id')->unsigned()->comment('');
            $table->increments('id')->comment('');

            $table->index('disciplina_id','fk_DOCENTE_has_DISCIPLINA_DISCIPLINA1_idx');
            $table->index('docente_id','fk_DOCENTE_has_DISCIPLINA_DOCENTE1_idx');

            $table->foreign('docente_id')
                ->references('id')->on('DOCENTE');

            $table->foreign('disciplina_id')
                ->references('id')->on('DISCIPLINA');
            $table->softDeletes();
            $table->timestamps();

        });

        Schema::create('FUNCION_DOCENTE_TUTOR', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('docente_tutor_id')->unsigned()->comment('');
            $table->integer('funcion_id')->unsigned()->comment('');
            $table->increments('id')->comment('');

            $table->index('funcion_id','fk_DOCENTE_TUTOR_has_FUNCION_FUNCION1_idx');
            $table->index('docente_tutor_id','fk_DOCENTE_TUTOR_has_FUNCION_DOCENTE_TUTOR1_idx');

            $table->foreign('docente_tutor_id')
                ->references('id')->on('DOCENTE_TUTOR');

            $table->foreign('funcion_id')
                ->references('id')->on('FUNCION');
            $table->softDeletes();
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
        Schema::drop('TIPO_PLAZA_DOCENTE');
        Schema::drop('ACTIVIDAD_ADMIN_DOCENTE_DEFINITIVO');
        Schema::drop('TUTORIA');
        Schema::drop('DISCIPLINA_DOCENTE');
        Schema::drop('FUNCION_DOCENTE_TUTOR');

    }
}