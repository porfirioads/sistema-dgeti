<div class="row elemento">
    <div class="form-group col-lg-3">
        <select class="form-control select2"
                name="evaluacion_tipo[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            @foreach($data->dic_tipo_resultados as $resultado)
                <option value="{{$resultado->id}}"
                @if( $data->accion=='visualizar' )
                    @foreach($data->historial_evaluacion_docente->evaluacion as $evaluacion)
                        {{$resultado->id == $evaluacion->resultado_evaluacion->id ? 'selected':''}}
                            @endforeach
                        @endif>
                    {{$resultado->tipo_evaluacion}}
                </option>
            @endforeach
        </select>
    </div>


    <div class="form-group col-lg-2">
        <select class="form-control select2"
                name="evaluacion_resultado[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            @foreach($data->dic_resultados as $resultado)
                <option value="{{$resultado->id}}"
                @if( $data->accion=='visualizar' )
                    {{$resultado->id == $evaluacion->resultado_evaluacion_id ? 'selected':''}}
                        @endif>
                    {{$resultado->tipo_resultado}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-lg-3">

        {!! Form::text('evaluacion_vigencia[]', $value = $data->accion=='visualizar' ? $evaluacion->vigencia_evaluacion:null,
        ['class' => 'form-control datepicker', 'placeholder' => 'Fecha vigencia',
        'required',$data->accion=='visualizar' ? 'disabled':''])!!}
    </div>

    <div class="form-group col-lg-3">
        {!! Form::text('evaluacion_inicio[]', $value = $data->accion=='visualizar' ? $evaluacion->fecha_evaluacion:null,
        ['class' => 'form-control datepicker', 'placeholder' => 'Fecha evaluación',
        'required',$data->accion=='visualizar' ? 'disabled':''])!!}
    </div>

    <div class="form-group col-lg-1">
        <a class="btn btn-block btn-primary btn-danger remove" {{$data->accion=='visualizar' ? 'disabled':''}}>
            <i class="fa fa-times"></i>
        </a>
    </div>
</div>

<div class="division"></div>