@extends('dashboard_master')

@section('title', 'Docentes Evaluador')

@section('particular_styles')
    <link href="{!! asset('css/select2.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/datepicker3.css') !!}" rel="stylesheet">
@endsection

@section('sidebar_options')
    @include('docente_evaluador.sidebar_items', ['url' =>
    '../docente_evaluador', 'texto' => 'Volver a lista de evaluadores'])
@endsection

@section('box_title', 'Docente Evaluador')

@section('box_body')
    {!! Form::open([
        'route' => $data->accion=='modificar'? array('docente_definitivo.update',$data->id):'docente_definitivo.store',
        'method'=>$data->accion=='modificar'?'PUT':'POST', 'class' => '',
        'name'=>'form_docente_definitivo'])
        !!}
    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Datos personales</h3>
        </div>
        <div class="panel-body">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">CCT</label>
                {!! Form::text('cct', $value = $data->accion=='visualizar' ||  $data->accion=='modificar'? $data->cct:null, ['class' =>
                'form-control', 'placeholder' => 'CCT','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">CURP</label>
                {!! Form::text('curp', $value = $data->accion=='visualizar' ||  $data->accion=='modificar'? $data->curp:null, ['class' =>
                'form-control', 'placeholder' => 'Curp','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">RFC</label>
                {!! Form::text('rfc', $value = $data->accion=='visualizar' ||  $data->accion=='modificar'? $data->rfc:null, ['class' =>
                'form-control', 'placeholder' => 'RFC','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre</label>
                {!! Form::text('nombre', $value = $data->accion=='visualizar' ||  $data->accion=='modificar'? $data->nombre:null, ['class' =>
                'form-control', 'placeholder' => 'Nombre','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Primer Apellido
                </label>
                {!! Form::text('primer_apellido',
                $value = $data->accion=='visualizar'  ||  $data->accion=='modificar'? $data->primer_apellido:null,
                ['class' => 'form-control',
                'placeholder' => 'Primer Apellido','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Segundo Apellido
                </label>
                {!! Form::text('segundo_apellido',
                $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->segundo_apellido:null,['class' => 'form-control',
                'placeholder' => 'Segundo Apellido','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4 email">
                <label for="correo">
                    Correo electrónico
                </label>
                {!! Form::text('correo', $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->correo:null,['class' =>
                'form-control', 'placeholder' => 'Correo electrónico',
                'required',$data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Teléfono celular
                </label>
                {!! Form::text('telefono_celular',
                $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->telefono_celular:null,['class' => 'form-control',
                'placeholder' => 'Teléfono celular','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Teléfono fijo
                </label>
                {!! Form::text('telefono_domicilio',
                $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->telefono_domicilio:null,['class' => 'form-control',
                'placeholder' => 'Teléfono fijo','',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-12">
                <label for="exampleInputPassword1">
                    Domicilio
                </label>
                {!! Form::text('domicilio', $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->domicilio:null,
                ['class' => 'form-control', 'placeholder' => 'Domicilio',
                '',$data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Datos laborales</h3>
        </div>

        <div class="panel-body">
            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                <label for="exampleInputPassword1">
                    Perfil Profesional
                </label>
                {!! Form::text('perfil_profesional',
                $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->perfil_profesional:null,['class' => 'form-control',
                'placeholder' => 'Perfil Profesional','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                <label for="exampleInputPassword1">
                    Horas frente a grupo
                </label>
                {!! Form::text('horas_frente_grupo',
                $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->horas_frente_grupo:null,['class' => 'form-control',
                'placeholder' => 'Horas frente a grupo','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                <label for="exampleInputPassword1">
                    Horas descarga académica
                </label>
                {!! Form::text('horas_descarga_academica',
                $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->horas_descarga_academica:null,
                ['class' => 'form-control',
                'placeholder' => 'Horas descarga académica','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                <label for="exampleInputPassword1">
                    Horas administrativas
                </label>
                {!! Form::text('horas_administrativas',
                 $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->horas_administrativas:null,
                 ['class' => 'form-control',
                 'placeholder' => 'Horas administrativas',
                 $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
        </div>
    </div>


    {{--//////////////////////////////////////Datos relacionados a Docente Idóneo/////////--}}

    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Datos ATP</h3>
        </div>
        <div class="panel-body">
            @include('docente_evaluador.datos_evaluador')

        </div>
    </div>



    {{--//////////////////////////////////////Datos académicos/////////--}}

    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Datos académicos</h3>
        </div>
        <div class="panel-body">


            <div class="row hidden-xs hidden-sm hidden-md">
                <div class="form-group col-md-4 col-sm-12">
                    <label>Componente Formación</label>
                </div>
                <div class="form-group col-md-4 col-sm-12">
                    <label>Campo disciplinar</label>
                </div>
                <div class="form-group col-md-3 col-sm-12">
                    <label>Disciplina</label>
                </div>
                <div class="col-md-1 col-sm-1">
                    <label>Acciones</label>
                </div>
            </div>


            @if( $data->accion=='visualizar' || $data->accion=='modificar')
                <div id="agregarAcademico">
                    @if (empty($data->res_disciplina))
                        asdfasdfa
                        @include('docente_definitivo.datos_academicos')
                    @else
                        @foreach($data->res_disciplina as $componente)
                            @include('docente_definitivo.datos_academicos')
                        @endforeach
                    @endif

                </div>
            @else
                <div id="agregarAcademico">
                    @include('docente_definitivo.datos_academicos')
                </div>
            @endif


            <div class="row">
                <div class="col-md-11"></div>
                <div class="form-group col-md-1 col-sm-1">
                    <a class="btn btn-block btn-primary add-element-academico" {{$data->accion=='visualizar' ? 'disabled':''}}>
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>










    {{--//////////////////////////////////////PLAZAS/////////--}}
    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Datos Plaza</h3>
        </div>
        <div class="panel-body">

            <div class="row hidden-xs hidden-sm hidden-md">
                <div class="form-group col-md-3 col-sm-12">
                    <label>Plaza</label>
                </div>
                <div class="form-group col-md-3 col-sm-12">
                    <label>Tipo plaza</label>
                </div>
                <div class="form-group col-md-3 col-sm-12">
                    <label>Horas</label>
                </div>
                <div class="form-group col-md-2 col-sm-10">
                    <label>Tipo de nombramiento</label>
                </div>
                <div class="col-md-1 col-sm-1">
                    <label>Acciones</label>
                </div>
            </div>

            @if( $data->accion=='visualizar' || $data->accion=='modificar')
                <div id="agregarPlaza">
                    @foreach($data->res_plaza as $plaza)
                        @include('docente_definitivo.plazas')
                    @endforeach
                </div>
            @else
                <div id="agregarPlaza">
                    @include('docente_definitivo.plazas')
                </div>
            @endif


            <div class="row">
                <div class="col-md-11"></div>
                <div class="form-group col-md-1 col-sm-1">
                    <a class="btn btn-block btn-primary add-element-plaza" {{$data->accion=='visualizar' ? 'disabled':''}}>
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{--//////////////////////////////////////HISTORIAL EVALUACION/////////--}}
    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Historial Evaluación</h3>
        </div>
        <div class="panel-body">




            <div class="row hidden-xs hidden-sm hidden-md">
                <div class="form-group col-lg-3"><label>Tipo Evaluación</label></div>
                <div class="form-group col-lg-2"><label>Resultados</label></div>
                <div class="form-group col-lg-3"><label>Fecha evaluación</label></div>
                <div class="form-group col-lg-3"><label>Fecha vigencia</label></div>
                <div class="form-group col-lg-1"><label>Acciones</label></div>
            </div>


            @if( $data->accion=='visualizar' || $data->accion=='modificar' )
                <div id="agregarHistorial">
                    @if(count($data->res_evaluacion)> 0)
                        @foreach($data->res_evaluacion as $evaluacion)
                            @include('docente_definitivo.historial_evaluacion')
                        @endforeach
                    @else
                        @if($data->accion=='visualizar')
                            <p align="center">No contiene evaluaciones el docente</p>
                        @else
                            @include('docente_definitivo.historial_evaluacion')
                        @endif
                    @endif
                </div>
            @else
                <div id="agregarHistorial">
                    @include('docente_definitivo.historial_evaluacion')
                </div>
            @endif

            <div class="row">
                <div class="col-md-11"></div>
                <div class="form-group col-md-1 col-sm-1">
                    <a class="btn btn-block btn-primary add-element-evaluacion" {{$data->accion=='visualizar' ? 'disabled':''}}>
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>


    {{--DE MOMENTO NO SE INCLUYE ESTE APARTADO--}}
    {{--    @include('docente_definitivo.actividades_administrativas')--}}


    @if($data->accion=='modificar' ||$data->accion=='crear')
        <div class="box-footer">
            {!! Form::submit($data->accion=='modificar'? "Actualizar":"Guardar" ,
                  ['class' => 'btn btn-block btn-lg btn-primary',
                  $data->accion=='visualizar'?'disabled':''] ) !!}
        </div>
    @endif
    {!! Form::close()  !!}

@endsection

@section('particular_scripts')
    <script src="{!! asset('js/select2.full.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
    <script src="{!! asset('js/bootstrap-datepicker.es.js') !!}"></script>
    <script src="{!! asset('js/dgeti/ObtenerCamposDisciplina.js') !!}"></script>
    <script src="{!! asset('js/dgeti/ObtenerNumeroHoras.js') !!}"></script>
    <script src="{!! asset('js/add-elements.js') !!}"></script>
    <script>
        var selComponentes = $('#selComponentes');

        var academicos_original = $("#datos_academicos_row").clone(true, true);
        var historial_original = $("#historial_evaluacion_row").clone(true, true);
        var plaza_original = $("#plaza_row").clone(true, true);

        $(".select2").select2({});
        selComponentes.on('select2:select', function (evt) {
            console.log("select");
        });

        //Date picker
        $('.datepicker').datepicker({
            autoclose: true,
            format: "dd-mm-yyyy",
        });
    </script>
@endsection