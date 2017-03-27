<div class="row elemento" id="datos_academicos_row">
    <div class="form-group col-md-6 col-sm-12">
        {!! Form::text('horas_descarga_academica',
        $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? null:null,
        ['class' => 'form-control',
        'placeholder' => 'Folio','required',
        $data->accion=='visualizar' ? 'disabled':'',])!!}

    </div>

    <div class="form-group col-md-6 col-sm-12">
        <select id="selCampos" class="form-control select2"
                name="campo_disciplinar[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>

        </select>
    </div>


</div>

