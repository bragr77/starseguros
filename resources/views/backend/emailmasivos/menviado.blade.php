@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <div class="container  d-flex justify-content-center">

        <div class="col-md-8 m-5">
            <div class="card bg-light">
                <div class="card-header text-center">
                    <img class="img-fluid" src="{{  asset('img/logo2.png') }}" alt="Logo">
                </div>
                <div class="card-body text-center">
                    <h1 class="card-title">Correos Enviados</h1>
                    <br>
                    <a class="btn btn-primary btn-block" href="/panel">Regresar</a>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- .animated -->
@endsection
