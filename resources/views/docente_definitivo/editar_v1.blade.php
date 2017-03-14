<!DOCTYPE html>
<html>
<head>
    <script>
        function removeTrailingSlashUrl() {
            var fullUrl = window.location.href;
            if (fullUrl.substr(-1) === '/') {
                fullUrl = fullUrl.substr(0, fullUrl.length - 1);
                window.location = fullUrl;
            }
        }
        removeTrailingSlashUrl();
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Docente definitivo</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/select2.min.css">
    <link rel="stylesheet" href="/css/AdminLTE.css">
    <link rel="stylesheet" href="/css/skin-blue.css">
    <link rel="stylesheet" href="/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/css/datepicker3.css">
    <link rel="stylesheet" href="/css/my-dashboard.css">
</head>
{{-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT --}}
{{-- the fixed layout is not compatible with sidebar-mini --}}
<body class="hold-transition skin-blue fixed sidebar-mini">
{{-- Site wrapper --}}
<div class="wrapper">

    <header class="main-header">
        {{-- Logo --}}
        <a href="/" class="logo">
            {{-- mini logo for sidebar mini 50x50 pixels --}}
            <span class="logo-mini"><strong>D</strong></span>
            {{-- logo for regular state and mobile devices --}}
            <span class="logo-lg"><strong>DGETI</strong></span>
        </a>
        {{-- Header Navbar: style can be found in header.less --}}
        <nav class="navbar navbar-static-top">
            {{-- Sidebar toggle button--}}
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas"
               role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    {{-- User Account: style can be found in dropdown.less --}}
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown">
                            <img src="/img/user.jpg"
                                 class="user-image" alt="User Image">
                            <span class="hidden-xs">CETis 114</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="/img/user.jpg" class="img-circle"
                                     alt="User Image">
                                <p>
                                    <strong>CETis 114</strong>
                                    <span>Jerez de García Salinas</span>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-block
                                    btn-success">
                                        <i class="fa fa-user"></i>
                                        Perfil
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="/logout"
                                       class="btn btn-block btn-danger">
                                        <i class="fa fa-sign-out"></i>
                                        Salir
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    {{-- =============================================== --}}

    {{-- Left side column. contains the sidebar --}}
    <aside class="main-sidebar">
        {{-- sidebar: style can be found in sidebar.less --}}
        <section class="sidebar">
            {{-- sidebar menu: : style can be found in sidebar.less --}}
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="/v_building">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes Definitivos</span>
                    </a>
                </li>
                <li>
                    <a href="/v_building">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes Idóneos</span>
                    </a>
                </li>
                <li>
                    <a href="/v_building">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes Tutores</span>
                    </a>
                </li>
                <li>
                    <a href="/v_building">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes ATP</span>
                    </a>
                </li>
                <li>
                    <a href="/v_building">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes Evaluadores</span>
                    </a>
                </li>
            </ul>
        </section>
        {{-- /.sidebar --}}
    </aside>

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
    {{-- /.content-wrapper --}}
    <footer class="main-footer">
        <strong>Copyright &copy; 2017 DGETI.</strong>
        Todos los derechos reservados.
    </footer>
</div>
{{-- ./wrapper --}}

{{-- jQuery 2.2.3 --}}
<script src="/js/jquery.js"></script>
{{-- Bootstrap 3.3.6 --}}
<script src="/js/bootstrap.js"></script>
<script src="/js/select2.full.min.js"></script>
{{-- DataTables --}}
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap.min.js"></script>
{{-- SlimScroll --}}
<script src="/js/jquery.slimscroll.min.js"></script>
{{-- FastClick --}}
<script src="/js/fastclick.min.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
{{-- AdminLTE App --}}
<script src="/js/app.js"></script>
{{-- AdminLTE for demo purposes --}}
<script src="/js/demo.js"></script>

<script src="/js/dgeti/CargaDisciplinas.js"></script>
<script>
    //    //Date picker
    //    $('#dateFecha').datepicker({
    //        autoclose: true
    //    });
    //
    //    //Date picker
    //    $('#dateVigencia').datepicker({
    //        autoclose: true
    //    });
</script>
</body>
</html>