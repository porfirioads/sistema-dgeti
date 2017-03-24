{{--//////////////////////////////////////PLAZAS/////////--}}
<div class="row elemento" id="plaza_row">
    <div class="form-group col-md-3 col-sm-12">
        {!! Form::text('plaza_codigo[]', $value = $data->accion=='visualizar'  || $data->accion=='modificar'  ? $plaza->plaza:null, ['class' =>
        'form-control', 'placeholder' => 'Plaza','required',
        $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>

    <div class="form-group col-md-3 col-sm-12">
        <select id="plaza_tipo"
                class="form-control select2"
                name="plaza_tipo[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}
                onchange="changeFunc(this);">
            <option value='-1' selected>Seleccionar Tipo de Plaza ...</option>
            @foreach($data->dic_descripcion_plaza as $tipo)
                <option value="{{$tipo->id}}"
                @if( $data->accion=='visualizar' || $data->accion=='modificar')
                    {{$tipo->id== $plaza->descripcion_tipo_plaza_id?'selected':''}}
                        @endif>
                    {{$tipo->descripcion }}
                </option>
            @endforeach
        </select>
    </div>


    <div class="form-group col-md-2 col-sm-12">
        <select id="numero_horas"
                class="form-control select2"
                name="plaza_horas[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            @if( $data->accion=='visualizar' || $data->accion=='modificar')
                <option value='{{ $plaza->tipo_plaza_id}}'
                        selected>{{$plaza->numero_horas}}</option>
            @else
                <option value='-1' selected>Seleccionar N&uacute;mero de Horas ...</option>
            @endif

        </select>
    </div>

    <div class="form-group col-md-3 col-sm-10">
        <select class="form-control select2"
                name="plaza_nombramiento[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            <option value='-1' selected>Seleccionar Tipo de Nombramiento ...</option>
            @foreach($data->dic_tipo_nombramiento as $tipo)
                <option value="{{$tipo->id}}"
                @if( $data->accion=='visualizar' || $data->accion=='modificar' )
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


