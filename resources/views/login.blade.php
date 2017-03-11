<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ingresar</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/AdminLTE.css">
    <link rel="stylesheet" href="css/blue.css">
    <link href="css/my-dashboard.css" rel="stylesheet">
</head>
<body class="hold-transition login-page minimal-background-gray">
<div class="login-box">
    <div class="login-logo">
        <strong>Iniciar Sesión</strong>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingresa tus datos para iniciar sesión</p>
        {{--<form action="../../index2.html" method="post">--}}
        <div class="form-group has-feedback">
            <input id="txtUsuario" type="text" class="form-control"
                   placeholder="Usuario">
            <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="txtContrasena" type="password" class="form-control"
                   placeholder="Contraseña">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a id="btnIngresar" class="btn btn-primary btn-block btn-flat">
                    <i class="fa fa-sign-in"></i>
                    Ingresar
                </a>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                <a href="#">Olvidé mi contraseña</a><br>
            </div>
        </div>
        {{--</form>--}}
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script>
    var destino = {{ $destino }};
</script>

<!-- jQuery 2.2.3 -->
<script src="js/jquery.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/bootstrap.js"></script>
<!-- iCheck -->
<script src="js/icheck.min.js"></script>
<script src="js/bootstrap-notify.min.js"></script>
<script src="js/dgeti/Notifications.js"></script>
<script src="js/dgeti/Login.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>