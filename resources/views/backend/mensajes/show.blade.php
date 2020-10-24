@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="m-0 font-weight-bold text-primary">Enviado por:</h6>
                            <h6 class="mt-2 font-weight-bold text-dark">{{ $mensaje->nombre }}</h6>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="m-0 font-weight-bold text-primary">Teléfono:</h6>
                            <h6 class="mt-2 font-weight-bold text-dark">{{ $mensaje->telefono }}</h6>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="m-0 font-weight-bold text-primary">Email:</h6>
                            <h6 class="mt-2 font-weight-bold text-dark">{{ $mensaje->email }}</h6>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <h6 class="m-0 font-weight-bold text-primary">Asunto:</h6>
                    <p class="mt-2 font-weight-bold text-dark">{{ $mensaje->asunto }}</p>

                    <h6 class="m-0 font-weight-bold text-primary">Mensaje:</h6>
                    <p class="mt-2 font-weight-bold text-dark">{{ $mensaje->mensaje }}</p>
                </div>
                <div class="card-footer text-center font-weight-bold text-dark">
                    Recibido el: {{$mensaje->created_at->format('d / M / Y') }}
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('mensajes.index') }}" class="btn btn-primary btn-block">Regresar</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- .animated -->
@endsection
