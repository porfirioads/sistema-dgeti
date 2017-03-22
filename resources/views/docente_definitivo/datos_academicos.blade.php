<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <i class="icon-calendar"></i>

        <h3 class="panel-title">Datos académicos</h3>
    </div>
    <div class="panel-body">
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label>Componente Formación</label>
            <select id="selComponenteDisciplinas"
                    name="componente_formacion[]"
                    class="form-control select2"
                    {{$data->accion=='visualizar' ? 'disabled':''}}>
                <option value='-1' selected>Seleccionar Componente de Formación ...</option>
                @foreach($data->dic_componente_formacion as $componente)
                    <option value="{{$componente->id}}">
                        {{$componente->componente_formacion}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-12">
            <label>Campo disciplinar</label>
            <select id="selCampos" class="form-control select2"
                    {{$data->accion=='ver' ? 'disabled':''}}>
                <option value='-1' selected>Seleccionar Campo Disciplinar ...</option>
            </select>
        </div>

        <div class="form-group col-md-12">
            <label>Disciplina</label>
            <select id="selDisciplinas" class="form-control select2"
                    {{$data->accion=='ver' ? 'disabled':''}}>
                <option value='-1' selected>Seleccionar Disciplina ...</option>
            </select>
        </div>
    </div>
</div>