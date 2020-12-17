@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h4 class="font-weight-bold text-center">
        Editar Información Financiera de:
        <strong>
            {{ $formulario->nombre }}
            {{ $formulario->nombre2 }}
            {{ $formulario->apellido }}
            {{ $formulario->apellido2 }}
        </strong>
    </h4>

  <div class="container card">
        <form action="{{ route('editfinanzas.update', $formulario) }}" method="POST" class="bg-white mt-5">

            @method('PUT')
            @csrf

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="ingreso">Ingreso Grupal Anual en USD($):</label>
                    <input type="text" id="ingreso" name="ingreso" class="form-control" value="{{ $formulario->ingreso }}" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="banco">Nombre del Banco:</label>
                    <input type="text" id="banco" name="banco" class="form-control" value="{{ $formulario->banco }}" required>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="ruta">Ruta:</label>
                    <input type="text" id="ruta" name="ruta" class="form-control" value="{{ $formulario->ruta }}" required>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="cuenta">Nro. de Cuenta:</label>
                    <input type="text" id="cuenta" name="cuenta" class="form-control" value="{{ $formulario->cuenta }}" required>
                </div>
            </div>

            <div class="col-md-12 my-4">
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

