<div class="row elemento" id="datos_academicos_row">
    <div class="form-group col-md-4 col-sm-12">

        <select id="selComponenteDisciplinas"
                name="componente_formacion[]"
                class="form-control select2"
                required
                {{$data->accion=='visualizar' ? 'disabled':''}}
                onchange="changeFuncComponente(this);">
            <option value='-1' selected>Seleccionar Componente de Formación ...</option>
            @foreach($data->dic_componente_formacion as $componente_dic)
                <option value="{{$componente_dic->id}}"
                @if( $data->accion=='visualizar' ||  $data->accion=='modificar' )
                    {{$componente_dic->id== $componente->componente_formacion_id ? 'selected':''}}
                        @endif>
                    {{$componente_dic->componente_formacion}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-4 col-sm-12">
        <select id="selCampos" class="form-control select2"
                name="campo_disciplinar[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            @if( $data->accion=='visualizar' ||  $data->accion=='modificar' )
                <option value='{{ $componente->campo_disciplinar_id}}'
                        selected>{{$componente->campo_disciplinar}}</option>
            @else
                <option value='-1' selected>Seleccionar Campo Disciplinar ...</option>
            @endif


        </select>
    </div>

    <div class="form-group col-md-3 col-sm-12">
        <select id="selDisciplinas"
                class="form-control select2"
                name="disciplina[]"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            @if( $data->accion=='visualizar' ||  $data->accion=='modificar' )
                <option value='{{ $componente->disciplina_id}}' selected>{{$componente->disciplina}}</option>

            @else
                <option value='-1' selected>Seleccionar Disciplina ...</option>
            @endif
        </select>
    </div>

    <div class="form-group col-lg-1">
        <a class="btn btn-block btn-primary btn-danger remove"
                {{$data->accion=='visualizar' ? 'disabled':''}}>
            <i class="fa fa-times"></i>
        </a>
    </div>
</div>

