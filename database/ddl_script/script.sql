create table ASPECTO_EVALUACION
(
  id char(3) not null
    primary key,
  aspecto varchar(255) not null,
  descripcion varchar(500) null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null
)
;

create table CAMPO_DISCIPLINAR
(
  id int not null auto_increment
    primary key,
  campo_disciplinar varchar(45) not null,
  componente_formacion_id int not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null
)
;

create index fk_CAMPO_DISCIPLINAR_COMPONENTE_FORMACION1_idx
  on CAMPO_DISCIPLINAR (componente_formacion_id)
;

create table COMPONENTE_FORMACION
(
  id int not null auto_increment
    primary key,
  componente_formacion varchar(45) not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null
)
;

alter table CAMPO_DISCIPLINAR
  add constraint fk_CAMPO_DISCIPLINAR_COMPONENTE_FORMACION1
foreign key (componente_formacion_id) references COMPONENTE_FORMACION (id)
;

create table CONCURSO
(
  id int not null auto_increment
    primary key,
  concurso int(5) not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null
)
;

create table CRITERIO_EXISTENCIA
(
  id int not null auto_increment
    primary key,
  criterio varchar(500) null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null
)
;

create table CRITERIO_PERTINENCIA
(
  id int not null auto_increment
    primary key,
  criterio varchar(500) null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null
)
;

create table CRITERIO_SUFICIENCIA
(
  id int not null auto_increment
    primary key,
  criterio varchar(500) null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null
)
;

create table DESCRIPCION_TIPO_PLAZA
(
  id int not null auto_increment
    primary key,
  descripcion varchar(45) not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null
)
;

create table DISCIPLINA
(
  id int not null auto_increment
    primary key,
  disciplina varchar(45) not null,
  campo_disciplinar_id int not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null,
  constraint fk_DISCIPLINA_CAMPO_DISCIPLINAR1
  foreign key (campo_disciplinar_id) references CAMPO_DISCIPLINAR (id)
)
;

create index fk_DISCIPLINA_CAMPO_DISCIPLINAR1_idx
  on DISCIPLINA (campo_disciplinar_id)
;

create table DISCIPLINA_DOCENTE
(
  docente_id int not null,
  disciplina_id int not null,
  id int not null auto_increment
    primary key,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null,
  constraint fk_DOCENTE_has_DISCIPLINA_DISCIPLINA1
  foreign key (disciplina_id) references DISCIPLINA (id)
)
;

create index fk_DOCENTE_has_DISCIPLINA_DISCIPLINA1_idx
  on DISCIPLINA_DOCENTE (disciplina_id)
;

create index fk_DOCENTE_has_DISCIPLINA_DOCENTE1_idx
  on DISCIPLINA_DOCENTE (docente_id)
;

create table DOCENTE
(
  id int not null auto_increment
    primary key,
  cct varchar(11) not null,
  curp varchar(18) not null,
  rfc varchar(13) not null,
  nombre varchar(45) not null,
  primer_apellido varchar(45) not null,
  segundo_apellido varchar(45) not null,
  perfil_profesional varchar(41) not null,
  horas_frente_grupo int(2) not null,
  horas_descarga_academica int(2) not null,
  horas_administrativas int(2) null,
  correo varchar(45) not null,
  telefono_celular varchar(20) not null,
  telefono_domicilio varchar(20) null,
  domicilio varchar(50) null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null,
  constraint curp_UNIQUE
  unique (curp),
  constraint rfc_UNIQUE
  unique (rfc)
)
;

alter table DISCIPLINA_DOCENTE
  add constraint fk_DOCENTE_has_DISCIPLINA_DOCENTE1
foreign key (docente_id) references DOCENTE (id)
;

create table DOCENTE_ATP
(
  id int not null auto_increment
    primary key,
  docente_definitivo_id int not null,
  concurso_id int not null,
  diagnostico_realizado varchar(1) not null,
  plan_trabajo_realizado varchar(1) not null,
  capacitacion_realizado varchar(1) not null,
  evaluacion_realizado varchar(1) not null,
  funcion varchar(21) not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null,
  constraint fk_DOCENTES_ATP_CONCURSO1
  foreign key (concurso_id) references CONCURSO (id)
)
;

