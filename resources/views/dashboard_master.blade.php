<!DOCTYPE html>
<html>
<head>
    <script src="{!! asset('js/dgeti/RemoveTrailingSlash.js') !!}"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('font-awesome/css/font-awesome.min.css') !!}"
          rel="stylesheet">
    <link href="{!! asset('css/ionicons.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('css/my-dashboard.css') !!}" rel="stylesheet">
    @section('particular_styles')
        {{-- Aquí se colocan los estilos específicos que el hijo necesita --}}
    @show
    {{-- AdminLTE.css y skin-blue.css se colocan al final de las hojas de
    estilo para que no los vayan a sobreescribir --}}
    <link href="{!! asset('css/AdminLTE.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/skin-blue.css') !!}" rel="stylesheet">
</head>

{{-- the fixed layout is not compatible with sidebar-mini --}}
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="/" class="logo">
            <span class="logo-mini"><strong>D</strong></span>
            <span class="logo-lg"><strong>DGETI</strong></span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas"
               role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown">
                            <img src="{!! asset('img/user.jpg') !!}"
                                 class="user-image" alt="User Image">
                            <span class="hidden-xs">CETis 114</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="{!! asset('img/user.jpg') !!}"
                                     class="img-circle"
                                     alt="User Image">
                                <p>
                                    <strong>CETis 114</strong>
                                    <span>Jerez de García Salinas</span>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-block
                                    btn-success">
                                        <i class="fa fa-user"></i>
                                        Perfil
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="logout"
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
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                @section('sidebar_options')
                @show
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <strong class="box-title">@yield('box_title')</strong>
                </div>
                <div class="box-body">
                    @section('box_body')
                    @show
                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2017 DGETI.</strong> Todos los derechos
        reservados.
    </footer>
</div>
</body>

<script src="{!! asset('js/jquery.js') !!}"></script>
<script src="{!! asset('js/bootstrap.js') !!}"></script>
<script src="{!! asset('js/jquery.slimscroll.min.js') !!}"></script>
<script src="{!! asset('js/fastclick.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
<script src="{!! asset('js/app.js') !!}"></script>
<script src="{!! asset('js/demo.js') !!}"></script>

@section('particular_scripts')
    {{-- Aquí se colocan los scripts específicos que el hijo necesita --}}
@show
</html>