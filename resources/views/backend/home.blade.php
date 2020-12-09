@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Contactos:</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $contador }}</div>
                        </div>
                        <div class="col-auto">
                            {{--  <i class="fas fa-calendar fa-2x text-gray-300"></i>  --}}
                            <i class="fas fa-users fa-3x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nuevos Mensajes:</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mcontador }}</div>
                        </div>
                        <div class="col-auto">
                            {{--  <i class="fas fa-calendar fa-2x text-gray-300"></i>  --}}
                            <i class="fas fa-inbox fa-3x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Nuevos Formularios:</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $fcontador }}</div>
                        </div>
                        <div class="col-auto">
                            {{--  <i class="fas fa-calendar fa-2x text-gray-300"></i>  --}}
                            <i class="fas fa-inbox fa-3x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->

    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="">
        <div class="row">

            <!-- Area Contactos -->
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Contactos</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="thead-light">
                        <table id="contactoshome" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    {{--  <th>Email</th>
                                    <th>Teléfono</th>  --}}
                                    <th>Cliente</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactos as $contacto)
                                    <tr>
                                        <th>{{ $cont++ }}</th>
                                        <th>{{ $contacto->nombre }}</th>
                                       {{--   <th>{{ $contacto->email }}</th>
                                        <th>{{ $contacto->telefono }}</th>  --}}
                                        <th>{{ $contacto->cliente }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>

            <!-- Area Mensajes -->
            <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Mensajes Recibidos</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="thead-light">
                        <table id="mensajeshome" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    {{--  <th>Email</th>
                                    <th>Teléfono</th>  --}}
                                    <th>Asunto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mensajes as $mensaje)
                                    <tr>
                                        <th>{{ $cont++ }}</th>
                                        <th>{{ $mensaje->nombre }}</th>
                                        <th>{{ $mensaje->asunto }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
        </div>

    </div>
</div>
<!-- .animated -->
@endsection
