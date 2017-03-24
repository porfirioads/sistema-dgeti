<div class="dropdown">
    <button class="btn btn-default btn-block dropdown-toggle" type="button"
            data-toggle="dropdown">
        <span>Selecciona </span>
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        @foreach($criterios as $criterio)
            <li><a>{{$criterio->criterio}}</a></li>
        @endforeach
    </ul>
</div>