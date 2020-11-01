@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h2 class="font-weight-bold text-center">Formulario de Registro</h2>

    <div class="container card py-3">

        <h4 class="text-center">Información Personal</h4>
        <hr>
        <div class="row mt-2">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombre }}" readonly>
                </div>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombrecy }}" readonly>
                </div>
            </div>

            <div class="col-md-3">
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

    <div class="container card py-3 mt-2 @if (is_null($formulario->nombred1)) d-none @else @endif">

        <h4 class="text-center">Información Dependientes</h4>
        <hr>

        <div class="row mt-2 @if (is_null($formulario->nombred1)) d-none @else @endif">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">1. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred1 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod1 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand1 }}" readonly readonly>
                </div>
            </div>
        </div>
        <div class="row mt-2 @if (is_null($formulario->nombred1)) d-none @else @endif">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Relación:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->relaciond1 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd1 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd1 }}" readonly readonly>
                </div>
            </div>
        </div>

        <hr class="@if (is_null($formulario->nombred2)) d-none @else @endif">
        <div class="row mt-2 @if (is_null($formulario->nombred2)) d-none @else @endif">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">2. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred2 }}" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod2 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand2 }}" readonly>
                </div>
            </div>
        </div>
        <div class="row mt-2 @if (is_null($formulario->nombred2)) d-none @else @endif">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Relación:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->relaciond2 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd2 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd2 }}" readonly>
                </div>
            </div>
        </div>

        <hr class="@if (is_null($formulario->nombred3)) d-none @else @endif">
        <div class="row mt-2 @if (is_null($formulario->nombred3)) d-none @else @endif">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">3. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred3 }}" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod3 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand3 }}" readonly>
                </div>
            </div>
        </div>
        <div class="row mt-2 @if (is_null($formulario->nombred3)) d-none @else @endif">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Relación:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->relaciond3 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd3 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd3 }}" readonly>
                </div>
            </div>
        </div>

        <hr class="@if (is_null($formulario->nombred4)) d-none @else @endif">
        <div class="row mt-2 @if (is_null($formulario->nombred4)) d-none @else @endif">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">4. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred4 }}" readonly readonly readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod4 }}" readonly readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand4 }}" readonly readonly readonly>
                </div>
            </div>
        </div>
        <div class="row mt-2 @if (is_null($formulario->nombred4)) d-none @else @endif">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Relación:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->relaciond4 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd4 }}" readonly readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd4 }}" readonly readonly readonly>
                </div>
            </div>
        </div>

        <hr class="@if (is_null($formulario->nombred5)) d-none @else @endif">
        <div class="row mt-2 @if (is_null($formulario->nombred5)) d-none @else @endif">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">5. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred5 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod5 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand5 }}" readonly readonly>
                </div>
            </div>
        </div>
        <div class="row mt-2 @if (is_null($formulario->nombred5)) d-none @else @endif">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Relación:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->relaciond5 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd5 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd5 }}" readonly readonly>
                </div>
            </div>
        </div>

        <hr class="@if (is_null($formulario->nombred6)) d-none @else @endif">
        <div class="row mt-2 @if (is_null($formulario->nombred6)) d-none @else @endif">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">6. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred6 }}" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod6 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand6 }}" readonly>
                </div>
            </div>
        </div>
        <div class="row mt-2 @if (is_null($formulario->nombred6)) d-none @else @endif">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Relación:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->relaciond6 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd6 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd6 }}" readonly>
                </div>
            </div>
        </div>

        <hr class="@if (is_null($formulario->nombred7)) d-none @else @endif">
        <div class="row mt-2 @if (is_null($formulario->nombred7)) d-none @else @endif">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">7. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred7 }}" readonly>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod7 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand7 }}" readonly>
                </div>
            </div>
        </div>
        <div class="row mt-2 @if (is_null($formulario->nombred7)) d-none @else @endif">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Relación:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->relaciond7 }}" readonly readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd7 }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd7 }}" readonly>
                </div>
            </div>
        </div>

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
            <a href="{{ route('formularios.index') }}" class="btn btn-success">Regresar</a>
            <a href="{{ route('pdf.show', $formulario) }}" class="btn btn-warning" target="_blank">Descargar PDF</a>
        </div>
    </div>

</div>
<!-- .animated -->
@endsection
