@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h4 class="font-weight-bold text-center">
        Editar Información de:
        <strong>
            {{ $formulario->nombre }}
            {{ $formulario->nombre2 }}
            {{ $formulario->apellido }}
            {{ $formulario->apellido2 }}
        </strong>
    </h4>

  <div class="container card">
        <form action="{{ route('editdatos.update', $formulario) }}" method="POST" class="bg-white mt-5">

            @method('PUT')
            @csrf

            <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="nombre">Primer Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value=" {{ $formulario->nombre }}" required>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="nombre2">Segundo Nombre:</label>
                    <input type="text" id="nombre2" name="nombre2" class="form-control" value="{{ $formulario->nombre2 }}" required>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="apellido">Primer Apellido:</label>
                    <input type="text" id="apellido" name="apellido" class="form-control" value="{{ $formulario->apellido }}" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="apellido2">Segundo Apellido:</label>
                    <input type="text" id="apellido2" name="apellido2" class="form-control" value="{{ $formulario->apellido2 }}" required>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label for="genero">Genero:</label>
                    <select type="text" id="genero" name="genero" class="form-control" required>
                        <option selected value="{{ $formulario->genero }}">{{ $formulario->genero }}</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="text-black" for="fechan">Fecha de Nacimiento:</label>
                    <div class="input-group date rg-date">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                        </div>
                        <input type="text" id="fechan" name="fechan" class="form-control" value="{{ $formulario->fechan }}" required><span class="input-group-addon"></span>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" value="{{ $formulario->direccion }}" required>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                    <label class="text-black" for="ciudad">Ciudad:</label>
                    <input type="text" id="ciudad" name="ciudad" class="form-control" value="{{ $formulario->ciudad }}" required>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                    <label class="text-black" for="postal">Código Postal:</label>
                    <input type="text" id="postal" name="postal" class="form-control" value="{{ $formulario->postal }}" maxlength="5" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" value="{{ $formulario->telefono }}" required>
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $formulario->email }}" required>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                    <label for="estatus">Estatus Legal:</label>
                    <select type="text" id="estatus" name="estatus" class="form-control" required>
                        <option selected value="{{ $formulario->estatus }}">{{ $formulario->estatus }}</option>
                        <option value="Ciudadano">Ciudadano</option>
                        <option value="Residente">Residente</option>
                        <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="ssn">Nro. Seguro Social</label>
                    <input name="ssn" id="ssn" type="text"  class="form-control" value="{{ $formulario->ssn }}" required>
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

