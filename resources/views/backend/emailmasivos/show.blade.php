@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Asunto:</h6>
                  <p class="mt-2 font-weight-bold text-dark">{{ $mensajemasivo->asunto }}</p>
                </div>
                <div class="card-body">
                  <h6 class="m-0 font-weight-bold text-primary">Mensaje:</h6>
                  <p class="mt-2 font-weight-bold text-dark">{{ $mensajemasivo->mensaje }}</p>
                </div>
                <div class="card-footer text-center font-weight-bold text-dark">
                    Enviado el: {{$mensajemasivo->created_at->format('d / M / Y') }}
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('emails.index') }}" class="btn btn-primary btn-block">Regresar</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- .animated -->
@endsection
