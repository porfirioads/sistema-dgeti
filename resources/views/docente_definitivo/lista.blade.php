
@extends('docente_definitivo.docente_master')
@section('content')
    {{-- =============================================== --}}

    {{-- Content Wrapper. Contains page content --}}
    <div class="content-wrapper">
        {{-- Main content --}}
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <strong class="box-title">Docentes definitivos</strong>
                </div>
                {{-- /.box-header --}}
                <div class="box-body">
                    <a class="btn btn-block btn-warning"
                       href="/docente_definitivo/create">
                        <i class="fa fa-plus"></i>
                    </a>
                    <br/>
                    <table id="example1"
                           class="table table-bordered table-striped">
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
                                           onclick="window.location='{{ url("docente_definitivo/$docente->id") }}'">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="btn btn-block btn-primary">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="btn btn-block btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- /.box-body --}}
            </div>
        </section>
        {{-- /.content --}}
    </div>
    {{-- /.content-wrapper --}}



@endsection