@extends('dashboard_master')

@section('title', 'Sistema Nacional de Bachillerato')

@section('sidebar_options')
    @include('snb.sidebar_items')
@endsection

@section('box_title', 'Propuesta de Autoevaluación de Plantel para su Ingreso
 al SNB Proceso')

@section('box_body')
    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th>No.</th>
                        <th>Aspectos Sujetos a Evaluación</th>
                        <th>Aspecto Autoevaluado</th>
                        <th>Estado</th>
                        <th>Plantel</th>
                        <th>Saeti</th>
                        <th>Extensión</th>
                        <th>Fecha</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Información General</td>
                        <td>NO</td>
                        <td>Zacatecas</td>
                        <td>CETis 114</td>
                        <td>Saetito</td>
                        <td>Extensioncita</td>
                        <td>12/03/2017</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Normativa</td>
                        <td>NO</td>
                        <td>Zacatecas</td>
                        <td>CETis 114</td>
                        <td>Saetito</td>
                        <td>Extensioncita</td>
                        <td>12/03/2017</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Planes de Estudio y Programas de "Unidades
                            Curriculares de Aprendizaje (UCA)"</td>
                        <td>NO</td>
                        <td>Zacatecas</td>
                        <td>CETis 114</td>
                        <td>Saetito</td>
                        <td>Extensioncita</td>
                        <td>12/03/2017</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Planta Docente</td>
                        <td>NO</td>
                        <td>Zacatecas</td>
                        <td>CETis 114</td>
                        <td>Saetito</td>
                        <td>Extensioncita</td>
                        <td>12/03/2017</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Director del Plantel</td>
                        <td>NO</td>
                        <td>Zacatecas</td>
                        <td>CETis 114</td>
                        <td>Saetito</td>
                        <td>Extensioncita</td>
                        <td>12/03/2017</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Servicios Escolares</td>
                        <td>NO</td>
                        <td>Zacatecas</td>
                        <td>CETis 114</td>
                        <td>Saetito</td>
                        <td>Extensioncita</td>
                        <td>12/03/2017</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Instalaciones y Equipamiento</td>
                        <td>NO</td>
                        <td>Zacatecas</td>
                        <td>CETis 114</td>
                        <td>Saetito</td>
                        <td>Extensioncita</td>
                        <td>12/03/2017</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Programa de Mejora y Desarrollo</td>
                        <td>NO</td>
                        <td>Zacatecas</td>
                        <td>CETis 114</td>
                        <td>Saetito</td>
                        <td>Extensioncita</td>
                        <td>12/03/2017</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection