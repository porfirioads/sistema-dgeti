@extends('dashboard_master')

@section('title', 'Docentes definitivo')

@section('particular_styles')
    <link href="{!! asset('css/select2.min.css') !!}" rel="stylesheet">
@endsection

@section('sidebar_options')
    @include('docente_definitivo.sidebar_items')
@endsection

@section('box_title', 'Docente definitivo')

@section('box_body')
    {!! Form::open(['route' => 'docente_definitivo.store', 'class' => '',
    'name'=>'form_docente_definitivo']) !!}
    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Datos personales</h3>
        </div>
        <div class="panel-body">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">CCT</label>
                {!! Form::text('cct', $value = $data->accion=='ver' ? $data->cct:null, ['class' =>
                'form-control', 'placeholder' => 'CCT','required',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">CURP</label>
                {!! Form::text('curp', $value = $data->accion=='ver' ? $data->curp:null, ['class' =>
                'form-control', 'placeholder' => 'Curp','required',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">RFC</label>
                {!! Form::text('rfc', $value = $data->accion=='ver' ? $data->rfc:null, ['class' =>
                'form-control', 'placeholder' => 'RFC','required',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre</label>
                {!! Form::text('nombre', $value = $data->accion=='ver' ? $data->nombre:null, ['class' =>
                'form-control', 'placeholder' => 'Nombre','required',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Primer Apellido
                </label>
                {!! Form::text('primer_apellido',
                $value = $data->accion=='ver' ? $data->primer_apellido:null,
                ['class' => 'form-control',
                'placeholder' => 'Primer Apellido','required',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Segundo Apellido
                </label>
                {!! Form::text('segundo_apellido',
                $value = $data->accion=='ver' ? $data->segundo_apellido:null,['class' => 'form-control',
                'placeholder' => 'Segundo Apellido','required',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Correo electrónico
                </label>
                {!! Form::text('correo', $value = $data->accion=='ver' ? $data->correo:null,['class' =>
                'form-control', 'placeholder' => 'Correo electrónico',
                'required',$data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Teléfono celular
                </label>
                {!! Form::text('telefono_celular',
                $value = $data->accion=='ver' ? $data->telefono_celular:null,['class' => 'form-control',
                'placeholder' => 'Teléfono celular','required',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Teléfono fijo
                </label>
                {!! Form::text('telefono_domicilio',
                $value = $data->accion=='ver' ? $data->telefono_domicilio:null,['class' => 'form-control',
                'placeholder' => 'Teléfono fijo','required',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-12">
                <label for="exampleInputPassword1">
                    Domicilio
                </label>
                {!! Form::text('domicilio', $value = $data->accion=='ver' ? $data->domicilio:null,
                ['class' => 'form-control', 'placeholder' => 'Domicilio',
                'required',$data->accion=='ver' ? 'disabled':'',])!!}
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Datos laborales</h3>
        </div>

        <div class="panel-body">
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Perfil Profesional
                </label>
                {!! Form::text('perfil_profesional',
                $value = $data->accion=='ver' ? $data->perfil_profesional:null,['class' => 'form-control',
                'placeholder' => 'Perfil Profesional',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Horas frente a grupo
                </label>
                {!! Form::text('horas_frente_grupo',
                $value = $data->accion=='ver' ? $data->horas_frente_grupo:null,['class' => 'form-control',
                'placeholder' => 'Horas frente a grupo',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Horas descarga académica
                </label>
                {!! Form::text('horas_descarga_academica',
                $value = $data->accion=='ver' ? $data->horas_descarga_academica:null,
                ['class' => 'form-control',
                'placeholder' => 'Horas descarga académica',
                $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputPassword1">
                    Horas administrativas
                </label>
                {!! Form::text('horas_administrativas',
                 $value = $data->accion=='ver' ? $data->horas_administrativas:null,
                 ['class' => 'form-control',
                 'placeholder' => 'Horas administrativas',
                 $data->accion=='ver' ? 'disabled':'',])!!}
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Datos académicos</h3>
        </div>
        <div class="panel-body">
            <div class="form-group col-md-12">
                <label>Componente formación</label>
                <select id="selComponentes"
                        name="componente_formacion"
                        class="form-control select2"
                        {{$data->accion=='ver' ? 'disabled':''}}
                        multiple="multiple">
                    @foreach($data->dic_componente_formacion as $componente_formacion)
                        <option value="{{$componente_formacion->id}}">
                            {{$componente_formacion->componente_formacion}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-12">
                <label>Campo disciplinar</label>
                <select id="selCampos" class="form-control select2"
                        {{$data->accion=='ver' ? 'disabled':''}}
                        multiple="multiple">
                    @foreach($data->dic_campos_disciplinares as $campo_diciplinar)
                        <option value="{{$campo_diciplinar->id}}">
                            {{$campo_diciplinar->campo_disciplinar}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-12">
                <label>Disciplina</label>
                <select id="selDisciplinas" class="form-control select2"
                        {{$data->accion=='ver' ? 'disabled':''}}
                        multiple="multiple">
                    @foreach($data->dic_disciplina as $disciplina)
                            <option value="{{$disciplina->id}}">
                                {{$disciplina->disciplina}}
                            </option>

                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-12">
                <label>Tipo de plaza</label>
                {!! Form::text('tipo_plaza',
                $value = $data->accion=='ver' ? $data->cct:null,
                ['class' => 'form-control', 'placeholder' => 'Tipo Plaza',$data->accion=='ver' ? 'disabled':''])!!}
            </div>
            <div class="form-group col-md-12">
                <label>Tipo de nombramiento</label>
                <select class="form-control select2"
                        {{$data->accion=='ver' ? 'disabled':''}}
                        multiple="multiple">
                    @foreach($data->dic_tipo_nombramiento as $tipo)
                            <option value="{{$tipo->id}}">
                                {{$tipo->tipo_nombramiento}}
                            </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-12">
                <label>Resultados</label>
                <select class="form-control select2"
                        {{$data->accion=='ver' ? 'disabled':''}}
                        multiple="multiple">
                    @foreach($data->dic_resultados as $resultado)
                            <option value="{{$resultado->id}}">
                                {{$resultado->tipo_resultado}}
                            </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-12">
                <label>Actividad administrativa</label>
                <select class="form-control select2"
                        {{$data->accion=='ver' ? 'disabled':''}}
                        multiple="multiple">
                    @foreach($data->dic_actividad_administrativas as $actividad)
                            <option
                                    value="{{$actividad->id}}">
                                {{$actividad->actividad}}
                            </option>

                    @endforeach
                </select>
            </div>
        </div>
    </div>
    {{--{!! Form::submit(--}}
    {{--$data ? "Guardar" : "Agregar",--}}
    {{--['class' => 'btn btn-block btn-lg btn-primary'] ) !!}--}}
    {!! Form::close()  !!}
    <div class="box-footer">
        {{--<button type="submit" class="btn btn-primary">Submit--}}
        {{--</button>--}}
        <a class="btn btn-block btn-lg btn-primary" href="v_building">
            <i class="fa fa-save"></i>
            Guardar
        </a>
    </div>
@endsection

@section('particular_scripts')
    <script src="{!! asset('js/select2.full.min.js') !!}"></script>
    <script>
        $(".select2").select2({});
        selComponentes.on('select2:select', function (evt) {
            console.log("select");
        });
    </script>
@endsection