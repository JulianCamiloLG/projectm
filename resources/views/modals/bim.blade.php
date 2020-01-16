@extends('modals/modaltemplate')
@section('id')
    id="modalbim"
@endsection
@section('arealabeled')
    aria-labelledby="modalbimTitle"
@endsection
@section('srcimgheader')
    src="{{ URL::asset('img/03imagen-bim.jpg') }}"
@endsection
@section('altimgheader')
    alt="bimmodal"
@endsection
@section('srcimgbody')
    src="{{ URL::asset('img/01icono-bim.png') }}"
@endsection
@section('altimgbody')
    alt="bimmodal"
@endsection
@section('modaltitle')
    BIM
@endsection
@section('modalcontent')
    - Permite maximizar el valor a todos los agentes involucrados en el ciclo de vida de los proyectos. <br>
    - La información debe ser incorporada de forma estructurada. <br>
    - Se debe definir los flujos de información. <br>
    -La codificación y estandarización de la información constituye un elemento clave para establecer un entorno de colaboración eficiente. <br>
    - Facilita la interoperatividad en tiempo real entre los agentes participantes durante todo el ciclo de vida de la construcción.
@endsection