@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h2 class="font-weight-bold text-center">Formulario de Registro</h2>

    <div class="container card py-3">

        <h4 class="text-center">Información Personal</h4>
        <hr>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Primer Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombre }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Segundo Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombre2 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Primer Apellido:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->apellido }}" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Segundo Apellido:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->apellido2 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->genero }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechan }}" readonly>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-8">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Direccion:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->direccion }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Ciudad:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ciudad }}" readonly>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Código Postal:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->postal }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Teléfono:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->telefono }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Email:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->email }}" readonly>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatus }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssn }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estado Civil:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estadocivil }}" readonly>
                </div>
            </div>
        </div>

    </div>

    <div class="container card py-3 mt-2 @if (is_null($formulario->nombrecy)) d-none @else @endif">

        <h4 class="text-center">Información Conyugue</h4>
        <hr>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Primer Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombrecy }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Segundo Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombrecy2 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Primer Apellido:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->apellidocy }}" readonly>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Segundo Apellido:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->apellidocy2 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generocy }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechancy }}" readonly>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatuscy }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssncy }}" readonly>
                </div>
            </div>
        </div>

    </div>

    <div class="container card py-3 mt-2 @if ($formulario->dependientes != 'si') d-none @else  @endif">

        <h4 class="text-center">Información Dependientes</h4>
        <hr>

        @foreach ($dependientes as $dependiente)

            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text font-weight-bold">{{ $cont++ }}. Primer Nombre:</span>
                        </div>
                        <input type="text" class="form-control" value="{{ $dependiente->nombre }}" readonly readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text font-weight-bold">Segundo Nombre:</span>
                        </div>
                        <input type="text" class="form-control" value="{{ $dependiente->nombre2 }}" readonly readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text font-weight-bold">Primer Apellido:</span>
                        </div>
                        <input type="text" class="form-control" value="{{ $dependiente->apellido }}" readonly readonly>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text font-weight-bold">Primer Apellido:</span>
                        </div>
                        <input type="text" class="form-control" value="{{ $dependiente->apellido2 }}" readonly readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text font-weight-bold">Genero:</span>
                        </div>
                        <input type="text" class="form-control" value="{{ $dependiente->genero }}" readonly readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                        </div>
                        <input type="text" class="form-control" value="{{ $dependiente->fechan }}" readonly readonly>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text font-weight-bold">Relación:</span>
                        </div>
                        <input type="text" class="form-control" value="{{ $dependiente->relacion }}" readonly readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text font-weight-bold">Estatus:</span>
                        </div>
                        <input type="text" class="form-control" value="{{ $dependiente->estatus }}" readonly readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text font-weight-bold">SSN:</span>
                        </div>
                        <input type="text" class="form-control" value="{{ $dependiente->ssn }}" readonly readonly>
                    </div>
                </div>
            </div>

            <hr>
        @endforeach

    </div>

    <div class="container card py-3 mt-2">

        <h4 class="text-center">Información Financiera</h4>
        <hr>
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Ingreso Grupal Anual $:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ingreso }}" readonly>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Nombre del Banco:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->banco }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Ruta:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ruta }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Nro. de Cuenta:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->cuenta }}" readonly>
                </div>
            </div>
        </div>

    </div>

    <div class="container card py-3 mt-2">
        <div class="btn-group btn-block" role="group" aria-label="Basic example">
            <a href="{{ route('formularios.show', $formulario) }}" class="btn btn-success">Regresar</a>
            <a href="{{ route('pdf.show', $formulario) }}" class="btn btn-warning" target="_blank">Descargar PDF</a>
        </div>
    </div>


</div>
<!-- .animated -->
@endsection
