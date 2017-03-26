@if($aplica == 1)
    <div class="dropdown">
        <button class="btn btn-default btn-block dropdown-toggle" type="button"
                data-toggle="dropdown">
            <span>Selecciona </span>
            <span class="caret"></span></button>
        <ul class="dropdown-menu drop-down-up">
            <li>
                <a class="drop_snb_item">
                    Selecciona
                </a>
            </li>
            @foreach($criterios as $criterio)
                <li>
                    <a class="drop_snb_item">
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
