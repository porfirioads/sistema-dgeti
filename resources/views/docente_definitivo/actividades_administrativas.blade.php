{{--//////////////////////////////////////ACTIVIADES ADMINISTRATIVAS/////////--}}
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <i class="icon-calendar"></i>
        <h3 class="panel-title">Actividades Administrativas</h3>
    </div>
    <div class="panel-body">
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label>Actividad administrativa</label>
            <select class="form-control select2"
                    name="actividades_administrativas[]"
                    {{$data->accion=='visualizar' ? 'disabled':''}}
                    multiple="multiple">
               {{-- @foreach($data->dic_actividad_administrativas as $actividad)
                    <option value="{{$actividad->id}}"
                    @if( $data->accion=='visualizar' ||  $data->accion=='modificar' )
                        @foreach($data->res_docente_definitivo_actividad as $actividadadmin)
                            {{$actividadadmin->actividad_admin_id == $actividad->id ? 'selected':''}}
                                @endforeach
                            @endif>
                        {{$actividad->actividad}}
                    </option>
                @endforeach--}}
            </select>
        </div>
    </div>
</div>