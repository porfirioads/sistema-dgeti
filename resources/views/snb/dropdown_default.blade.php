@if($aplica == 1)
    <div class="dropdown">
        <button class="btn btn-default btn-block dropdown-toggle" type="button"
                data-toggle="dropdown">
            <span>Selecciona </span>
            <span class="caret"></span></button>
        <script>
            if (evaluaciones['{!! $evidencia_id !!}'] == undefined)
                evaluaciones['{!! $evidencia_id !!}'] = {};
        </script>
        <ul id="{{$tipo_criterio . '*' .$evidencia_id}}" class="dropdown-menu
         drop-down-up">
            <li>
                <a id="-1" class="drop_snb_item">
                    Selecciona
                </a>
            </li>
            {{--*/ $contador_criterio = 1 /*--}}
            @foreach($criterios as $criterio)
                <script>
                    evaluaciones['{!! $evidencia_id !!}']
                        ['{!! $tipo_criterio !!}'] = '-1';
                </script>
                <li>
                    <a id="{{$contador_criterio++}}" class="drop_snb_item">
                        {{$criterio->criterio}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@elseif($aplica == 9)
    <div class="text-center">---------------</div>
@else
    <div class="text-center">No aplica</div>
@endif
