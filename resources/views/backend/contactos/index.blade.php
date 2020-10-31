@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-2 font-weight-bold">Contactos</h2>

    <div class="mb-3">
        <a href="{{ route('contactos.create') }}" class="btn btn-primary">Agregar</a>
    </div>

    <table id="contactos" class="table table-hover">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Cliente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactos as $contacto)

            <tr>
                <th>{{ $cont++ }}</th>
                <td>{{$contacto->nombre }}</td>
                <td>{{$contacto->email }}</td>
                <td>{{$contacto->telefono }}</td>
                <td>{{$contacto->cliente }}</td>
                <td>
                    <div class="row">
                        <a href="{{ route('contactos.show', $contacto) }}" class="mr-1 btn btn-success btn-sm">Ver Contacto</a>
                        <form action="{{ route('contactos.destroy', $contacto) }}" method="POST">
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
