{{--//////////////////////////////////////PLAZAS/////////--}}
<div class="row elemento" id="plaza_row">
    <div class="form-group col-lg-2 col-md-3 col-sm-12">
        {!! Form::text('plaza_codigo[]', $value = $data->accion=='visualizar'  || $data->accion=='modificar'  ? $plaza->plaza:null, ['class' =>
        'form-control', 'placeholder' => 'Plaza','','pattern' => '[A-Z0-9]{20,}',
                'oninvalid' => 'setCustomValidity("Ingresa una plaza válida.")','onchange'=>'try{setCustomValidity("")}catch(e){S}',
        $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>

    <div class="form-group col-lg-2 col-md-3 col-sm-12">
        <select id="plaza_tipo"
                class="form-control select2"
                name="plaza_tipo[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}
                onchange="changeFunc(this);">
            <option value='-1' selected>Seleccionar Tipo de Plaza ...</option>
            @foreach($data->dic_descripcion_plaza as $tipo)
                <option value="{{$tipo->id}}"
                @if( $data->accion=='visualizar' || $data->accion=='modificar')
                    @if(isset($plaza->descripcion_tipo_plaza_id))
                        {{$tipo->id== $plaza->descripcion_tipo_plaza_id?'selected':''}}
                            @endif
                        @endif>
                    {{$tipo->descripcion }}
                </option>
            @endforeach
        </select>
    </div>


    <div class="form-group col-lg-2 col-md-2 col-sm-12">
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

    <div class="form-group col-lg-2 col-md-3 col-sm-12">
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

    <div class="form-group col-lg-1 col-md-6 col-sm-12">
        {!! Form::text('horas_frente_grupo[]',
            $value = ($data->accion=='visualizar' ||  $data->accion=='modificar') ? $plaza->horas_frente_grupo:null,['class' => 'form-control',
        'placeholder' => 'Horas frente a grupo','required',
        $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>
    <div class="form-group col-lg-1 col-md-6 col-sm-12">
        {!! Form::text('horas_descarga_academica[]',
            $value = ($data->accion=='visualizar' ||  $data->accion=='modificar') ? $plaza->horas_descarga_academica:null,
        ['class' => 'form-control',
        'placeholder' => 'Horas descarga académica','required',
        $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>
    <div class="form-group col-lg-1 col-md-6 col-sm-12">
        {!! Form::text('horas_administrativas[]',
                $value = ($data->accion=='visualizar' ||  $data->accion=='modificar') ? $plaza->horas_administrativas:null,
         ['class' => 'form-control',
         'placeholder' => 'Horas administrativas',
         $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>
    <div class="col-lg-1 col-md-1 col-sm-2">
        <a class="btn btn-block btn-primary btn-danger remove" {{$data->accion=='visualizar' ? 'disabled':''}}>
            <i class="fa fa-times"></i>
        </a>
    </div>
</div>

<div class="division"></div>


