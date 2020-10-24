@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold">Mensajes Recibidos</h2>

    <table id="mensajes" class="table table-hover">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre y Apellido</th>
                <th>telefono</th>
                <th>Correo</th>
                <th>Asunto</th>
                <th>Mensaje</th>
                <th>Enviado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mensajes as $mensaje)

            <tr class="@if ($mensaje->visto == 0) ItemNuevo @else @endif">
                <th>{{ $cont++ }}</th>
                <td>{{$mensaje->nombre }}</td>
                <td>{{$mensaje->telefono }}</td>
                <td>{{$mensaje->email }}</td>
                <td>{{$mensaje->asunto }}</td>
                <td>{{Str::limit($mensaje->mensaje, 10) }}</td>
                <td>{{$mensaje->created_at->diffForHumans() }}</td>
                <td>
                    <div class="row">
                        <a href="{{ route('mensajes.show', $mensaje) }}" class="mr-1 btn btn-success btn-sm">Ver Mensaje</a>
                        <form action="{{ route('mensajes.destroy', $mensaje) }}" method="POST">
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
