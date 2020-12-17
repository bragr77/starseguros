@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h4 class="font-weight-bold text-center">Conyugue de: </h4>
    <h4 class="font-weight-bold text-center">
        <strong>
            {{ $formulario->nombre }}
            {{ $formulario->nombre2 }}
            {{ $formulario->apellido }}
            {{ $formulario->apellido2 }}
        </strong>
    </h4>

    <div class="container card">
        <h4 class="text-center mt-4 font-weight-bold">Información</h4>
        <hr>
        <div class="row mt-2">
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Nombres: </strong>{{ $formulario->nombrecy }} {{ $formulario->nombrecy2 }}</p>
            </div>
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Apellidos: </strong>{{ $formulario->apellidocy }} {{ $formulario->apellidocy2 }}</p>
            </div>
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Genero: </strong>{{ $formulario->generocy }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Fecha de Nacimiento: </strong>{{ $formulario->fechancy }}</p>
            </div>
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Estatus: </strong>{{ $formulario->estatuscy }}</p>
            </div>
            <div class="col-md-3">
                <p class="text-dark" style="font-size: 20px"><strong>SSN: </strong>{{ $formulario->ssncy }}</p>
            </div>
        </div>
        <div class="col-md-12 my-4">
            <div class="btn-group btn-block" role="group" aria-label="Basic example">
                <a href="{{ route('conyugues.edit', $formulario) }}" class="btn btn-primary">Editar</a>
                <a href="{{ route('conyugues.index') }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
    </div>

</div>
<!-- .animated -->

@endsection

