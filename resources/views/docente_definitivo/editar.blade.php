@extends('docente_definitivo.docente_master')
@section('content')
    {{-- =============================================== --}}

    {{-- Content Wrapper. Contains page content --}}
    <div class="content-wrapper">
        {{-- Main content --}}
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <strong class="box-title">Nuevo Docente Definitivo</strong>
                </div>
                <div class="box-body">


                    {!! Form::open(['route' => 'docente_definitivo.store', 'class' => '', 'name'=>'form_docente_definitivo']) !!}
                    <div class="panel panel-primary">
                        <div class="panel-heading clearfix">
                            <i class="icon-calendar"></i>
                            <h3 class="panel-title">Datos personales</h3>
                        </div>

                        <div class="panel-body">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">CCT</label>
                                {!! Form::text('cct', $value = $data->cct,['class' => 'form-control', 'placeholder' => 'CCT','required', $data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">CURP</label>
                                {!! Form::text('curp', $value = $data->curp,['class' => 'form-control', 'placeholder' => 'Curp','required',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">RFC</label>
                                {!! Form::text('rfc', $value = $data->rfc,['class' => 'form-control', 'placeholder' => 'RFC','required',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Nombre</label>
                                {!! Form::text('nombre', $value = $data->nombre,['class' => 'form-control', 'placeholder' => 'Nombre','required',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">
                                    Primer Apellido
                                </label>
                                {!! Form::text('primer_apellido', $value = $data->primer_apellido,['class' => 'form-control', 'placeholder' => 'Primer Apellido','required',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">
                                    Segundo Apellido
                                </label>
                                {!! Form::text('segundo_apellido', $value = $data->segundo_apellido,['class' => 'form-control', 'placeholder' => 'Segundo Apellido','required',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">
                                    Correo electrónico
                                </label>
                                {!! Form::text('correo', $value = $data->correo,['class' => 'form-control', 'placeholder' => 'Correo electrónico','required',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">
                                    Teléfono celular
                                </label>
                                {!! Form::text('telefono_celular', $value = $data->telefono_celular,['class' => 'form-control', 'placeholder' => 'Teléfono celular','required',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">
                                    Teléfono fijo
                                </label>
                                {!! Form::text('telefono_domicilio', $value = $data->telefono_domicilio,['class' => 'form-control', 'placeholder' => 'Teléfono fijo','required',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputPassword1">
                                    Domicilio
                                </label>
                                {!! Form::text('domicilio', $value = $data->domicilio,['class' => 'form-control', 'placeholder' => 'Domicilio','required',$data->accion=='ver' ? 'disabled':'',])!!}
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
                                {!! Form::text('perfil_profesional', $value = $data->perfil_profesional,['class' => 'form-control', 'placeholder' => 'Perfil Profesional',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">
                                    Horas frente a grupo
                                </label>
                                {!! Form::text('horas_frente_grupo', $value = $data->horas_frente_grupo,['class' => 'form-control', 'placeholder' => 'Horas frente a grupo',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">
                                    Horas descarga académica
                                </label>
                                {!! Form::text('horas_descarga_academica', $value = $data->horas_descarga_academica,['class' => 'form-control', 'placeholder' => 'Horas descarga académica',$data->accion=='ver' ? 'disabled':'',])!!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">
                                    Horas administrativas
                                </label>
                                {!! Form::text('horas_administrativas', $value = $data->horas_administrativas,['class' => 'form-control', 'placeholder' => 'Horas administrativas',$data->accion=='ver' ? 'disabled':'',])!!}
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

                                        @foreach($data->disciplina_docente->disciplina as $disciplina)

                                            @foreach($disciplina->campo_disciplinar as $item)

                                                <option value="{{$componente_formacion->id}}"
                                                        {{$item->id==$componente_formacion->id ? 'selected':''}}>

                                                    {{$componente_formacion->componente_formacion}}
                                                </option>
                                            @endforeach

                                        @endforeach
                                    @endforeach


                                </select>

                            </div>
                            <div class="form-group col-md-12">
                                <label>Campo disciplinar</label>
                                <select id="selCampos" class="form-control select2"
                                        {{$data->accion=='ver' ? 'disabled':''}}
                                        multiple="multiple">

                                    @foreach($data->dic_campos_disciplinares as $campo_diciplinar)
                                        @foreach($data->disciplina_docente->disciplina as $disciplina)
                                            @foreach($disciplina->campo_disciplinar as $campo)
                                                <option
                                                        value="{{$campo_diciplinar->id}}"
                                                        {{$campo_diciplinar->id==$campo->id?'selected':''}}>

                                                    {{$campo_diciplinar->campo_disciplinar}}
                                                </option>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group col-md-12">
                                <label>Disciplina</label>
                                <select id="selDisciplinas" class="form-control select2"
                                        {{$data->accion=='ver' ? 'disabled':''}}
                                        multiple="multiple">
                                    @foreach($data->dic_disciplina as $disciplina)
                                        @foreach($data->disciplina_docente->disciplina as $_disciplina)
                                            <option
                                                    value="{{$disciplina->id}}"
                                                    {{$disciplina->id==$_disciplina->id?'selected':''}}>
                                                {{$disciplina->disciplina}}
                                            </option>
                                        @endforeach
                                    @endforeach


                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Tipo de plaza</label>
                                {!! Form::text('tipo_plaza', $value = $data->tipo_plaza_docente->tipo_plaza_horas,['class' => 'form-control', 'placeholder' => 'Tipo Plaza',])!!}
                            </div>
                            <div class="form-group col-md-12">
                                <label>Tipo de nombramiento</label>
                                <select class="form-control select2"
                                        {{$data->accion=='ver' ? 'disabled':''}}
                                        multiple="multiple">
                                    @foreach($data->dic_tipo_nombramiento as $tipo)
                                        @foreach($data->tipo_plaza_docente->tipo_nombramiento as $nombramiento)
                                            <option value="{{$tipo->id}}"
                                                    {{$tipo->id==$nombramiento->id?'selected':''}}>
                                                {{$tipo->tipo_nombramiento}}
                                            </option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Resultados</label>
                                <select class="form-control select2"
                                        {{$data->accion=='ver' ? 'disabled':''}}
                                        multiple="multiple">
                                    @foreach($data->dic_resultados as $resultado)
                                        @foreach($data->historial_evaluacion_docente->evaluacion as $evaluacion)
                                            <option
                                                    value="{{$resultado->id}}"
                                                    {{$resultado->id == $evaluacion->resultado_evaluacion->id ? 'selected':''}}>
                                                {{$resultado->tipo_resultado}}
                                            </option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Actividad administrativa</label>
                                <select class="form-control select2"
                                        {{$data->accion=='ver' ? 'disabled':''}}
                                        multiple="multiple">
                                    @foreach($data->dic_actividad_administrativas as $actividad)
                                        @foreach($data->docente_definitivo->actividad_admin_docente_definitivo->actividadadmin as $actividadadmin)
                                        <option
                                                {{$actividadadmin->id == $actividad->id ? 'selected':''}}
                                                value="{{$actividad->id}}">
                                            {{$actividad->actividad}}
                                        </option>
                                    @endforeach
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{--{!! Form::submit(--}}
                {{--$data ? "Guardar" : "Agregar",--}}
                {{--['class' => 'btn btn-block btn-lg btn-primary'] ) !!}--}}
                {{--{!! Form::close()  !!}--}}
                <div class="box-footer">
                    {{--<button type="submit" class="btn btn-primary">Submit--}}
                    {{--</button>--}}
                    <a class="btn btn-block btn-lg btn-primary" href="/v_building">
                        <i class="fa fa-save"></i>
                        Guardar
                    </a>
                </div>

            </div>
        </section>

        {{-- /.content --}}
    </div>
@endsection