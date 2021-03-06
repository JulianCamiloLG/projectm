@extends('template')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('css/fontsize.css') }}">
@endsection

@section('title')
    Inicio
@endsection

@section('background')
    style="background-image: url({{ URL::asset('img/01home1.jpg') }}); height: 100%; max-width: 100% ; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative; background-size: 100% 100%;"
@endsection

@section('titulo')
INGENIERÍA
@endsection

@section('subtitulo')
Y GESTIÓN
@endsection

@section('body')
<div class="row">
    <div class="col-xl-12" style="position: relative">
        <img style="width: 100%" class="img-fluid" src="{{ URL::asset('img/02banner-ingenieriadevalor.jpg') }}" alt="nosotros">
        <div class="col-xs-12" style="position: absolute; top: 10px; right: 25% ">
            <h1 style="font-size: 5vw"><span>Ingeniería de valor</span></h1>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12" style="position: relative">
        <img style="width: 100%" class="img-fluid" src="{{ URL::asset('img/03banner-projectytransformacion.jpg') }}" alt="nosotros">
        <div class="col-xs-12" style="position: absolute; top: 9%; left: 20%; color: white">
            <h1 style="font-size: 3vw"><span>Project Management y Transformación Digital</span></h1>
        </div>
        <div class="col-xs-12" style="position: absolute; bottom: 1%; left: 46% ">
            <button class="btn btn-dark btn-lg" type="button" style="font-size: 2vw; "><a href="/transformacion" style="color: grey">VER MÁS</a></button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 mt-5 mb-2">
        <h1 class="text-center" style="font-size: 4vw"> <strong>Nuestros clientes</strong></h1>
    </div>
</div>
<div class="row mt-2 mb-5">
    <div class="col-xl-6 col-sm-12 text-center">
        <img class="img-fluid" src="{{ URL::asset('img/04logo-clientes1.png') }}" alt="clientes1">
    </div>
    <div class="col-xl-6 col-sm-12 text-center">
        <img class="img-fluid" src="{{ URL::asset('img/04logoclientes2.png') }}" alt="clientes2">
    </div>
</div>
@endsection

