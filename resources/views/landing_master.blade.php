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
    <link href="{!! asset('font-awesome/css/font-awesome.min.css') !!}"
          rel="stylesheet">
    <link href="{!! asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,
    400,700,300italic,400italic,700italic') !!}" rel="stylesheet">
    @section('particular_styles')
    @show
</head>

<body class="minimal-background-gray">

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top" onclick=$("#menu-close").click();>Start Bootstrap</a>
        </li>
        <li>
            <a href="#top" onclick=$("#menu-close").click();>Home</a>
        </li>
        <li>
            <a href="#about" onclick=$("#menu-close").click();>About</a>
        </li>
        <li>
            <a href="#services" onclick=$("#menu-close").click();>Services</a>
        </li>
        <li>
            <a href="#portfolio" onclick=$("#menu-close").click();>Portfolio</a>
        </li>
        <li>
            <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
        </li>
    </ul>
</nav>

<header id="top" class="header">
    <div class="row">
        <div class="text-vertical-center">
            <a href="/">
                <img src="{!! asset('img/dgeti.png') !!}"
                     class="img-responsive img-logo"/>
            </a>
            <br/><br/>
            <h2 class="bolder-title">@yield('tituloSeccion', 'Título')</h2>
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

<script src="{!! asset('js/jquery.js') !!}"></script>

@section('other_content')
@show

@section('particular_scripts')
@show

<a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
</body>
</html>
