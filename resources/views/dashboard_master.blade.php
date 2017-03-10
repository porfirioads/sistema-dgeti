<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPD</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/skin-blue.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><strong>D</strong></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><strong>DGETI</strong></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas"
               role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
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

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li>
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
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Docentes definitivos</h3>
                </div>
                <!-- /.box-header -->
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
                        {{--<tbody>--}}
                        {{--<tr>--}}
                        {{--<td>Trident</td>--}}
                        {{--<td>Internet--}}
                        {{--Explorer 4.0--}}
                        {{--</td>--}}
                        {{--<td>Win 95+</td>--}}
                        {{--<td> 4</td>--}}
                        {{--<td>X</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Trident</td>--}}
                        {{--<td>Internet--}}
                        {{--Explorer 5.0--}}
                        {{--</td>--}}
                        {{--<td>Win 95+</td>--}}
                        {{--<td>5</td>--}}
                        {{--<td>C</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Trident</td>--}}
                        {{--<td>Internet--}}
                        {{--Explorer 5.5--}}
                        {{--</td>--}}
                        {{--<td>Win 95+</td>--}}
                        {{--<td>5.5</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Trident</td>--}}
                        {{--<td>Internet--}}
                        {{--Explorer 6--}}
                        {{--</td>--}}
                        {{--<td>Win 98+</td>--}}
                        {{--<td>6</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Trident</td>--}}
                        {{--<td>Internet Explorer 7</td>--}}
                        {{--<td>Win XP SP2+</td>--}}
                        {{--<td>7</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Trident</td>--}}
                        {{--<td>AOL browser (AOL desktop)</td>--}}
                        {{--<td>Win XP</td>--}}
                        {{--<td>6</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Firefox 1.0</td>--}}
                        {{--<td>Win 98+ / OSX.2+</td>--}}
                        {{--<td>1.7</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Firefox 1.5</td>--}}
                        {{--<td>Win 98+ / OSX.2+</td>--}}
                        {{--<td>1.8</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Firefox 2.0</td>--}}
                        {{--<td>Win 98+ / OSX.2+</td>--}}
                        {{--<td>1.8</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Firefox 3.0</td>--}}
                        {{--<td>Win 2k+ / OSX.3+</td>--}}
                        {{--<td>1.9</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Camino 1.0</td>--}}
                        {{--<td>OSX.2+</td>--}}
                        {{--<td>1.8</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Camino 1.5</td>--}}
                        {{--<td>OSX.3+</td>--}}
                        {{--<td>1.8</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Netscape 7.2</td>--}}
                        {{--<td>Win 95+ / Mac OS 8.6-9.2</td>--}}
                        {{--<td>1.7</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Netscape Browser 8</td>--}}
                        {{--<td>Win 98SE+</td>--}}
                        {{--<td>1.7</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Netscape Navigator 9</td>--}}
                        {{--<td>Win 98+ / OSX.2+</td>--}}
                        {{--<td>1.8</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Mozilla 1.0</td>--}}
                        {{--<td>Win 95+ / OSX.1+</td>--}}
                        {{--<td>1</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Mozilla 1.1</td>--}}
                        {{--<td>Win 95+ / OSX.1+</td>--}}
                        {{--<td>1.1</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Mozilla 1.2</td>--}}
                        {{--<td>Win 95+ / OSX.1+</td>--}}
                        {{--<td>1.2</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Mozilla 1.3</td>--}}
                        {{--<td>Win 95+ / OSX.1+</td>--}}
                        {{--<td>1.3</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Mozilla 1.4</td>--}}
                        {{--<td>Win 95+ / OSX.1+</td>--}}
                        {{--<td>1.4</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Mozilla 1.5</td>--}}
                        {{--<td>Win 95+ / OSX.1+</td>--}}
                        {{--<td>1.5</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Mozilla 1.6</td>--}}
                        {{--<td>Win 95+ / OSX.1+</td>--}}
                        {{--<td>1.6</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Mozilla 1.7</td>--}}
                        {{--<td>Win 98+ / OSX.1+</td>--}}
                        {{--<td>1.7</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Mozilla 1.8</td>--}}
                        {{--<td>Win 98+ / OSX.1+</td>--}}
                        {{--<td>1.8</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Seamonkey 1.1</td>--}}
                        {{--<td>Win 98+ / OSX.2+</td>--}}
                        {{--<td>1.8</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Gecko</td>--}}
                        {{--<td>Epiphany 2.20</td>--}}
                        {{--<td>Gnome</td>--}}
                        {{--<td>1.8</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Webkit</td>--}}
                        {{--<td>Safari 1.2</td>--}}
                        {{--<td>OSX.3</td>--}}
                        {{--<td>125.5</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Webkit</td>--}}
                        {{--<td>Safari 1.3</td>--}}
                        {{--<td>OSX.3</td>--}}
                        {{--<td>312.8</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Webkit</td>--}}
                        {{--<td>Safari 2.0</td>--}}
                        {{--<td>OSX.4+</td>--}}
                        {{--<td>419.3</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Webkit</td>--}}
                        {{--<td>Safari 3.0</td>--}}
                        {{--<td>OSX.4+</td>--}}
                        {{--<td>522.1</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Webkit</td>--}}
                        {{--<td>OmniWeb 5.5</td>--}}
                        {{--<td>OSX.4+</td>--}}
                        {{--<td>420</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Webkit</td>--}}
                        {{--<td>iPod Touch / iPhone</td>--}}
                        {{--<td>iPod</td>--}}
                        {{--<td>420.1</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Webkit</td>--}}
                        {{--<td>S60</td>--}}
                        {{--<td>S60</td>--}}
                        {{--<td>413</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Presto</td>--}}
                        {{--<td>Opera 7.0</td>--}}
                        {{--<td>Win 95+ / OSX.1+</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Presto</td>--}}
                        {{--<td>Opera 7.5</td>--}}
                        {{--<td>Win 95+ / OSX.2+</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Presto</td>--}}
                        {{--<td>Opera 8.0</td>--}}
                        {{--<td>Win 95+ / OSX.2+</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Presto</td>--}}
                        {{--<td>Opera 8.5</td>--}}
                        {{--<td>Win 95+ / OSX.2+</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Presto</td>--}}
                        {{--<td>Opera 9.0</td>--}}
                        {{--<td>Win 95+ / OSX.3+</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Presto</td>--}}
                        {{--<td>Opera 9.2</td>--}}
                        {{--<td>Win 88+ / OSX.3+</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Presto</td>--}}
                        {{--<td>Opera 9.5</td>--}}
                        {{--<td>Win 88+ / OSX.3+</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Presto</td>--}}
                        {{--<td>Opera for Wii</td>--}}
                        {{--<td>Wii</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Presto</td>--}}
                        {{--<td>Nokia N800</td>--}}
                        {{--<td>N800</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Presto</td>--}}
                        {{--<td>Nintendo DS browser</td>--}}
                        {{--<td>Nintendo DS</td>--}}
                        {{--<td>8.5</td>--}}
                        {{--<td>C/A<sup>1</sup></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>KHTML</td>--}}
                        {{--<td>Konqureror 3.1</td>--}}
                        {{--<td>KDE 3.1</td>--}}
                        {{--<td>3.1</td>--}}
                        {{--<td>C</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>KHTML</td>--}}
                        {{--<td>Konqureror 3.3</td>--}}
                        {{--<td>KDE 3.3</td>--}}
                        {{--<td>3.3</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>KHTML</td>--}}
                        {{--<td>Konqureror 3.5</td>--}}
                        {{--<td>KDE 3.5</td>--}}
                        {{--<td>3.5</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Tasman</td>--}}
                        {{--<td>Internet Explorer 4.5</td>--}}
                        {{--<td>Mac OS 8-9</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>X</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Tasman</td>--}}
                        {{--<td>Internet Explorer 5.1</td>--}}
                        {{--<td>Mac OS 7.6-9</td>--}}
                        {{--<td>1</td>--}}
                        {{--<td>C</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Tasman</td>--}}
                        {{--<td>Internet Explorer 5.2</td>--}}
                        {{--<td>Mac OS 8-X</td>--}}
                        {{--<td>1</td>--}}
                        {{--<td>C</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Misc</td>--}}
                        {{--<td>NetFront 3.1</td>--}}
                        {{--<td>Embedded devices</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>C</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Misc</td>--}}
                        {{--<td>NetFront 3.4</td>--}}
                        {{--<td>Embedded devices</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>A</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Misc</td>--}}
                        {{--<td>Dillo 0.8</td>--}}
                        {{--<td>Embedded devices</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>X</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Misc</td>--}}
                        {{--<td>Links</td>--}}
                        {{--<td>Text only</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>X</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Misc</td>--}}
                        {{--<td>Lynx</td>--}}
                        {{--<td>Text only</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>X</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Misc</td>--}}
                        {{--<td>IE Mobile</td>--}}
                        {{--<td>Windows Mobile 6</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>C</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Misc</td>--}}
                        {{--<td>PSP browser</td>--}}
                        {{--<td>PSP</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>C</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                        {{--<td>Other browsers</td>--}}
                        {{--<td>All others</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>-</td>--}}
                        {{--<td>U</td>--}}
                        {{--</tr>--}}
                        {{--</tbody>--}}
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2017 DGETI.</strong>
        Todos los derechos reservados.
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="js/jquery.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/bootstrap.js"></script>
<!-- DataTables -->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="js/app.js"></script>
<!-- AdminLTE for demo purposes -->
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
