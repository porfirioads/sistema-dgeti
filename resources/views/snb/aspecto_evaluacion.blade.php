@extends('dashboard_master')

@section('title', 'SNB: ' . $aspecto->aspecto)

@section('particular_styles')
    <link href="{!! asset('css/select2.min.css') !!}" rel="stylesheet">
@endsection

@section('sidebar_options')
    @include('snb.sidebar_items', ['url'=>'../evaluacion_snb',
    'texto' => 'Volver a aspectos del SNB'])
@endsection

@section('box_title', $aspecto->aspecto)

@section('box_body')
    <div class="row no-horizontal-scroll">
        <div class="col-md-12">
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
                                {{$aspecto_index}}.{{$contador_subaspecto++}}
                            </td>
                            <td rowspan="{{$rowspan + 1}}">
                                {{$subaspecto->subaspecto}}
                            </td>
                        </tr>
                        {{--*/ $contador_evidencia = 1 /*--}}
                        @foreach($subaspecto['evidencias'] as $evidencia)
                            <tr>
                                <td colspan="2">
                                    {{--{{$contador_evidencia++ . '. '--}}
                                    {{--. $evidencia->evidencia}}--}}
                                    {{$evidencia->evidencia}}
                                </td>
                                <td class="select-snb">
                                    @include('snb.dropdown_default',
                                            ['aplica' => $evidencia
                                            ->aplica_existencia,
                                            'criterios' =>
                                            $criterios_existencia])
                                    {{--@if($evidencia->aplica_existencia)--}}
                                        {{--@include('snb.dropdown_default',--}}
                                            {{--['criterios'=>$criterios_existencia])--}}
                                    {{--@else--}}
                                        {{--<strong>No aplica</strong>--}}
                                    {{--@endif--}}
                                </td>
                                <td class="select-snb">
                                    @include('snb.dropdown_default',
                                            ['aplica' => $evidencia
                                            ->aplica_pertinencia,
                                            'criterios' =>
                                            $criterios_pertinencia])
                                    {{--@if($evidencia->aplica_pertinencia)--}}
                                        {{--@include('snb.dropdown_default',--}}
                                            {{--['criterios'=>$criterios_pertinencia])--}}
                                    {{--@else--}}
                                        {{--<strong>No aplica</strong>--}}
                                    {{--@endif--}}
                                </td>
                                <td class="select-snb">
                                    @include('snb.dropdown_default',
                                            ['aplica' => $evidencia
                                            ->aplica_suficiencia,
                                            'criterios' =>
                                            $criterios_suficiencia])
                                    {{--@if($evidencia->aplica_suficiencia)--}}
                                        {{--@include('snb.dropdown_default',--}}
                                            {{--['criterios'=>$criterios_suficiencia])--}}
                                    {{--@else--}}
                                        {{--<strong>No aplica</strong>--}}
                                    {{--@endif--}}
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <a id="btnGuardarAspectoSNB" class="btn btn-lg btn-block
            btn-danger">
                <i class="fa fa-times"></i>
                <span>Cancelar</span>
            </a>
        </div>
        <div class="col-md-6">
            <a id="btnGuardarAspectoSNB" class="btn btn-lg btn-block
            btn-primary">
                <i class="fa fa-check"></i>
                <span>Guardar</span>
            </a>
        </div>
    </div>
@endsection

@section('particular_scripts')
    <script>
        // Esta función se llama cuando se hace click en algún dropdown de un
        // aspecto de evaluación del SNB, y cambia del color y texto del
        // elemento dependiendo de la opción seleccionada
        $('.drop_snb_item').click(function () {
            var drop_button = $(this).parent().parent().parent().children()
                .first();
            var optionText = $(this)[0].innerHTML.trim();
            if (optionText == "Selecciona") {
                drop_button.removeClass('btn-success');
                drop_button.addClass('btn-default');
            } else {
                drop_button.removeClass('btn-default');
                drop_button.addClass('btn-success');
            }
            drop_button.children().first()[0].innerHTML = optionText;
        });
    </script>
@endsection