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
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th colspan="4">{{$descripcion_aspecto}}</th>
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
                    {{-- La instrucción de abajo declara e inicializa una
                    variable, pero no la pinta en el html --}}
                    {{--*/ $contador_aspecto = 1 /*--}}
                    {{--@foreach($aspectos as $aspecto)--}}
                        {{-- TODO Determinar si el aspecto ya fue evaluado --}}
                        {{--*/ $evaluado = rand(0, 1) /*--}}
                        {{--<tr class="{{$evaluado ? 'success' : 'warning'}}">--}}
                            {{--<td>{{$contador_aspecto++}}</td>--}}
                            {{--<td>{{$aspecto->aspecto}}</td>--}}
                            {{--<td>{{$evaluado ? 'Sí' : 'No'}}</td>--}}
                            {{--<td>{{$estado}}</td>--}}
                            {{--<td>{{$plantel}}</td>--}}
                            {{--<td>{{$saeti}}</td>--}}
                            {{--<td>{{$extension}}</td>--}}
                            {{--<td>{{$evaluado ? $fecha : '---'}}</td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection