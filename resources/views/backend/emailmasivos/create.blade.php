@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <form action="{{ route('emails.store') }}" method="POST" class="p-5 bg-white ">

        <h2 class="mb-5 font-weight-bold">Envíar correos masivos</h2>

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

        <div class="col-md-12 ">
            <button type="submit " value="Enviar " class="btn btn-primary">Enviar</button>
        </div>
    </form>

</div>
<!-- .animated -->
@endsection
