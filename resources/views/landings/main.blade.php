@extends('landing_master')

@section('title', 'DGETI')

@section('tituloSeccion', 'DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA E
INDUSTRIAL')

@section('botonesMenuLanding')
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="v_building">
            <i class="fa fa-graduation-cap fa-5x"></i>
            <br/>
            <span>Estudiantes</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="v_building">
            <i class="fa fa-pencil-square-o fa-5x"></i>
            <br/>
            <span>Profesores</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="landing_directores">
            <i class="fa fa-users fa-5x"></i>
            <br/>
            <span>Directores</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="v_building">
            <i class="fa fa-institution fa-5x"></i>
            <br/>
            <span>Planteles</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="v_building">
            <i class="fa fa-user fa-5x"></i>
            <br/>
            <span>Perfil</span>
        </a>
    </div>
@endsection