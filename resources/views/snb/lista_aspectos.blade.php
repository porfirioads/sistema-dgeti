@extends('dashboard_master')

@section('title', 'Sistema Nacional de Bachillerato')

@section('sidebar_options')
    @include('snb.sidebar_items', ['url'=>'../landing_directores',
    'texto' => 'Volver a menú de directores'])
@endsection

@section('box_title', 'Propuesta de Autoevaluación de Plantel para su Ingreso
 al SNB Proceso')

@section('box_body')
    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive no-padding">
                <table class="table table-hover" id="tableAspectos">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Aspectos Sujetos a Evaluación</th>
                        <th>Aspecto Autoevaluado</th>
                        <th>Estado</th>
                        <th>Plantel</th>
                        <th>Saeti</th>
                        <th>Extensión</th>
                        <th>Fecha</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- La instrucción de abajo declara e inicializa una
                    variable, pero no la pinta en el html --}}
                    {{--*/ $contador_aspecto = 1 /*--}}
                    @foreach($aspectos as $aspecto)
                        {{-- TODO Determinar si el aspecto ya fue evaluado --}}
                        {{--*/ $evaluado = rand(0, 1) /*--}}
                        <tr class="{{$evaluado ? 'success' : 'warning'}}"
                            id="{{$aspecto->id}}">
                            <td>{{$contador_aspecto++}}</td>
                            <td>{{$aspecto->aspecto}}</td>
                            <td>{{$evaluado ? 'Sí' : 'No'}}</td>
                            <td>{{$estado}}</td>
                            <td>{{$plantel}}</td>
                            <td>{{$saeti}}</td>
                            <td>{{$extension}}</td>
                            <td>{{$evaluado ? $fecha : '---'}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('particular_scripts')
    <script>
        $('#tableAspectos > tbody > tr').click(function () {
            window.location = 'evaluacion_snb/' + this.id;
        });
    </script>
@endsection