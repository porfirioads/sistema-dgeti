@extends('dashboard_master')

@section('title', $page_title)

@section('sidebar_options')
    @include('snb.sidebar_items')
@endsection

@section('box_title', $box_title)

@section('box_body')
    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive no-padding">
                <table class="table table-hover table-aspecto-snb">
                    <thead>
                    <tr class="table-header">
                        <th colspan="4">
                            {{$aspecto->descripcion}}
                        </th>
                        <th colspan="3">
                            Criterios de Evaluación
                        </th>
                    </tr>
                    <tr>
                        <th>No.</th>
                        <th>Aspectos Sujetos a Evaluación</th>
                        <th colspan="2">Evidencias</th>
                        <th>Criterios de Existencia</th>
                        <th>Criterios de Pertinencia</th>
                        <th>Criterios de Suficiencia</th>
                    </tr>
                    </thead>
                    <tbody>


                    {{--*/ $contador_subaspecto = 1 /*--}}
                    @foreach($aspecto['subaspectos_evaluacion'] as $subaspecto)
                        <tr>
                            <td>1.{{$contador_subaspecto++}}</td>
                            <td>{{$subaspecto->subaspecto}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection