@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold">Agregar Compañia de Seguro</h2>

    <form action="{{ route('seguros.store') }}" method="POST" class="p-5 bg-white ">

        @include('backend.seguros.form')


        <div class="col-md-12 ">
            <div class="btn-group btn-block" role="group" aria-label="Basic example">
                <button type="submit " value="Enviar " class="btn btn-primary">Enviar</button>
                <a href="{{ route('seguros.index') }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
    </form>

</div>
<!-- .animated -->
@endsection
