<!DOCTYPE html>
<html>
<head>
    <script src="{!! asset('js/dgeti/RemoveTrailingSlash.js') !!}"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ingresar</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('font-awesome/css/font-awesome.min.css') !!}"
          rel="stylesheet">
    <link href="{!! asset('css/ionicons.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/AdminLTE.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/blue.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/landings.css') !!}" rel="stylesheet">
</head>
<body class="hold-transition login-page minimal-background-gray">
<div class="login-box">
    <div class="login-logo">
        <strong>Iniciar Sesión</strong>
    </div>
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
</div>

<script>
    var destino = {!! json_encode(isset($destino) ? $destino : '/') !!};
</script>

<script src="{!! asset('js/jquery.js') !!}"></script>
<script src="{!! asset('js/bootstrap.js') !!}"></script>
<script src="{!! asset('js/icheck.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap-notify.min.js') !!}"></script>
<script src="{!! asset('js/dgeti/Notifications.js') !!}"></script>
<script src="{!! asset('js/dgeti/Login.js') !!}"></script>

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