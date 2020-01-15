@extends('modals/modaltemplate')
@section('id')
    id="modalindustria"
@endsection
@section('arealabeled')
    aria-labelledby="modalindustriaTitle"
@endsection
@section('srcimgheader')
    src="{{ URL::asset('img/03imagen-industria.jpg') }}"
@endsection
@section('altimgheader')
    alt="industrialmodal"
@endsection
@section('srcimgbody')
    src="{{ URL::asset('img/icono-industrial.png') }}"
@endsection
@section('altimgbody')
    alt="industrialmodal"
@endsection
@section('modaltitle')
    Industria 4.0
@endsection
@section('modalcontent')
    - La automatización de algún proceso de abastecimiento. <br>
    - El uso de la inteligencia artificial a la atención a clientes. <br>
    - La mejora en los flujos de las líneas de negocio mediante
    medios digitales <br>
@endsection
