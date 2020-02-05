@extends('template')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('css/fontsize.css') }}">
@endsection

@section('title')
    Nosotros
@endsection

@section('background')
    style="background-image: url({{ URL::asset('img/01banner-nuestroequipo.jpg') }}); min-height: 884px; max-width: 100% ; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;background-size: 100% 100%;"
@endsection

@section('body')
<div class="container-fluid" style=" font-family: Roboto, 'Segoe UI', Tahoma, sans-serif">
    <div class="row">
        <div class="text-left col-xs-12 px-2" style="background-color: #868589; color: white">
            <div class="justify-content-cent">
                <label for="texto1" class="fuentetexto">
                El equipo Project M estará liderado por los ingenieros <strong> Javier Prieto (Ceng, MsC-MBA) y Cristian Osorio (CEng, MsC) </strong>
                quienes suman más de 20 años de experiencia en la estructuración, ejecución, control y operación de proyectos de
                construcción. <br> <br>
                </label>
            </div>
            <div class="justify-content-cent">
                <label for="texto2" class="fuentetexto">
                    En el sector infraestructura, inmobiliario, corporativo, comercial y residencial. Así mismo, han dirigido y realizado
                    proyectos de investigación y consultoría en las áreas de Ingeniería y gerencia de la construcción, mejoramiento de la
                    productividad en construcción, Lean Construction, BIM, huella ambiental de los proyectos, sistemas constructivos y
                    viviendas de interés social. 
                </label>
            </div>
        </div>
    </div>
    <div class="row p-0">
        <div class="col-sm-12 text-center">
            <label for="titulo"> <h1 class="fuentetitulo"><strong>International partners</strong></label></h1>
        </div>
        <div class="row p-0" style="width: 100%"></div>
        <div class="col-md-6 col-sm-12" style="background-color: #e0dede; ">
            <label for="titulo"> <h1 class="fuentetitulo"><strong>Salvador <br>
                                        García Rodríguez</strong></h1>
            </label> <br> <br>
            <label for="content1" class="fuentetexto">Ingeniero civil graduado en 1990 (UMSNH), maestría
            en Ingeniería de la Construcción 1994 (UNAM) y Doctorado en Administración de la Construcción (UPC,
            España). Durante los últimos 22 años ha realizado investigación aplicada, consultoría y extensión especializada en temas de Real Estate, Innovación en la
            construcción y mejora continua; para empresas y organizaciones en México, Estados Unidos, Europa y
            América Latina.</label>
        </div>
        <div class="col-md-6 col-sm-12" style="background-color: #e0dede; position: relative; float: left">
            <label for="titulo"> <h1  class="fuentetitulo"><strong>Harrison <br>
                                        Mesa Hernández</strong></h1>
            </label> <br> <br>
            <label for="content2" class="fuentetexto">Ingeniero Civil (U. Nacional), Doctor (Ph.D) en Pontificia
            Universidad Católica de Chile/ University of Colorado
            Boulder (USA). Profesor asistente de la Escuela de Construcción Civil en la Pontificia Católica de Chile. Ha realizado trabajos de investigación en Construcción sustentable, tecnologías y procesos constructivos, y gestión
            administrativa y operativa de proyectos. </label>
        </div>
    </div>
</div>
@endsection