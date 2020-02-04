@extends('template')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('css/fontsize.css') }}">
@endsection

@section('title')
    Project Managment
@endsection

@section('background')
    style="background-image: url({{ URL::asset('img/01banner-areas.jpg') }}); min-height: 677px; max-width: 100% ; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;background-size: 100% 100%;"
@endsection

@section('body')
<style type="text/css">
    .contentimg {
        position: relative;
        width: 100%;
    }
    .contentimg .btnmodal {
        position: absolute;
        top: 60%;
        left: 80%;
        text-align: center;
    }
</style>
<div class="container-fluid" style=" font-family: Roboto, 'Segoe UI', Tahoma, sans-serif; font-size: 3vw">
    <div class="row">
        <div class="col-md-6 col-sm-12" style="background-color: #e0dede; position: relative" >
            <div class="my-5 mx-5">
                <img class="img-fluid" src="{{ URL::asset('img/02icono-leanmanagement.png') }}" alt="leanmanagement">
                <label for="bim"><strong><h1 style="font-size: 4vw">Lean Management</h1></strong> Organizaciones, Proyectos, Procesos y Construcción</label> <br>
                <p> <br>
                El equipo Project M fundamenta sus procesos y resultados en
                los principios Lean utilizando las metodologías y herramientas más recientes para entregar valor al cliente identificando
                la cadena de valor y manteniendo su flujo continuo en todas
                las fases del ciclo del proyecto.  
                </p> <br>
                <div class="contentimg">
                    <img class="img-fluid" src="{{ URL::asset('img/03imagen-leanmanagement.jpg') }}" alt="leanmanagement">
                    <button type="button" class="btn btn-danger btnmodal" data-toggle="modal" data-target="#modallean" style="font-size: 1.5vw">Ver más</button>
                </div>
            </div>
            
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="my-5 mx-5"> 
                <img class="img-fluid" src="{{ URL::asset('img/02-icono-gerenciaintegrada.png') }}" alt="gerenciaintegrada">
                <label for="bim"><strong><h1 style="font-size: 4vw">Gerencia integrada</h1></strong>DE PROYECTOS - IPD</label> <br>
                <p> <br>
                Representa una innovación evolutiva y audaz en el desarrollo
                de proyectos de construcción con un equipo cooperativo y colaborativo para diseñar y construir el proyecto con recompensas compartidas en el costo final, cronograma y la calidad del
                proyecto.
                </p> <br>
                <div class="contentimg">
                    <img class="img-fluid" src="{{ URL::asset('img/03imagen-gerenciaintegrada.jpg') }}" alt="gerenciaintegrada">
                    <button type="button" class="btn btn-danger btnmodal" data-toggle="modal" data-target="#modalgerencia" style="font-size: 1.5vw">Ver más</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12"  >
            <div class="my-5 mx-5">
                <img class="img-fluid" src="{{ URL::asset('img/02icono-sostenibilidad.png') }}" alt="sostenibilidad">
                <label for="bim"><strong><h1 style="font-size: 4vw">Sostenibilidad</h1></strong></label> <br>
                <p> <br>
                La Gestión de Proyectos Sostenibles o Green Project Management considera que los factores ambientales son elementos
                importantes en los resultados finales de los proyectos. En este
                entorno de la gerencia de proyectos se debe tener en cuenta
                al mismo tiempo un amplio espectro de impactos potenciales.
                </p> <br>
                <div class="contentimg">
                    <img class="img-fluid" src="{{ URL::asset('img/03imagen-sostenibilidad.jpg') }}" alt="sostenibilidad">
                    <button type="button" class="btn btn-danger btnmodal" data-toggle="modal" data-target="#modalsostenibilidad" style="font-size: 1.5vw">Ver más</button>
                </div>
            </div>
            
        </div>
        <div class="col-md-6 col-sm-12" style="background-color: #e0dede; position: relative">
            <div class="my-5 mx-5"> 
                <img class="img-fluid" src="{{ URL::asset('img/02icono-calidad.png') }}" alt="calidad">
                <label for="bim"><strong><h1 style="font-size: 4vw">Gestión de</h1></strong>LA CALIDAD</label> <br>
                <p> <br>
                Es una forma de trabajo que involucra a los diferentes stakeholders del proyecto, durante el ciclo de vida de estos, mediante el cumplimiento de las características cuantitativas y
                cualitativas de los proyectos, con el fin de generar la máxima
                satisfacción de los usuarios y clientes. 
                </p> <br>
                <div class="contentimg">
                <img class="img-fluid" src="{{ URL::asset('img/03imagen-gestioncalidad.jpg') }}" alt="gestioncalidad">
                    <button type="button" class="btn btn-danger btnmodal" data-toggle="modal" data-target="#modalgestion" style="font-size: 1.5vw">Ver más</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('modals.lean')
@include('modals.gerencia')
@include('modals.sostenibilidad')
@include('modals.gestion')
@endsection