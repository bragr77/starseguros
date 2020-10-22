@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="fa fa-male fa-lg" aria-hidden="true"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-heading">Cantidad de Asegurados:</div>
                                <div class="stat-text"><span class="count">{{ $contador }}</span></div>
                            </div>
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