create index fk_DOCENTES_ATP_CONCURSO1_idx
  on DOCENTE_ATP (concurso_id)
;

create index fk_DOCENTES_ATP_DOCENTES_DEFINITIVO1_idx
  on DOCENTE_ATP (docente_definitivo_id)
;

create table DOCENTE_DEFINITIVO
(
  id int not null auto_increment
    primary key,
  docente_id int not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null,
  constraint fk_DOCENTES_DEFINITIVO_DOCENTE
  foreign key (docente_id) references DOCENTE (id)
)
;

create index fk_DOCENTES_DEFINITIVO_DOCENTE_idx
  on DOCENTE_DEFINITIVO (docente_id)
;

alter table DOCENTE_ATP
  add constraint fk_DOCENTES_ATP_DOCENTES_DEFINITIVO1
foreign key (docente_definitivo_id) references DOCENTE_DEFINITIVO (id)
;

create table DOCENTE_EVALUADOR
(
  id int not null auto_increment
    primary key,
  docente_definitivo_id int not null,
  funcion varchar(45) not null,
  status_id int not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null,
  constraint fk_DOCENTES_EVALUADORES_DOCENTES_DEFINITIVO1
  foreign key (docente_definitivo_id) references DOCENTE_DEFINITIVO (id)
)
;

create index fk_DOCENTES_EVALUADORES_DOCENTES_DEFINITIVO1_idx
  on DOCENTE_EVALUADOR (docente_definitivo_id)
;

create index fk_DOCENTE_EVALUADOR_STATUS1_idx
  on DOCENTE_EVALUADOR (status_id)
;

create table DOCENTE_IDONEO
(
  id int not null auto_increment
    primary key,
  docente_id int not null,
  folio_federal int(10) not null,
  concurso_id int not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null,
  constraint folio_general_UNIQUE
  unique (folio_federal),
  constraint fk_DOCENTES_IDONEOS_DOCENTE1
  foreign key (docente_id) references DOCENTE (id),
  constraint fk_DOCENTES_IDONEOS_CONCURSO1
  foreign key (concurso_id) references CONCURSO (id)
)
;

create index fk_DOCENTES_IDONEOS_CONCURSO1_idx
  on DOCENTE_IDONEO (concurso_id)
;

create index fk_DOCENTES_IDONEOS_DOCENTE1_idx
  on DOCENTE_IDONEO (docente_id)
;

create table DOCENTE_TUTOR
(
  id int not null auto_increment
    primary key,
  docente_definitivo_id int not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null,
  constraint fk_DOCENTES_TUTORES_DOCENTES_DEFINITIVO1
  foreign key (docente_definitivo_id) references DOCENTE_DEFINITIVO (id)
)
;

create index fk_DOCENTES_TUTORES_DOCENTES_DEFINITIVO1_idx
  on DOCENTE_TUTOR (docente_definitivo_id)
;

create table EVALUACION
(
  id int not null auto_increment
    primary key,
  fecha_evaluacion date not null,
  vigencia_evaluacion date not null,
  tipo_evaluacion_id int not null,
  resultado_evaluacion_id int not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null
)
;

create index fk_EVALUACION_RESULTADO_EVALUACION1_idx
  on EVALUACION (resultado_evaluacion_id)
;

create index fk_HISTORIAL_EVALUACION_TIPO_EVALUACION1_idx
  on EVALUACION (tipo_evaluacion_id)
;

create table EVIDENCIA
(
  id char(11) not null
    primary key,
  evidencia varchar(255) not null,
  subaspecto_evaluacion_id char(7) not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null,
  aplica_existencia char default '1' not null,
  aplica_pertinencia char default '1' null,
  aplica_suficiencia char default '1' null
)
;

create index fk_EVIDENCIA_SUBASPECTO_EVALUACION1_idx
  on EVIDENCIA (subaspecto_evaluacion_id)
;

create table FUNCION
(
  id int not null auto_increment
    primary key,
  funcion varchar(45) not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null
)
;

create table FUNCION_DOCENTE_TUTOR
(
  docente_tutor_id int not null,
  funcion_id int not null,
  id int not null auto_increment
    primary key,
  deleted_at date null,
  created_at date not null,
  updated_at date not null,
  constraint fk_DOCENTE_TUTOR_has_FUNCION_DOCENTE_TUTOR1
  foreign key (docente_tutor_id) references DOCENTE_TUTOR (id),
  constraint fk_DOCENTE_TUTOR_has_FUNCION_FUNCION1
  foreign key (funcion_id) references FUNCION (id)
)
;

