@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold">Dependientes</h2>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive-lg">
                <table id="dependientes" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nombres y Apellidos</th>
                            <th scope="col">Relacion</th>
                            <th scope="col">Titular</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dependientes as $dependiente)

                        <tr>
                            <th scope="row">{{ $contd++ }}</th>
                            <td>{{$dependiente->nombre }} {{$dependiente->nombre2 }} {{$dependiente->apellido }} {{$dependiente->apellido2 }}</td>
                            <td>{{$dependiente->relacion }}</td>
                            <td>{{$dependiente->formulario->nombre }} {{$dependiente->formulario->nombre2 }} {{$dependiente->formulario->apellido }} {{$dependiente->formulario->apellido2 }}</td>
                            <td>
                                <div class="row text-center">
                                    <a href="{{ route('dependientes.show', $dependiente) }}" class="mr-1 btn btn-success btn-sm">Ver</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- .animated -->
@endsection
