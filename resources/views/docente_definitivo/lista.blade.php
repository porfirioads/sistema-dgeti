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
    <title>Docentes definitivos</title>
    {{-- Tell the browser to be responsive to screen width --}}
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/AdminLTE.css">
    <link rel="stylesheet" href="css/skin-blue.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.css">
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
                            <img src="img/user.jpg"
                                 class="user-image" alt="User Image">
                            <span class="hidden-xs">CETis 114</span>
                        </a>
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
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes Definitivos</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes Idóneos</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes Tutores</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle-o"></i>
                        <span>Docentes ATP</span>
                    </a>
                </li>
                <li>
                    <a href="#">
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
                    <strong class="box-title">Docentes definitivos</strong>
                </div>
                {{-- /.box-header --}}
                <div class="box-body">
                    <a class="btn btn-block btn-warning">
                        <i class="fa fa-plus"></i>
                    </a>
                    <br/>
                    <table id="example1"
                           class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>RFC</th>
                            <th>Nombre (s)</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>DISP960720</td>
                            <td>Porfirio Ángel</td>
                            <td>Díaz</td>
                            <td>Sánchez</td>
                            <td class="row">
                                <div class="col-md-4">
                                    <a class="btn btn-block btn-success">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-block btn-primary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-block btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>DISC911026</td>
                            <td>Claudio Alejandro</td>
                            <td>Díaz</td>
                            <td>Sánchez</td>
                            <td class="row">
                                <div class="col-md-4">
                                    <a class="btn btn-block btn-success">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-block btn-primary">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-block btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                {{-- /.box-body --}}
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
{{-- DataTables --}}
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
{{-- SlimScroll --}}
<script src="js/jquery.slimscroll.min.js"></script>
{{-- FastClick --}}
<script src="js/fastclick.min.js"></script>
{{-- AdminLTE App --}}
<script src="js/app.js"></script>
{{-- AdminLTE for demo purposes --}}
<script src="js/demo.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
</body>
</html>
