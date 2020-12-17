@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h4 class="font-weight-bold text-center">Editar los datos de la {{ ucfirst(trans($dependiente->relacion)) }} de: </h4>
    <h4 class="font-weight-bold text-center">
        <strong>
            {{ $dependiente->formulario->nombre }}
            {{ $dependiente->formulario->nombre2 }}
            {{ $dependiente->formulario->apellido }}
            {{ $dependiente->formulario->apellido2 }}
        </strong>
    </h4>

    <div class="container card">
        <form action="{{ route('dependiente.update', $dependiente) }}" method="POST" class="bg-white mt-5">

            @method('PUT')
            @csrf

            <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="nombre">Primer Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $dependiente->nombre }}">
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="nombre2">Segundo Nombre:</label>
                    <input type="text" id="nombre2" name="nombre2" class="form-control" value="{{ $dependiente->nombre2 }}">
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="apellido">Primer Apellido:</label>
                    <input type="text" id="apellido" name="apellido" class="form-control" value="{{ $dependiente->apellido }}">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="apellido2">Segundo Apellido:</label>
                    <input type="text" id="apellido2" name="apellido2" class="form-control" value="{{ $dependiente->apellido2 }}">
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label for="genero">Genero:</label>
                    <select type="text" id="genero" name="genero" class="form-control">
                        <option selected value="{{ $dependiente->genero }}">{{ $dependiente->genero }}</option>
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
                        <input type="text" id="fechan" name="fechan" class="form-control" value="{{ $dependiente->fechan }}"><span class="input-group-addon"></span>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 mb-md-0">
                    <label for="relacion">Relación:</label>
                    <select type="text" id="relacion" name="relacion" class="form-control">
                        <option selected value="{{ $dependiente->relacion }}">{{ $dependiente->relacion }}</option>
                        <option value="Padre">Padre</option>
                        <option value="Madre">Madre</option>
                        <option value="Hijo">Hijo</option>
                        <option value="Hija">Hija</option>
                        <option value="Abuelo">Abuelo</option>
                        <option value="Abuela">Abuela</option>
                        <option value="Nieto">Nieto</option>
                        <option value="Nieta">Nieta</option>
                        <option value="sobrino">sobrino</option>
                        <option value="sobrina">sobrina</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label for="estatus">Estatus Legal:</label>
                    <select type="text" id="estatus" name="estatus" class="form-control" required>
                        <option selected value="{{ $dependiente->estatus }}">{{ $dependiente->estatus }}</option>
                        <option value="Ciudadano">Ciudadano</option>
                        <option value="Residente">Residente</option>
                        <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <label class="text-black" for="ssn">Nro. Seguro Social</label>
                    <input name="ssn" id="ssn" type="text"  class="form-control" value="{{ $dependiente->ssn }}">
                </div>
            </div>

            <div class="col-md-12 my-4">
                <div class="btn-group btn-block" role="group" aria-label="Basic example">
                    <button type="submit " value="Enviar " class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('formularios.show', $dependiente->formulario_id) }}" class="btn btn-success">Regresar</a>
                </div>
            </div>

        </form>
    </div>



</div>
<!-- .animated -->

@endsection
