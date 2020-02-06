@extends('template')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('css/fontsize.css') }}">
@endsection

@section('title')
    Servicios
@endsection

@section('background')
    style="background-image: url({{ URL::asset('img/01home1.jpg') }}); height: 100%; max-width: 100% ; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative; background-size: 100% 100%;"
@endsection

@section('titulo')
SERVICIOS
@endsection