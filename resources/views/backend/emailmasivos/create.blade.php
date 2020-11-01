@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold">Envíar correos masivos</h2>

    <form action="{{ route('emails.store') }}" method="POST" class="p-5 bg-white" enctype="multipart/form-data">

        @csrf

        <div class="row form-group ">
            <div class="col-md-12 mb-3 mb-md-0 ">
                <label class="text-black " for="subject ">Asunto</label>
                <input type="subject" name="asunto" id="mensaje" class="form-control " required>
            </div>
        </div>

        <div class="row form-group ">
            <div class="col-md-12 ">
                <label class="text-black " for="message ">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="30 " rows="4" class="form-control " minlength="3" required></textarea >
            </div>
        </div>

        <div class="form-group">
            <label for="img_path" class="font-weight-bold">Seleccione una Imagen</label>
            <input type="file" class="form-control-file" id="img_path" name="img_path">
        </div>

        <div class="form-group">
            <label for="name" class="font-weight-bold">Nombre de la Imagen</label>
            <input type="text" class="form-control" id="imagen" name="imagen" @isset($lineablanca) value="{{ $lineablanca->imagen }}" @endisset placeholder="Ingrese Nombre de la imagen" required>
        </div>

        <div class="col-md-12 ">
            <div class="btn-group btn-block" role="group" aria-label="Basic example">
                <button type="submit " value="Enviar " class="btn btn-primary">Enviar</button>
                <a href="{{ route('panel') }}" class="btn btn-success">Regresar</a>
            </div>
        </div>
    </form>

</div>
<!-- .animated -->
@endsection
