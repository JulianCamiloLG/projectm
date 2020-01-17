@extends('template')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('css/fontsize.css') }}">
@endsection

@section('title')
    Inicio
@endsection

@section('background')
    style="background-image: max-width: 100% ; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;background-size: 100% 100%; background-color: #393939"
@endsection

@section('body')
<style>
    .contenedor {
        position: relative;
    }
    .contenedor .textareacontent {
        position: absolute;
        top: 60%;
        left: 80%;
        text-align: center;
    }
    
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="my-5">
                <h1><strong>JAVIER PRIETO</strong></h1>
                <h3>javier@projectm.pro</h3>
                <h3>Bogota D.C</h3>
            </div>
            <div class="my-5">
                <h1><strong>CRISTIAN OSORIO</strong></h1>
                <h3>cristian@projectm.pro</h3>
                <h3>Manizales</h3>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div style="background-color: #e0dede">
                <form method="post" action="{{ route('mail') }}">
                    {{ method_field('POST') }}
                    @csrf
                    <div class="form-group px-5 py-5">
                        <label for="email" class="text-center"><h1><strong>Contáctanos</strong></h1></label>
                        <input class="form-control" type="text" name="Nombres" placeholder="Nombres">
                        <input class="form-control" type="email" name="Correo" placeholder="Correo Electrónico">
                        <input class="form-control" type="text" name="Celular" placeholder="Celular">
                        <textarea id="Mensaje" class="form-control textareacontent" name="Mensaje" rows="5" placeholder="Mensaje"></textarea>
                        <button class="btn btn-danger" type="submit">ENVIAR</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection