@extends('landing_master')

@section('title', 'DGETI')

@section('tituloSeccion', 'DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA E
INDUSTRIAL')

@section('particular_styles')
    <link href="{!! asset('css/landing_slider.css') !!}" rel="stylesheet">
@endsection

@section('botonesMenuLanding')
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="v_building">
            <i class="fa fa-graduation-cap fa-5x"></i>
            <br/>
            <span>Estudiantes</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="v_building">
            <i class="fa fa-pencil-square-o fa-5x"></i>
            <br/>
            <span>Profesores</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="landing_directores">
            <i class="fa fa-users fa-5x"></i>
            <br/>
            <span>Directores</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="v_building">
            <i class="fa fa-institution fa-5x"></i>
            <br/>
            <span>Planteles</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="v_building">
            <i class="fa fa-user fa-5x"></i>
            <br/>
            <span>Perfil</span>
        </a>
    </div>
@endsection

@section('other_content')
    <section id="about" class="about">
        <h2 class="bolder-title">NUESTROS ENLACES</h2>
        <div id="myCarousel" class="carousel slide"
             data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0"
                    class="active"></li>
                <li data-target="#myCarousel"
                    data-slide-to="1"></li>
                <li data-target="#myCarousel"
                    data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a class="btn btn-block btn-primary">Slide1</a>
                    <img src="{!! asset('img/slider/slide_1.png') !!}"/>
                </div>
                <div class="item">
                    <a class="btn btn-block btn-primary">Slide2</a>
                    <img src="{!! asset('img/slider/slide_2.png') !!}"/>
                </div>
                <div class="item">
                    <a class="btn btn-block btn-primary">Slide3</a>
                    <img src="{!! asset('img/slider/slide_3.png') !!}"/>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel"
               role="button"
               data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"
                                  aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel"
               role="button"
               data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"
                  aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
@endsection

@section('particular_scripts')
    <script src="{!! asset('js/bootstrap.js') !!}"></script>
@endsection