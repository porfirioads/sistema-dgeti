<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <i class="icon-calendar"></i>
        <h3 class="panel-title">Datos académicos</h3>
    </div>
    <div class="panel-body">
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label>Componente Formación</label>
            <select id="selDisciplinas"
                    name="componente_formacion[]"
                    class="form-control select2"
                    {{$data->accion=='visualizar' ? 'disabled':''}}
                    multiple="multiple">
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
                    {{$data->accion=='ver' ? 'disabled':''}}
                    multiple="multiple">


            </select>

        </div>



        <div class="form-group col-md-12">
            <label>Disciplina</label>
            <select id="selDisciplinas"
                    name="academico_disciplina[]"
                    class="form-control select2"
                    {{$data->accion=='visualizar' ? 'disabled':''}}
                    multiple="multiple">
                @foreach($data->dic_disciplina as $disciplina)
                    <option value="{{$disciplina->id}}"
                    @if( $data->accion=='visualizar' ||  $data->accion=='modificar' )
                        @foreach($data->res_disciplina as $_disciplina)
                            {{$disciplina->id==$_disciplina->disciplina_id?'selected':''}}
                                @endforeach
                            @endif>
                        {{$disciplina->disciplina}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>