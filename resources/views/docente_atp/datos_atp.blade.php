

<div class="row hidden-xs hidden-sm hidden-md">
    <div class="form-group col-md-6 col-sm-12">
        <label>Diagnostico Realizado</label>
        {!! Form::text('horas_descarga_academica',
       $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? null:null,
       ['class' => 'form-control',
       'placeholder' => '','required',
       $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label>Plan de trabajo realizado</label>
        {!! Form::text('horas_descarga_academica',
       $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? null:null,
       ['class' => 'form-control',
       'placeholder' => '','required',
       $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>Plan de trabajo realizado</label>
        {!! Form::text('horas_descarga_academica',
       $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? null:null,
       ['class' => 'form-control',
       'placeholder' => '','required',
       $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>

    <div class="form-group col-md-6 col-sm-12">
        <label>Evaluación realizada</label>
        {!! Form::text('horas_descarga_academica',
       $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? null:null,
       ['class' => 'form-control',
       'placeholder' => '','required',
       $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>

    <div class="form-group col-md-12 col-sm-12">
        <label>Funcion</label>
        {!! Form::text('horas_descarga_academica',
       $value = $data->accion=='visualizar' ||  $data->accion=='modificar' ? null:null,
       ['class' => 'form-control',
       'placeholder' => '','required',
       $data->accion=='visualizar' ? 'disabled':'',])!!}
    </div>

</div>

