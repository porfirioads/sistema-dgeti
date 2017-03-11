<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Directores</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">
    <link href="css/my-dashboard.css" rel="stylesheet">
</head>

<body class="minimal-background-gray">

<!-- Header -->
<header id="top" class="header">
    <div class="row">
        <div class="text-vertical-center">
            <img src="img/dgeti.png" class="img-responsive img-logo"/>
            <br/><br/>
            <h2>DIRECTORES</h2>
            {{--{{ Session::get('haySesion')  }}--}}
            {{--<br>--}}
            {{--{{ Session::get('usuario')  }}--}}
            {{--<br>--}}
            {{--{{ Session::get('contrasena')  }}--}}
            {{--<br>--}}
            <br/><br/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-2">
            <a class=" btn btn-block btn-primary" href="/spd">
                <i class="fa fa-pencil-square-o fa-5x"></i>
                <br/>
                <span>SPD</span>
            </a>
        </div>
        <div class="col-md-2">
            <a class=" btn btn-block btn-primary" href="/v_building">
                <i class="fa fa-users fa-5x"></i>
                <br/>
                <span>Planea</span>
            </a>
        </div>
        <div class="col-md-2">
            <a class=" btn btn-block btn-primary" href="/v_building">
                <i class="fa fa-institution fa-5x"></i>
                <br/>
                <span>SNB</span>
            </a>
        </div>
        <div class="col-md-2">
            <a class=" btn btn-block btn-primary" href="/v_building">
                <i class="fa fa-drivers-license-o fa-5x"></i>
                <br/>
                <span>Perfil</span>
            </a>
        </div>
        <div class="col-md-2">
            <a class=" btn btn-block btn-primary" href="/logout">
                <i class="fa fa-sign-out fa-5x"></i>
                <br/>
                <span>Salir</span>
            </a>
        </div>
    </div>
    <br/><br/><br/>
    <div class="instituciones-siglas">
        SEP &nbsp;&nbsp; SEMS &nbsp;&nbsp; DGETI &nbsp;&nbsp; COSDAC
        &nbsp;&nbsp; COPEEMS &nbsp;&nbsp; SPD &nbsp;&nbsp; INEE
    </div>
</header>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
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
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function (event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function (event) {
        var that = $(this);
        // Disable the click handler until the user leaves the map area
        that.off('click', onMapClickHandler);
        // Enable scrolling zoom
        that.find('iframe').css("pointer-events", "auto");
        // Handle the mouse leave event
        that.on('mouseleave', onMapMouseleaveHandler);
    }
    // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
</script>

</body>

</html>