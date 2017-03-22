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
                <table class="table table-aspecto-snb">
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
                        {{--*/ $rowspan = count($subaspecto['evidencias']) /*--}}
                        <tr>
                            <td rowspan="{{$rowspan + 1}}">
                                1.{{$contador_subaspecto++}}
                            </td>
                            <td rowspan="{{$rowspan + 1}}">
                                {{$subaspecto->subaspecto}}
                            </td>
                        </tr>
                        @foreach($subaspecto['evidencias'] as $evidencia)
                            <tr>
                                <td colspan="2">{{$evidencia->evidencia}}</td>
                                <td>h</td>
                                <td>h</td>
                                <td>h</td>
                            </tr>
                        @endforeach
                    @endforeach

                    {{--<tr>--}}
                    {{--@foreach($subaspecto['evidencias'] as $evidencia)--}}
                        {{--<td>{{$evidencia->evidencia}}</td>--}}
                        {{--<td>f</td>--}}
                        {{--<td>g</td>--}}
                        {{--<td>h</td>--}}
                        {{--@endforeach--}}
                    {{--</tr>--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection