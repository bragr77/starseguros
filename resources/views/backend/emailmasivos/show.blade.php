@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Asunto:</h6>
                  <h6>{{ $mensajemasivo->asunto }}</h6>
                </div>
                <div class="card-body">
                  <h6 class="m-0 font-weight-bold text-primary">Mensaje:</h6>
                  <p>{{ $mensajemasivo->mensaje }}</p>
                </div>
                <div class="card-footer text-center">
                    {{$mensajemasivo->created_at->format('d / M / Y') }}
                </div>
            </div>
        </div>
    </div>

</div>
<!-- .animated -->
@endsection
