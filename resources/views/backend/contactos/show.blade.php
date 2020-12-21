@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <div class="container col-lg-10 card py-3 mt-5">
        <h2 class="font-weight-bold text-center mt-3">Contacto: {{ $contacto->nombre }}</h2>
        <div class="row mt-2">
            <div class="col-md-5">
                <div class="input-group mb-6">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Email:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $contacto->email }}" readonly>
                </div>
            </div>

            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Teléfono:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $contacto->telefono }}" readonly>
                </div>
            </div>
            <div class="col-md-2">
                <div class="input-group mb-6">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Cliente:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $contacto->cliente }}" readonly>
                </div>
            </div>
        </div>

        <div class="btn-group btn-block" role="group" aria-label="Basic example">
            <a href="{{ route('contactos.edit', $contacto) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('contactos.index') }}" class="btn btn-success">Regresar</a>
        </div>
    </div>

</div>
<!-- .animated -->
@endsection
