@extends('dashboard_master')

@section('title', $page_title)

@section('particular_styles')
    <link href="{!! asset('css/select2.min.css') !!}" rel="stylesheet">
@endsection

@section('sidebar_options')
    @include('snb.sidebar_items')
@endsection

@section('box_title', $box_title)

@section('box_body')
    <div class="row no-horizontal-scroll">
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
                                <td class="select-snb">
                                    @include('snb.dropdown_default',
                                    ['criterios'=>$criterios_existencia])
                                </td>
                                <td class="select-snb">
                                    @include('snb.dropdown_default',
                                    ['criterios'=>$criterios_pertinencia])
                                </td>
                                <td class="select-snb">
                                    @include('snb.dropdown_default',
                                    ['criterios'=>$criterios_suficiencia])
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('particular_scripts')
    <script>
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