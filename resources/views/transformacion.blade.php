@extends('template')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('css/fontsize.css') }}">
@endsection

@section('title')
    Transformación Digital
@endsection

@section('background')
    style="background-image: url({{ URL::asset('img/04areas_transformacion.jpg') }}); height: 100%; max-width: 100% ; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;background-size: 100% 100%;"
@endsection

@section('titulo')
SERVICIOS
@endsection

@section('subtitulo')
Transformación digital
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
        left: 70%;
        text-align: center;
    }
</style>
<div class="container-fluid" style=" font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">
    <div class="row">
        <div class="col-md-6 col-sm-12" style="background-color: #e0dede; position: relative" >
            <div class="my-2 mx-2">
                <img class="img-fluid" src="{{ URL::asset('img/02icono-bim.png') }}" alt="bin">
                <label for="bim"><strong><h1 class="fuentetitulo">BIM</h1></strong></label> <br>
                <p class="fuentetexto"> <br>
                Es una metodología tecnológica que integra todos los actores
                de un proyecto, que permite modelar la información del proyecto para facilitar el diseño, operación y la comunicación de
                los proyectos. 
                </p> <br> <br> <br>
                <div class="contentimg">
                    <img class="img-fluid" src="{{ URL::asset('img/03imagen-bim.jpg') }}" alt="bim">
                    <button type="button" class="btn btn-danger btnmodal" data-toggle="modal" data-target="#modalbim">Ver más</button>
                </div>
            </div>
            
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="my-2 mx-2"> 
                <img class="img-fluid" src="{{ URL::asset('img/02icono-industria.png') }}" alt="industria">
                <label for="bim"><strong><h1 class="fuentetitulo">Industria 4.0</h1></strong></label> <br>
                <p class="fuentetexto"> <br>
                Transformación digital es el procedimiento que une un elemento físico con un servicio virtual, en pos de generar una
                ventaja disruptiva en el modelo de negocio, donde se deben
                considerar y realinear las interacciones, procesos y procedimientos que incluyen la cadena de valor de la organización.
                </p> <br>
                <div class="contentimg">
                    <img class="img-fluid" src="{{ URL::asset('img/03imagen-industria.jpg') }}" alt="industria">
                    <button type="button" class="btn btn-danger btnmodal" data-toggle="modal" data-target="#modalindustria">Ver más</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
@include('modals.bim')
@include('modals.industria')
@endsection