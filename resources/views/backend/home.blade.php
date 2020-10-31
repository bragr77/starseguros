@extends('backend.layouts.app2')

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
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes Registrados:</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $contador }}</div>
                        </div>
                        <div class="col-auto">
                            {{--  <i class="fas fa-calendar fa-2x text-gray-300"></i>  --}}
                            <i class="fas fa-user-edit fa-3x text-primary"></i>
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
    <div class="orders">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Mis Clientes</h4>
                    </div>
                    <div class="thead-light">

                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <th>{{ $cont++ }}</th>
                                            <th>{{ $cliente->nombre }}</th>
                                            <th>{{ $cliente->email }}</th>
                                            <th>{{ $cliente->telefono }}</th>
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
<!-- .animated -->
@endsection
