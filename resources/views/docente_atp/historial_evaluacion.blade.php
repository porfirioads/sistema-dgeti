<div class="row elemento" id="historial_evaluacion_row">
    <div class="form-group col-lg-3">
        <select class="form-control select2"
                name="evaluacion_tipo[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            <option value='-1' selected>Seleccionar Tipo de Evaluaci&oacute;n ...</option>
            @foreach($data->dic_tipo_resultados as $tipo_resultado)
                <option value="{{$tipo_resultado->id}}"
                @if( $data->accion=='visualizar' || $data->accion=='modificar'  )
                    {{$tipo_resultado->id == isset($evaluacion->tipo_evaluacion_id)?$evaluacion->tipo_evaluacion_id:-1 ? 'selected':''}}
                        @endif>
                    {{$tipo_resultado->tipo_evaluacion}}
                </option>
            @endforeach
        </select>
    </div>


    <div class="form-group col-lg-2">
        <select class="form-control select2"
                name="evaluacion_resultado[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            <option value='-1' selected>Seleccionar Tipo de Resultado ...</option>
            @foreach($data->dic_resultados as $resultado)
                <option value="{{$resultado->id}}"
                @if( $data->accion=='visualizar' || $data->accion=='modificar'  )
                    {{$resultado->id == isset($evaluacion->resultado_evaluacion_id)?$evaluacion->resultado_evaluacion_id : -1 ? 'selected':''}}
                        @endif>
                    {{$resultado->tipo_resultado}}
                </option>
            @endforeach

        </select>
    </div>

    <div class="form-group col-lg-3">
        {!! Form::text('evaluacion_inicio[]', $value = $data->accion=='visualizar' || $data->accion=='modificar'  ? date('d-m-Y', strtotime(isset($evaluacion->fecha_evaluacion)?$evaluacion->fecha_evaluacion : null)) :null,
        ['class' => 'form-control datepicker', 'placeholder' => 'Fecha evaluación',
        'required',$data->accion=='visualizar' ? 'disabled':''])!!}
    </div>

    <div class="form-group col-lg-3">
        {!! Form::text('evaluacion_vigencia[]', $value = $data->accion=='visualizar' || $data->accion=='modificar'  ?  date('d-m-Y', strtotime(isset($evaluacion->vigencia_evaluacion)?$evaluacion->vigencia_evaluacion : null)):null,
        ['class' => 'form-control datepicker', 'placeholder' => 'Fecha vigencia',
        'required',$data->accion=='visualizar' ? 'disabled':''])!!}
    </div>


    <div class="form-group col-lg-1">
        <a class="btn btn-block btn-primary btn-danger remove" {{$data->accion=='visualizar' ? 'disabled':''}}>
            <i class="fa fa-times"></i>
        </a>
    </div>
</div>

