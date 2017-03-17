@extends('landing_master')

@section('title', 'DGETI - Directores')

@section('tituloSeccion', 'MENÚ DE DIRECTORES')

@section('botonesMenuLanding')
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="docente_definitivo">
            <i class="fa fa-pencil-square-o fa-5x"></i>
            <br/>
            <span>SPD</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="v_building">
            <i class="fa fa-users fa-5x"></i>
            <br/>
            <span>Planea</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="snb">
            <i class="fa fa-institution fa-5x"></i>
            <br/>
            <span>SNB</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-primary" href="v_building">
            <i class="fa fa-drivers-license-o fa-5x"></i>
            <br/>
            <span>Perfil</span>
        </a>
    </div>
    <div class="col-md-2 col-xs-12 col-sm-12">
        <a class=" btn btn-block btn-danger" href="logout">
            <i class="fa fa-sign-out fa-5x"></i>
            <br/>
            <span>Salir</span>
        </a>
    </div>
@endsection