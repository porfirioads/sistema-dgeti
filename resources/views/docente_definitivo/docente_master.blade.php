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
    <title>Docente definitiv@</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
          name="viewport">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/select2.min.css">
    <link rel="stylesheet" href="/css/AdminLTE.css">
    <link rel="stylesheet" href="/css/skin-blue.css">
    <link rel="stylesheet" href="/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/css/datepicker3.css">
    <link rel="stylesheet" href="/css/my-dashboard.css">
</head>
{{-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT --}}
{{-- the fixed layout is not compatible with sidebar-mini --}}
<body class="hold-transition skin-blue fixed sidebar-mini">
{{-- Site wrapper --}}
<div class="wrapper">

    {{-- =============================================== --}}

    @include('docente_definitivo.perfil')


    {{-- =============================================== --}}

    @include('docente_definitivo.panel')

    {{-- =============================================== --}}

    @yield('content')
    {{-- =============================================== --}}

    @include('docente_definitivo.footer')



</div>
{{-- ./wrapper --}}

{{-- jQuery 2.2.3 --}}
<script src="/js/jquery.js"></script>
{{-- Bootstrap 3.3.6 --}}
<script src="/js/bootstrap.js"></script>
<script src="/js/select2.full.min.js"></script>
{{-- DataTables --}}
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap.min.js"></script>
{{-- SlimScroll --}}
<script src="/js/jquery.slimscroll.min.js"></script>
{{-- FastClick --}}
<script src="/js/fastclick.min.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
{{-- AdminLTE App --}}
<script src="/js/app.js"></script>
{{-- AdminLTE for demo purposes --}}
<script src="/js/demo.js"></script>


{{-- NOOOOOOOOTTTAAAA --}}

<script src="/js/dgeti/CargaDisciplinas.js"></script>
{{-- NOOOOOOOOTTTAAAA --}}


<script>
    //    //Date picker
    //    $('#dateFecha').datepicker({
    //        autoclose: true
    //    });
    //
    //    //Date picker
    //    $('#dateVigencia').datepicker({
    //        autoclose: true
    //    });
</script>
</body>
</html>