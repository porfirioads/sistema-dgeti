<div class="dropdown">
    <button class="btn btn-default btn-block dropdown-toggle" type="button"
            data-toggle="dropdown">
        <span>Selecciona </span>
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
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