@extends('landing_master')

@section('title', 'DGETI')

@section('tituloSeccion', 'DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA
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
        <br>
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
                <li data-target="#myCarousel"
                    data-slide-to="3"></li>
                <li data-target="#myCarousel"
                    data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a class="btn btn-block btn-primary"
                       href="http://www.dgeti.sep.gob.mx/">
                        Portal Académico
                    </a>
                    <img src="{!! asset('img/slider/portal.png') !!}"/>
                </div>
                <div class="item">
                    <a class="btn btn-block btn-primary"
                       href="https://es.duolingo.com/">
                        Duolingo
                    </a>
                    <img src="{!! asset('img/slider/duolingo.png') !!}"/>
                </div>
                <div class="item">
                    <a class="btn btn-block btn-primary"
                       href="https://es.khanacademy.org/">
                        Khan Academy
                    </a>
                    <img src="{!! asset('img/slider/khanacademy.png') !!}"/>
                </div>
                <div class="item">
                    <a class="btn btn-block btn-primary"
                       href="https://www.coursera.org/">
                        Coursera
                    </a>
                    <img src="{!! asset('img/slider/coursera.png') !!}"/>
                </div>
                <div class="item">
                    <a class="btn btn-block btn-primary"
                       href="http://www.construye-t.org.mx/">
                        Construye T
                    </a>
                    <img src="{!! asset('img/slider/construyet.png') !!}"/>
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
    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function (e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        // Opens the sidebar menu
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        // Scrolls to the selected menu item on the page
        $(function () {
            $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
        //#to-top button appears after scrolling
        var fixed = false;
        $(document).scroll(function () {
            if ($(this).scrollTop() > 250) {
                if (!fixed) {
                    fixed = true;
                    // $('#to-top').css({position:'fixed', display:'block'});
                    $('#to-top').show("slow", function () {
                        $('#to-top').css({
                            position: 'fixed',
                            display: 'block'
                        });
                    });
                }
            } else {
                if (fixed) {
                    fixed = false;
                    $('#to-top').hide("slow", function () {
                        $('#to-top').css({
                            display: 'none'
                        });
                    });
                }
            }
        });
    </script>
@endsection