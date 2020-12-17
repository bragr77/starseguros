@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h4 class="font-weight-bold text-center text-dark">Perfil de:
        <strong>
            {{ $profile->formulario->nombre }}
            {{ $profile->formulario->nombre2 }}
            {{ $profile->formulario->apellido }}
            {{ $profile->formulario->apellido2 }}
        </strong>
    </h4>

    <div class="container card">

        <form action="{{ route('perfil.update', $profile) }}" method="POST" class="bg-white mt-5">

            @method('PUT')
            @csrf

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="seguro">Tipo de Seguro:</label>
                    <select type="text" id="seguro" name="seguro" class="form-control">
                        <option selected value="{{ $profile->tiposeguro }}">{{ $profile->tiposeguro }}</option>
                        @foreach ($seguros as $seguro)
                            <option value="{{ $seguro->nombre }}">{{ $seguro->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="comision">Comisión:</label>
                    <input type="text" id="comision" name="comision" class="form-control" value="{{ $profile->comision }}" >
                </div>
            </div>

            <div class="row form-group ">
                <div class="col-md-12 ">
                    <label class="text-black " for="observaciones">Mensaje:</label>
                    <textarea name="observaciones" id="observaciones" cols="30 " rows="4" class="form-control " minlength="3">{{ $profile->observaciones }}</textarea >
                </div>
            </div>

            <div class="col-md-12 my-2">
                <div class="btn-group btn-block" role="group" aria-label="Basic example">
                    <button type="submit " value="Enviar " class="btn btn-primary">Actualizar</button>
                    <a href="{{ URL::previous() }}" class="btn btn-success">Regresar</a>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- .animated -->

@endsection


