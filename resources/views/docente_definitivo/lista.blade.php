@extends('dashboard_master')

@section('title', 'Docentes definitivos')

@section('particular_styles')
    <link href="{!! asset('css/dataTables.bootstrap.css') !!}"
          rel="stylesheet">
@endsection

@section('sidebar_options')
    @include('docente_definitivo.sidebar_items')
@endsection

@section('box_title', 'Docentes definitivos')

@section('box_body')
    <a class="btn btn-block btn-warning"
       href="docente_definitivo/create">
        <i class="fa fa-plus"></i>
    </a>
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
                           href="docente_definitivo/{{$docente->id}}">
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-block btn-primary">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </div>
                    <div class="col-md-4">
                        {{--<form id="remove_docente" action="{{ route('docente_definitivo.destroy', ['id' => $docente->id])}}" method="delete">
                            <button class='btn btn-block btn-danger' name="remove_levels" value="delete" method="delete">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>--}}
                        {{ Form::open(['route' => ['docente_definitivo.destroy', $docente->id], 'method' => 'delete']) }}
                        {{ Form::submit('Delete') }}
                        {{ Form::close() }}
                        <button class='btn btn-block btn-danger' name="remove_levels" value="delete" method="delete">
                            <i class="fa fa-trash"></i>
                        </button>
                        <div id="confirm" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            &#215;</button>
                                        <h4 class="modal-title">Eliminar Docente</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>&#191;Deseas eliminar el docente?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar
                                        </button>
                                        <button type="button" class="btn btn-primary" id="delete">Eliminar</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
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
    <script src="{!! asset('js/dgeti/DeleteConfirmDialog.js') !!}"></script>
@endsection