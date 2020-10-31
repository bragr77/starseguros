@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold"Editar Contacto</h2>

    <form action="{{ route('contactos.update', $contacto) }}" method="POST" class="p-5 bg-white ">

        @method('PUT')

        @include('backend.contactos.form')


        <div class="col-md-12 ">
            <div class="btn-group btn-block" role="group" aria-label="Basic example">
                <button type="submit " value="Enviar " class="btn btn-primary">Actualizar</button>
                <a href="{{ route('contactos.index') }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
    </form>

</div>
<!-- .animated -->
@endsection
