@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold">Clientes</h2>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive-lg">
                <table id="formularios" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nombres y Apellidos</th>
                            <th scope="col">Fecha de Registro</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formularios as $formulario)

                        <tr class="@if ($formulario->visto == 0) ItemNuevo @else @endif">
                            <th scope="row">{{ $cont++ }}</th>
                            <td>{{$formulario->nombre }} {{$formulario->nombre2 }} {{$formulario->apellido }} {{$formulario->apellido2 }}</td>
                            <td>{{$formulario->created_at->diffForHumans() }}</td>
                            <td>
                                <div class="row text-center">
                                    <a href="{{ route('formularios.show', $formulario) }}" class="mr-1 btn btn-success btn-sm">Ver</a>
                                    <form action="{{ route('formularios.destroy', $formulario) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
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
