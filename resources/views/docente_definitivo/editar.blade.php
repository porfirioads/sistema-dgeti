@extends('dashboard_master')

@section('title', 'Docentes definitivo')

@section('particular_styles')
    <link href="{!! asset('css/select2.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/datepicker3.css') !!}" rel="stylesheet">
@endsection

@section('sidebar_options')
    @include('docente_definitivo.sidebar_items')
@endsection

@section('box_title', 'Docente definitivo')

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
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
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
                'placeholder' => 'Teléfono fijo','required',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-12">
                <label for="exampleInputPassword1">
                    Domicilio
                </label>
                {!! Form::text('domicilio', $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->domicilio:null,
                ['class' => 'form-control', 'placeholder' => 'Domicilio',
                'required',$data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Datos laborales</h3>
        </div>

        <div class="panel-body">
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="exampleInputPassword1">
                    Perfil Profesional
                </label>
                {!! Form::text('perfil_profesional',
                $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->perfil_profesional:null,['class' => 'form-control',
                'placeholder' => 'Perfil Profesional',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                <label for="exampleInputPassword1">
                    Horas frente a grupo
                </label>
                {!! Form::text('horas_frente_grupo',
                $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->horas_frente_grupo:null,['class' => 'form-control',
                'placeholder' => 'Horas frente a grupo',
                $data->accion=='visualizar' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                <label for="exampleInputPassword1">
                    Horas descarga académica
                </label>
                {!! Form::text('horas_descarga_academica',
                $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? $data->horas_descarga_academica:null,
                ['class' => 'form-control',
                'placeholder' => 'Horas descarga académica',
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

    {{--//////////////////////////////////////Datos académicos/////////--}}
    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Datos académicos</h3>
        </div>
        <div class="panel-body">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label>Disciplina</label>
                <select id="selDisciplinas"
                        name="academico_disciplina[]"
                        class="form-control select2"
                        {{$data->accion=='visualizar' ? 'disabled':''}}
                        multiple="multiple">
                    @foreach($data->dic_disciplina as $disciplina)
                        <option value="{{$disciplina->id}}"
                        @if( $data->accion=='visualizar' ||  $data->accion=='modificar' )
                            @foreach($data->res_disciplina as $_disciplina)
                                {{$disciplina->id==$_disciplina->disciplina_id?'selected':''}}
                                    @endforeach
                                @endif>
                            {{$disciplina->disciplina}}
                        </option>

                    @endforeach
                </select>
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

            <div class="row">
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

            @if( $data->accion=='visualizar')
                @foreach($data->res_plaza as $plaza)
                    @include('docente_definitivo.plazas')
                @endforeach
            @else
                @include('docente_definitivo.plazas')
            @endif


            <div class="row">
                <div class="col-md-11"></div>
                <div class="form-group col-md-1 col-sm-1">
                    <a class="btn btn-block btn-primary add-element" {{$data->accion=='visualizar' ? 'disabled':''}}>
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

            <div class="row">
                <div class="form-group col-lg-3">
                    <label>Fecha evaluación</label>
                </div>
                <div class="form-group col-lg-3">
                    <label>Fecha vigencia</label>
                </div>
                <div class="form-group col-lg-2">
                    <label>Resultados</label>
                </div>
                <div class="form-group col-lg-3">
                    <label>Tipo Evaluación</label>
                </div>
                <div class="form-group col-lg-1">
                    <label>Acciones</label>
                </div>
            </div>


            @if( $data->accion=='visualizar' )
                @foreach($data->res_evaluacion as $evaluacion)
                    @include('docente_definitivo.historial_evaluacion')
                @endforeach
            @else
                <div class="row elemento">
                    <div class="form-group col-lg-3">
                        <select class="form-control select2"
                                name="evaluacion_tipo[]"
                                {{$data->accion=='visualizar' ? 'disabled':''}}>
                            @foreach($data->dic_tipo_resultados as $resultado)
                                <option value="{{$resultado->id}}"
                                @if( $data->accion=='visualizar' )
                                    @foreach($data->historial_evaluacion_docente->evaluacion as $evaluacion)
                                        {{$resultado->id == $evaluacion->resultado_evaluacion->id ? 'selected':''}}
                                            @endforeach
                                        @endif>
                                    {{$resultado->tipo_evaluacion}}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group col-lg-2">
                        <select class="form-control select2"
                                name="evaluacion_resultado[]"
                                {{$data->accion=='visualizar' ? 'disabled':''}}>
                            @foreach($data->dic_resultados as $resultado)
                                <option value="{{$resultado->id}}"
                                @if( $data->accion=='visualizar' )
                                    {{$resultado->id == $evaluacion->resultado_evaluacion_id ? 'selected':''}}
                                        @endif>
                                    {{$resultado->tipo_resultado}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-lg-3">

                        {!! Form::text('evaluacion_vigencia[]', $value = $data->accion=='visualizar' ? $evaluacion->vigencia_evaluacion:null,
                        ['class' => 'form-control datepicker', 'placeholder' => 'Fecha vigencia',
                        'required',$data->accion=='visualizar' ? 'disabled':''])!!}
                    </div>

                    <div class="form-group col-lg-3">
                        {!! Form::text('evaluacion_inicio[]', $value = $data->accion=='visualizar' ? $evaluacion->fecha_evaluacion:null,
                        ['class' => 'form-control datepicker', 'placeholder' => 'Fecha evaluación',
                        'required',$data->accion=='visualizar' ? 'disabled':''])!!}
                    </div>

                    <div class="form-group col-lg-1">
                        <a class="btn btn-block btn-primary btn-danger remove" {{$data->accion=='visualizar' ? 'disabled':''}}>
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                    @include('docente_definitivo.historial_evaluacion')
                <div class="division"></div>

            @endif
            <div class="row">
                <div class="col-md-11"></div>
                <div class="form-group col-md-1 col-sm-1">
                    <a class="btn btn-block btn-primary add-element" {{$data->accion=='visualizar' ? 'disabled':''}}>
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>



    {{--//////////////////////////////////////ACTIVIADES ADMINISTRATIVAS/////////--}}
    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Actividades Administrativas</h3>
        </div>
        <div class="panel-body">
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label>Actividad administrativa</label>
                <select class="form-control select2"
                        name="actividades_administrativas[]"
                        {{$data->accion=='visualizar' ? 'disabled':''}}
                        multiple="multiple">
                    @foreach($data->dic_actividad_administrativas as $actividad)
                        <option
                                @if( $data->accion=='visualizar' ||  $data->accion=='modificar' )
                                @foreach($data->res_docente_definitivo_actividad as $actividadadmin)

                                {{$actividadadmin->actividad_admin_id == $actividad->id ? 'selected':''}}

                                @endforeach
                                @endif
                                value="{{$actividad->id}}">
                            {{$actividad->actividad}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="box-footer">
        {!! Form::submit($data->accion=='visualizar'? "Guardar" : "Agregar",
              ['class' => 'btn btn-block btn-lg btn-primary', $data->accion=='visualizar'?'disabled':''] ) !!}
    </div>

    {!! Form::close()  !!}

@endsection

@section('particular_scripts')
    <script src="{!! asset('js/select2.full.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
    <script src="{!! asset('js/bootstrap-datepicker.es.js') !!}"></script>
    <script src="{!! asset('js/add-elements.js') !!}"></script>
    <script>
        var selComponentes = $('#selComponentes');

        $(".select2").select2({});
        selComponentes.on('select2:select', function (evt) {
            console.log("select");
        });

        //Date picker
        $('.datepicker').datepicker({
            autoclose: true
        });
    </script>
@endsection