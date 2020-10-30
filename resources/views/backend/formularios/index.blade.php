@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold">Formularios</h2>

    <table id="formularios" class="table table-hover">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Fecha de Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formularios as $formulario)

            <tr class="@if ($formulario->visto == 0) ItemNuevo @else @endif">
                <th>{{ $cont++ }}</th>
                <td>{{$formulario->nombre }}</td>
                <td>{{$formulario->telefono }}</td>
                <td>{{$formulario->email }}</td>
                <td>{{$formulario->created_at->diffForHumans() }}</td>
                <td>
                    <div class="row">
                        <a href="{{ route('formularios.show', $formulario) }}" class="mr-1 btn btn-success btn-sm">Ver Formulario</a>
                        <form action="{{ route('formularios.destroy', $formulario) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-1 btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

</div>
<!-- .animated -->
@endsection
