@extends('template')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('css/fontsize.css') }}">
@endsection

@section('title')
    Transformación Digital
@endsection

@section('background')
    style="background-image: url({{ URL::asset('img/01banner-transformacion.jpg') }}); min-height: 677px; max-width: 100% ; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;background-size: 100% 100%;"
@endsection

@section('body')
<div class="container-fluid" style=" font-family: Roboto, 'Segoe UI', Tahoma, sans-serif; font-size: 20px">
    <div class="row">
        <div class="col-md-6 col-sm-12" style="background-color: #e0dede; position: relative" >
            <div class="my-5 mx-5">
                <img class="img-fluid" src="{{ URL::asset('img/02icono-bim.png') }}" alt="bin">
                <label for="bim"><strong><h1>BIM</h1></strong></label> <br>
                <p> <br>
                Es una metodología tecnológica que integra todos los actores
                de un proyecto, que permite modelar la información del proyecto para facilitar el diseño, operación y la comunicación de
                los proyectos. 
                </p> <br> <br> <br>
                <img class="img-fluid" src="{{ URL::asset('img/03imagen-bim.jpg') }}" alt="">
            </div>
            
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="my-5 mx-5"> 
                <img class="img-fluid" src="{{ URL::asset('img/02icono-industria.png') }}" alt="bin">
                <label for="bim"><strong><h1>Industria 4.0</h1></strong></label> <br>
                <p> <br>
                Transformación digital es el procedimiento que une un elemento físico con un servicio virtual, en pos de generar una
                ventaja disruptiva en el modelo de negocio, donde se deben
                considerar y realinear las interacciones, procesos y procedimientos que incluyen la cadena de valor de la organización.
                </p> <br>
                <img class="img-fluid" src="{{ URL::asset('img/03imagen-industria.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>


@endsection