create index fk_DOCENTE_TUTOR_has_FUNCION_DOCENTE_TUTOR1_idx
  on FUNCION_DOCENTE_TUTOR (docente_tutor_id)
;

create index fk_DOCENTE_TUTOR_has_FUNCION_FUNCION1_idx
  on FUNCION_DOCENTE_TUTOR (funcion_id)
;

create table HISTORIAL_EVALUACION_DOCENTE
(
  evaluacion_id int not null,
  docente_id int not null,
  id int not null auto_increment
    primary key,
  deleted_at date null,
  created_at date not null,
  updated_at date not null,
  constraint fk_HISTORIAL_EVALUACION_has_DOCENTE_HISTORIAL_EVALUACION1
  foreign key (evaluacion_id) references EVALUACION (id),
  constraint fk_HISTORIAL_EVALUACION_has_DOCENTE_DOCENTE1
  foreign key (docente_id) references DOCENTE (id)
)
;

create index fk_HISTORIAL_EVALUACION_has_DOCENTE_DOCENTE1_idx
  on HISTORIAL_EVALUACION_DOCENTE (docente_id)
;

create index fk_HISTORIAL_EVALUACION_has_DOCENTE_HISTORIAL_EVALUACION1_idx
  on HISTORIAL_EVALUACION_DOCENTE (evaluacion_id)
;

create table INSTITUCION
(
  id int not null auto_increment
    primary key,
  nombre varchar(100) not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null
)
;

create table INSTITUCION_EVIDENCIA
(
  id int not null auto_increment
    primary key,
  fecha_evaluacion date null,
  criterio_existencia_id int not null,
  criterio_pertinencia_id int not null,
  criterio_suficiencia_id int not null,
  institucion_id int not null,
  evidencia_id char(11) not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null,
  constraint fk_INSTITUCION_EVIDENCIA_CRITERIO_EXISTENCIA1
  foreign key (criterio_existencia_id) references CRITERIO_EXISTENCIA (id),
  constraint fk_INSTITUCION_EVIDENCIA_CRITERIO_PERTINENCIA1
  foreign key (criterio_pertinencia_id) references CRITERIO_PERTINENCIA (id),
  constraint fk_INSTITUCION_EVIDENCIA_CRITERIO_SUFICIENCIA1
  foreign key (criterio_suficiencia_id) references CRITERIO_SUFICIENCIA (id),
  constraint fk_INSTITUCION_EVIDENCIA_INSTITUCION1
  foreign key (institucion_id) references INSTITUCION (id),
  constraint fk_INSTITUCION_EVIDENCIA_EVIDENCIA1
  foreign key (evidencia_id) references EVIDENCIA (id)
)
;

create index fk_INSTITUCION_EVIDENCIA_CRITERIO_EXISTENCIA1_idx
  on INSTITUCION_EVIDENCIA (criterio_existencia_id)
;

create index fk_INSTITUCION_EVIDENCIA_CRITERIO_PERTINENCIA1_idx
  on INSTITUCION_EVIDENCIA (criterio_pertinencia_id)
;

create index fk_INSTITUCION_EVIDENCIA_CRITERIO_SUFICIENCIA1_idx
  on INSTITUCION_EVIDENCIA (criterio_suficiencia_id)
;

create index fk_INSTITUCION_EVIDENCIA_EVIDENCIA1_idx
  on INSTITUCION_EVIDENCIA (evidencia_id)
;

create index fk_INSTITUCION_EVIDENCIA_INSTITUCION1_idx
  on INSTITUCION_EVIDENCIA (institucion_id)
;

create table PLAZA_DOCENTE
(
  plaza varchar(45) not null,
  tipo_nombramiento_id int not null,
  tipo_plaza_id int not null,
  id int not null,
  docente_id int not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null,
  constraint fk_PLAZA_DOCENTE_DOCENTE1
  foreign key (docente_id) references DOCENTE (id)
)
;

create index fk_PLAZA_DOCENTE_DOCENTE1_idx
  on PLAZA_DOCENTE (docente_id)
