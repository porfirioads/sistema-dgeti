@extends('dashboard_master')

@section('title', 'Docentes Evaluador')

@section('particular_styles')
    <link href="{!! asset('css/dataTables.bootstrap.css') !!}"
          rel="stylesheet">
    <link href="{!! asset('css/agregar_flotante.css') !!}"
          rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection

@section('sidebar_options')
    @include('docente_evaluador.sidebar_items', ['url' =>
    '../landing_directores', 'texto' => 'Volver a menú de directores'])
@endsection

@section('box_title', 'Docentes Evaluador')
@section('box_body')
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->
    <div class="col-lg-offset-11">
        <button class="btn btn-block btn-warning button-float-righ"
                onclick="location.href='{{ url('docente_evaluador/create') }}'">
            <i class="fa fa-plus"></i>
        </button>
    </div>


    <br/>
    <table id="tablaProfesores" class="table table-bordered table-striped">
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
        @foreach($docentes as $docente)
            <tr>
                <td>{{$docente->rfc}}</td>
                <td>{{$docente->nombre}}</td>
                <td>{{$docente->primer_apellido}}</td>
                <td>{{$docente->segundo_apellido}}</td>
                <td class="row">
                    <div class="col-md-4">
                        <a class="btn btn-block btn-success"
                           href="docente_evaluador/{{$docente->id}}">
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-block btn-primary"
                           href="docente_evaluador/{{$docente->id}}/edit">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </div>
                    <div class="col-md-4">
                            <button class='btn btn-block btn-danger'   href="docente_idoneo/{{$docente->id}}/edit">
                                <i class="fa fa-trash"></i>
                            </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
        <div id="confirm" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &#215;</button>
                        <h4 class="modal-title">Eliminar Docente</h4>
                    </div>
                    <div class="modal-body">
                        <p></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="btnCancelar">Cancelar
                        </button>
                        <button type="button" class="btn btn-primary" id="btnConfirmar">Eliminar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </table>
@endsection

@section('particular_scripts')
    <script src="{!! asset('js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('js/dataTables.bootstrap.min.js') !!}"></script>
    <script>
        $(function () {
            $('#tablaProfesores').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <script src="{!! asset('js/dgeti/Notifications.js') !!}"></script>
    <script src="{!! asset('js/bootstrap-notify.min.js') !!}"></script>
    <script src="{!! asset('js/dgeti/DeleteConfirmDialog.js') !!}"></script>
@endsection