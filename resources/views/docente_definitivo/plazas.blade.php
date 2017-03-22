{{--//////////////////////////////////////PLAZAS/////////--}}

<div class="row elemento" id="plaza_row">
    <div class="form-group col-md-3 col-sm-12">
        {!! Form::text('plaza_codigo[]', $value = $data->accion=='visualizar'  || $data->accion=='modificar'  ? $plaza->plaza:null, ['class' =>
        'form-control', 'placeholder' => 'Plaza','required',
        $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>

    <div class="form-group col-md-3 col-sm-12">
        <select class="form-control select2"
                name="plaza_tipo[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            @foreach($data->dic_tipo_plaza as $tipo)
                <option value="{{$tipo->id}}"
                        @if( $data->accion=='visualizar' )
                            {{$tipo->id==$plaza->tipo_plaza_id?'selected':''}}
                        @endif>
                    {{$tipo->descripcion }}
                </option>
            @endforeach
        </select>
    </div>


    <div class="form-group col-md-3 col-sm-12">

        <select class="form-control select2"
                name="plaza_horas[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            @foreach($data->dic_numero_horas as $num_horas)
                <option value="{{$num_horas->id}}"
                        @if( $data->accion=='visualizar' )
                            {{$tipo->id==$plaza->numero_horas_id?'selected':''}}
                        @endif
                >
                    {{$num_horas->numero_horas }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-2 col-sm-10">

        <select class="form-control select2"
                name="plaza_nombramiento[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            @foreach($data->dic_tipo_nombramiento as $tipo)
                <option value="{{$tipo->id}}"
                    @if( $data->accion=='visualizar' )
                            {{$tipo->id==$plaza->tipo_nombramiento_id?'selected':''}}
                     @endif>
                    {{$tipo->tipo_nombramiento}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-1 col-sm-1">
        <a class="btn btn-block btn-primary btn-danger remove" {{$data->accion=='visualizar' ? 'disabled':''}}>
            <i class="fa fa-times"></i>
        </a>
    </div>
</div>

<div class="division"></div>


