<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/stylish-portfolio.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/landings.css') !!}" rel="stylesheet">
    <link href="{!! asset('font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,
    400,700,300italic,400italic,700italic') !!}" rel="stylesheet">
</head>

<body class="minimal-background-gray">
<header id="top" class="header">
    <div class="row">
        <div class="text-vertical-center">
            <a href="/">
                <img src="{!! asset('img/dgeti.png') !!}"
                     class="img-responsive img-logo"/>
            </a>
            <br/><br/>
            <h2>@yield('tituloSeccion', 'Título')</h2>
            <br/><br/>
        </div>
    </div>
    <div class="row row-centered">
        @section('botonesMenuLanding')
        @show
    </div>
    <br/><br/>
    <div class="instituciones-siglas">
        SEP &nbsp; SEMS &nbsp; DGETI &nbsp; COSDAC &nbsp; COPEEMS &nbsp; SPD
        &nbsp; INEE
    </div>
</header>