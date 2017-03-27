

<div class="row hidden-xs hidden-sm hidden-md">

    <div class="form-group col-md-12 col-sm-12">
        <label>Función</label>
        {!! Form::text('horas_descarga_academica',
       $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? null:null,
       ['class' => 'form-control',
       'placeholder' => '','required',
       $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>
</div>

