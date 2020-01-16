@extends('modals.modaltemplate')
@section('id')
    id="modallean"
@endsection
@section('arealabeled')
    aria-labelledby="modalleanTitle"
@endsection
@section('srcimgheader')
    src="{{ URL::asset('img/03imagen-leanmanagement.jpg') }}"
@endsection
@section('altimgheader')
    alt="leanmodal"
@endsection
@section('srcimgbody')
    src="{{ URL::asset('img/01icono-leanmanagement.png') }}"
@endsection
@section('altimgbody')
    alt="leanmodal"
@endsection
@section('modaltitle')
    Lean Management
@endsection
@section('extracontent')
    Organizaciones, Proyectos, Procesos y Construcción
@endsection
@section('modalcontent')
    Debido a que no hay fin en el proceso de reducir
    esfuerzo, tiempo, costo y errores, Lean tiene como
    uno de sus principios la perfección. <br> <br>
    Desde el enfoque de Lean maximizar valor y minimizar desperdicio se logra cambiando la forma en
    la cual se realiza el trabajo a través de la cadena de
    valor, desde la definición del proyecto, durante el
    diseño y las adquisiciones, hasta la construcción y
    entrega con un equipo integrado
@endsection