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
                    <input type="text" class="form-control" value="{{ $formulario->nombre }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->genero }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechan }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-8">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Direccion:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->direccion }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Ciudad:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ciudad }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Código Postal:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->postal }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Teléfono:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->telefono }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Email:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->email }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatus }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssn }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estado Civil:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estadocivil }}">
                </div>
            </div>
        </div>

    </div>

    <div class="container card py-3 mt-2">

        <h4 class="text-center">Información Conyugue</h4>
        <hr>
        <div class="row mt-2">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombrecy }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generocy }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechancy }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatuscy }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssncy }}">
                </div>
            </div>
        </div>

    </div>

    <div class="container card py-3 mt-2">

        <h4 class="text-center">Información Dependientes</h4>
        <hr>
        <div class="row mt-2">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">1. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred1 }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod1 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand1 }}">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd1 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd1 }}">
                </div>
            </div>
        </div>

        <hr>
        <div class="row mt-2">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">2. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred2 }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod2 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand2 }}">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd2 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd2 }}">
                </div>
            </div>
        </div>

        <hr>
        <div class="row mt-2">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">3. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred3 }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod3 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand3 }}">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd3 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd3 }}">
                </div>
            </div>
        </div>

        <hr>
        <div class="row mt-2">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">4. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred4 }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod4 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand4 }}">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd4 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd4 }}">
                </div>
            </div>
        </div>

        <hr>
        <div class="row mt-2">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">5. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred5 }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod5 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand5 }}">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd5 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd5 }}">
                </div>
            </div>
        </div>

        <hr>
        <div class="row mt-2">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">6. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred6 }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod6 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand6 }}">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd6 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd6 }}">
                </div>
            </div>
        </div>

        <hr>
        <div class="row mt-2">
            <div class="col-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">7. Nombre:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->nombred7 }}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Genero:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->generod7 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Fecha de Nacimiento:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->fechand7 }}">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatusd7 }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssnd7 }}">
                </div>
            </div>
        </div>

    </div>

    <div class="container card py-3">

        <h4 class="text-center">Información Financiera</h4>
        <hr>
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Ingreso Grupal Anual $:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ingreso }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Nombre del Banco:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->banco }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Ruta:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ruta }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Nro. de Cuenta:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->cuenta }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estatus:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estatus }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">SSN:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->ssn }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text font-weight-bold">Estado Civil:</span>
                    </div>
                    <input type="text" class="form-control" value="{{ $formulario->estadocivil }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <a href="{{ route('formularios.index') }}" class="btn btn-success btn-block">Regresar</a>
        </div>

    </div>

</div>
<!-- .animated -->
@endsection
