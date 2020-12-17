@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h4 class="font-weight-bold text-center">Editar datos del conyugue de:</h4>
    <h4 class="font-weight-bold text-center">
        <strong>
            {{ $formulario->nombre }}
            {{ $formulario->nombre2 }}
            {{ $formulario->apellido }}
            {{ $formulario->apellido2 }}
        </strong>
    </h4>

  <div class="container card">
        <form action="{{ route('conyugues.update', $formulario) }}" method="POST" class="bg-white mt-5">

            @method('PUT')
            @csrf


            <div id="casado" style="display: block;">
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombrecy">Primer Nombre:</label>
                        <input type="text" id="nombrecy" name="nombrecy" class="form-control" value="{{ $formulario->nombrecy }}">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombrecy2">Segundo Nombre:</label>
                        <input type="text" id="nombrecy2" name="nombrecy2" class="form-control" value="{{ $formulario->nombrecy2 }}">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidocy">Primer Apellido:</label>
                        <input type="text" id="apellidocy" name="apellidocy" class="form-control" value="{{ $formulario->apellidocy }}">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidocy2">Segundo Apellido:</label>
                        <input type="text" id="apellidocy2" name="apellidocy2" class="form-control" value="{{ $formulario->apellidocy2 }}">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generocony">Genero:</label>
                        <select type="text" id="generocy" name="generocy" class="form-control">
                            <option selected value="{{ $formulario->generocy }}">{{ $formulario->generocy }}</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechancy">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechancy" name="fechancy" class="form-control" value="{{ $formulario->fechancy }}"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="estatuscy">Estatus Legal:</label>
                        <select type="text" id="estatuscy" name="estatuscy" class="form-control">
                            <option selected value="{{ $formulario->estatuscy }}">{{ $formulario->estatuscy }}</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="ssncy">Nro. Seguro Social</label>
                        <input id="ssncy" name="ssncy" type="text"  class="form-control" value="{{ $formulario->ssncy }}">
                    </div>
                </div>
            </div>


            <div class="col-md-12 my-4">
                <div class="btn-group btn-block" role="group" aria-label="Basic example">
                    <button type="submit " value="Enviar " class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('conyugues.index') }}" class="btn btn-success">Regresar</a>
                </div>
            </div>

        </form>
    </div>



</div>
<!-- .animated -->

@endsection
