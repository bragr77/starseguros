@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h4 class="font-weight-bold text-center">{{ ucfirst(trans($dependiente->relacion)) }} de: </h4>
    <h4 class="font-weight-bold text-center">
        <strong>
            {{ $dependiente->formulario->nombre }}
            {{ $dependiente->formulario->nombre2 }}
            {{ $dependiente->formulario->apellido }}
            {{ $dependiente->formulario->apellido2 }}
        </strong>
    </h4>

    <div class="container card">
        <h4 class="text-center mt-4 font-weight-bold">Información</h4>
        <hr>
        <div class="row mt-2">
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Nombres: </strong>{{ $dependiente->nombre }} {{ $dependiente->nombre2 }}</p>
            </div>
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Apellidos: </strong>{{ $dependiente->apellido }} {{ $dependiente->apellido2 }}</p>
            </div>
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Genero: </strong>{{ $dependiente->genero }}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Fecha de Nacimiento: </strong>{{ $dependiente->fechan }}</p>
            </div>
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Relacion: </strong>{{ $dependiente->relacion }}</p>
            </div>
            <div class="col-md-4">
                <p class="text-dark" style="font-size: 20px"><strong>Estatus: </strong>{{ $dependiente->estatus }}</p>
            </div>
            <div class="col-md-3">
                <p class="text-dark" style="font-size: 20px"><strong>SSN: </strong>{{ $dependiente->ssn }}</p>
            </div>
        </div>
        <div class="col-md-12 my-4">
            <div class="btn-group btn-block" role="group" aria-label="Basic example">
                <a href="{{ route('dependiente.edit', $dependiente) }}" class="btn btn-primary">Editar</a>
                <a href="{{ route('formularios.show', $dependiente->formulario_id) }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
    </div>

</div>
<!-- .animated -->

@endsection
