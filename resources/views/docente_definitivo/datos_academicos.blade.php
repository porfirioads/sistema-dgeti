<div class="row elemento" id="datos_academicos_row">
    <div class="form-group col-md-4 col-sm-12">

        <select id="selComponenteDisciplinas"
                name="componente_formacion[]"
                class="form-control select2"
                required
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            <option value='-1' selected>Seleccionar Componente de Formación ...</option>
            @foreach($data->dic_componente_formacion as $componente)
                <option value="{{$componente->id}}">
                    {{$componente->componente_formacion}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-4 col-sm-12">

        <select id="selCampos" class="form-control select2"
                {{$data->accion=='ver' ? 'disabled':''}}>
            <option value='-1' selected>Seleccionar Campo Disciplinar ...</option>
        </select>
    </div>

    <div class="form-group col-md-3 col-sm-12">
        <select id="selDisciplinas" class="form-control select2"
                {{$data->accion=='ver' ? 'disabled':''}}>
            <option value='-1' selected>Seleccionar Disciplina ...</option>
        </select>
    </div>

    <div class="form-group col-lg-1">
        <a class="btn btn-block btn-primary btn-danger remove"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            <i class="fa fa-times"></i>
        </a>
    </div>
</div>

