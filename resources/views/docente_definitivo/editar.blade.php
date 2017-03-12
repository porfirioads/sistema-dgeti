<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Docente definitivo</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/AdminLTE.css">
    <link rel="stylesheet" href="css/skin-blue.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="css/datepicker3.css">
    <link rel="stylesheet" href="css/my-dashboard.css">
</head>
{{-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT --}}
{{-- the fixed layout is not compatible with sidebar-mini --}}
<body class="hold-transition skin-blue fixed sidebar-mini">
{{-- Site wrapper --}}
<div class="wrapper">

    <header class="main-header">
        {{-- Logo --}}
        <a href="../../index2.html" class="logo">
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
                            <img src="img/user.jpg"
                                 class="user-image" alt="User Image">
                            <span class="hidden-xs">CETis 114</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="img/user.jpg" class="img-circle"
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
                                    <a href="/v_login"
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
                    <a href="../widgets.html">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes Definitivos</span>
                    </a>
                </li>
                <li>
                    <a href="../widgets.html">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes Idóneos</span>
                    </a>
                </li>
                <li>
                    <a href="../widgets.html">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes Tutores</span>
                    </a>
                </li>
                <li>
                    <a href="../widgets.html">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes ATP</span>
                    </a>
                </li>
                <li>
                    <a href="../widgets.html">
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
                <form role="form">
                    <div class="box-body">
                        <div class="panel panel-primary">
                            <div class="panel-heading clearfix">
                                <i class="icon-calendar"></i>
                                <h3 class="panel-title">Datos personales</h3>
                            </div>

                            <div class="panel-body">
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">CCT</label>
                                    <input type="text" class="form-control"
                                           id="exampleInputEmail1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">CURP</label>
                                    <input type="text" class="form-control"
                                           id="exampleInputEmail1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">RFC</label>
                                    <input type="text" class="form-control"
                                           id="exampleInputEmail1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control"
                                           id="exampleInputEmail1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">
                                        Primer Apellido
                                    </label>
                                    <input type="text" class="form-control"
                                           id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">
                                        Segundo Apellido
                                    </label>
                                    <input type="text" class="form-control"
                                           id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">
                                        Correo electrónico
                                    </label>
                                    <input type="email" class="form-control"
                                           id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">
                                        Teléfono celular
                                    </label>
                                    <input type="tel" class="form-control"
                                           id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">
                                        Teléfono fijo
                                    </label>
                                    <input type="tel" class="form-control"
                                           id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1">
                                        Domicilio
                                    </label>
                                    <input type="text" class="form-control"
                                           id="exampleInputPassword1">
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
                                    <input type="text" class="form-control"
                                           id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">
                                        Horas frente a grupo
                                    </label>
                                    <input type="number" class="form-control"
                                           id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">
                                        Horas descarga académica
                                    </label>
                                    <input type="number" class="form-control"
                                           id="exampleInputPassword1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">
                                        Horas administrativas
                                    </label>
                                    <input type="number" class="form-control"
                                           id="exampleInputPassword1">
                                </div>
                                {{--<div class="form-group col-md-4">--}}
                                {{--<label>Fecha</label>--}}
                                {{--<div class="input-group date">--}}
                                {{--<div class="input-group-addon">--}}
                                {{--<i class="fa fa-calendar"></i>--}}
                                {{--</div>--}}
                                {{--<input type="text"--}}
                                {{--class="form-control"--}}
                                {{--id="dateFecha">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-4">--}}
                                {{--<label>Vigencia</label>--}}
                                {{--<div class="input-group date">--}}
                                {{--<div class="input-group-addon">--}}
                                {{--<i class="fa fa-calendar"></i>--}}
                                {{--</div>--}}
                                {{--<input type="text"--}}
                                {{--class="form-control"--}}
                                {{--id="dateVigencia">--}}
                                {{--</div>--}}
                                {{--<!-- /.input group -->--}}
                                {{--</div>--}}
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
                                            class="form-control select2"
                                            multiple="multiple">
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Campo disciplinar</label>
                                    <select class="form-control select2"
                                            multiple="multiple">
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Disciplina</label>
                                    <select class="form-control select2"
                                            multiple="multiple">
                                        <option>
                                            Básico
                                        </option>
                                        <option>
                                            Propedéutico
                                        </option>
                                        <option>
                                            Profesional
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Tipo de plaza</label>
                                    <select class="form-control select2"
                                            multiple="multiple">
                                        <option>
                                            Básico
                                        </option>
                                        <option>
                                            Propedéutico
                                        </option>
                                        <option>
                                            Profesional
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Tipo de nombramiento</label>
                                    <select class="form-control select2"
                                            multiple="multiple">
                                        <option>
                                            Básico
                                        </option>
                                        <option>
                                            Propedéutico
                                        </option>
                                        <option>
                                            Profesional
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Resultados</label>
                                    <select class="form-control select2"
                                            multiple="multiple">
                                        <option>
                                            Básico
                                        </option>
                                        <option>
                                            Propedéutico
                                        </option>
                                        <option>
                                            Profesional
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Actividad administrativa</label>
                                    <select class="form-control select2"
                                            multiple="multiple">
                                        <option>
                                            Básico
                                        </option>
                                        <option>
                                            Propedéutico
                                        </option>
                                        <option>
                                            Profesional
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        {{--<button type="submit" class="btn btn-primary">Submit--}}
                        {{--</button>--}}
                        <a class="btn btn-block btn-lg btn-primary">
                            <i class="fa fa-save"></i>
                            Guardar
                        </a>
                    </div>
                </form>
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
<script src="js/jquery.js"></script>
{{-- Bootstrap 3.3.6 --}}
<script src="js/bootstrap.js"></script>
<script src="js/select2.full.min.js"></script>
{{-- DataTables --}}
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
{{-- SlimScroll --}}
<script src="js/jquery.slimscroll.min.js"></script>
{{-- FastClick --}}
<script src="js/fastclick.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
{{-- AdminLTE App --}}
<script src="js/app.js"></script>
{{-- AdminLTE for demo purposes --}}
<script src="js/demo.js"></script>

<script src="js/dgeti/CargaDisciplinas.js"></script>
<script>
    //Date picker
    $('#dateFecha').datepicker({
        autoclose: true
    });

    //Date picker
    $('#dateVigencia').datepicker({
        autoclose: true
    });


</script>
</body>
</html>