<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <i class="icon-calendar"></i>
        <h3 class="panel-title">Datos académicos</h3>
    </div>
    <div class="panel-body">
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
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



        <div class="form-group col-md-12">
            <label>Campo disciplinar</label>
            <select id="selCampos" class="form-control select2"
                    {{$data->accion=='ver' ? 'disabled':''}}
                    multiple="multiple">

                @foreach($data->dic_campos_disciplinares as $campo_diciplinar)
                    @foreach($data->disciplina_docente->disciplina as $disciplina)
                        @foreach($disciplina->campo_disciplinar as $campo)
                            <option
                                    value="{{$campo_diciplinar->id}}"
                                    {{$campo_diciplinar->id==$campo->id?'selected':''}}>

                                {{$campo_diciplinar->campo_disciplinar}}
                            </option>
                        @endforeach
                    @endforeach
                @endforeach
            </select>

        </div>



        <div class="form-group col-md-12">
            <label>Disciplina</label>
            <select id="selDisciplinas" class="form-control select2"
                    {{$data->accion=='ver' ? 'disabled':''}}
                    multiple="multiple">
                @foreach($data->dic_disciplina as $disciplina)
                    @foreach($data->disciplina_docente->disciplina as $_disciplina)
                        <option
                                value="{{$disciplina->id}}"
                                {{$disciplina->id==$_disciplina->id?'selected':''}}>
                            {{$disciplina->disciplina}}
                        </option>
                    @endforeach
                @endforeach


            </select>
        </div>
    </div>
</div>