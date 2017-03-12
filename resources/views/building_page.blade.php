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
    <title>Construyendo</title>
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
</head>
<body class="lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
    <div class="row text-center">
        <h1><strong>Página en construcción</strong></h1>
    </div>
    <div class="row text-center">
        <h1>Estamos trabajando para servirle</h1>
    </div>
    <div class="lockscreen-footer text-center">
        Copyright &copy; 2017
        <strong>
            DGETI
        </strong>
        Todos los derechos reservados
    </div>
    <br/>
    <div class="row">
       <a class="btn btn-block btn-lg btn-success" href="/">Regresar</a>
    </div>
</div>
<!-- /.center -->
</body>