;

create index fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_NOMBRAMIENTO1_idx
  on PLAZA_DOCENTE (tipo_nombramiento_id)
;

create index fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_PLAZA1_idx
  on PLAZA_DOCENTE (tipo_plaza_id)
;

create table RESULTADO_EVALUACION
(
  id int not null auto_increment
    primary key,
  tipo_resultado varchar(35) not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null
)
;

alter table EVALUACION
  add constraint fk_EVALUACION_RESULTADO_EVALUACION1
foreign key (resultado_evaluacion_id) references RESULTADO_EVALUACION (id)
;

create table STATUS
(
  id int not null auto_increment
    primary key,
  status varchar(20) not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null
)
;

alter table DOCENTE_EVALUADOR
  add constraint fk_DOCENTE_EVALUADOR_STATUS1
foreign key (status_id) references STATUS (id)
;

create table SUBASPECTO_EVALUACION
(
  id char(7) not null
    primary key,
  subaspecto varchar(255) not null,
  aspecto_evaluacion_id char(3) not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null,
  constraint fk_SUBASPECTO_EVALUACION_ASPECTO_EVALUACION1
  foreign key (aspecto_evaluacion_id) references ASPECTO_EVALUACION (id)
)
;

create index fk_SUBASPECTO_EVALUACION_ASPECTO_EVALUACION1_idx
  on SUBASPECTO_EVALUACION (aspecto_evaluacion_id)
;

alter table EVIDENCIA
  add constraint fk_EVIDENCIA_SUBASPECTO_EVALUACION1
foreign key (subaspecto_evaluacion_id) references SUBASPECTO_EVALUACION (id)
;

create table TIPO_EVALUACION
(
  id int not null auto_increment
    primary key,
  tipo_evaluacion varchar(15) not null,
  deleted_at date null,
  created_at date default '1970-01-01' not null,
  updated_at date default '1970-01-01' not null
)
;

alter table EVALUACION
  add constraint fk_HISTORIAL_EVALUACION_TIPO_EVALUACION1
foreign key (tipo_evaluacion_id) references TIPO_EVALUACION (id)
;

create table TIPO_NOMBRAMIENTO
(
  id int not null auto_increment
    primary key,
  tipo_nombramiento varchar(35) not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null
)
;

alter table PLAZA_DOCENTE
  add constraint fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_NOMBRAMIENTO1
foreign key (tipo_nombramiento_id) references TIPO_NOMBRAMIENTO (id)
;

create table TIPO_PLAZA
(
  id int not null auto_increment
    primary key,
  numero_horas int not null,
  deleted_at date null,
  created_at date not null,
  updated_at date not null,
  descripcion_tipo_plaza_id int not null,
  constraint fk_TIPO_PLAZA_DESCRIPCION_TIPO_PLAZA1
  foreign key (descripcion_tipo_plaza_id) references DESCRIPCION_TIPO_PLAZA (id)
)
;

create index fk_TIPO_PLAZA_DESCRIPCION_TIPO_PLAZA1_idx
  on TIPO_PLAZA (descripcion_tipo_plaza_id)
;

alter table PLAZA_DOCENTE
  add constraint fk_PLAZA_DOCENTE_has_TIPO_NOMBRAMIENTO_TIPO_PLAZA1
foreign key (tipo_plaza_id) references TIPO_PLAZA (id)
;

create table TUTORIA
(
  docente_idoneo_id int not null,
  docente_tutor_id int not null,
  fecha_inicio_semestre date not null,
  fecha_final_semestre date not null,
  observacion varchar(140) not null,
  total_horas_semana int(2) not null,
  id int not null auto_increment
    primary key,
  deleted_at date null,
  created_at date not null,
  updated_at date not null,
  constraint fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_IDONEO1
  foreign key (docente_idoneo_id) references DOCENTE_IDONEO (id),
  constraint fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_TUTOR1
  foreign key (docente_tutor_id) references DOCENTE_TUTOR (id)
)
;

create index fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_IDONEO1_idx
  on TUTORIA (docente_idoneo_id)
;

create index fk_DOCENTE_IDONEO_has_DOCENTE_TUTOR_DOCENTE_TUTOR1_idx
  on TUTORIA (docente_tutor_id)
;

