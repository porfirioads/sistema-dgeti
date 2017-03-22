<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <i class="icon-calendar"></i>
        <h3 class="panel-title">Datos académicos</h3>
    </div>
    <div class="panel-body">


        <div class="row hidden-xs hidden-sm hidden-md">
            <div class="form-group col-md-4 col-sm-12">
                <label>Componente Formación</label>
            </div>
            <div class="form-group col-md-4 col-sm-12">
                <label>Campo disciplinar</label>
            </div>
            <div class="form-group col-md-3 col-sm-12">
                <label>Disciplina</label>
            </div>
            <div class="col-md-1 col-sm-1">
                <label>Acciones</label>
            </div>
        </div>


        <div class="row">
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
                <a class="btn btn-block btn-primary btn-danger remove" {{$data->accion=='visualizar' ? 'disabled':''}}>
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-11"></div>
            <div class="form-group col-md-1 col-sm-1">
                <a class="btn btn-block btn-primary add-element-plaza" {{$data->accion=='visualizar' ? 'disabled':''}}>
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
</div>