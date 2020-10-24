@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold">Mensajes Masivos Enviados</h2>

    <table id="emailmasivos" class="table table-hover">
        <thead>
            <tr>
                <th>N°</th>
                <th>Asunto</th>
                <th>Mensaje</th>
                <th>Enviado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mensajemasivos as $mensajemasivo)

            <tr>
                <th>{{ $cont++ }}</th>
                <td>{{$mensajemasivo->asunto }}</td>
                <td>{{Str::limit($mensajemasivo->mensaje, 30) }}</td>
                <td>{{$mensajemasivo->created_at->diffForHumans() }}</td>
                <td>
                    <div class="row">
                        <a href="{{ route('emails.show', $mensajemasivo) }}" class="mr-1 btn btn-success btn-sm">Ver Mensaje</a>
                        <form action="{{ route('emails.destroy', $mensajemasivo) }}" method="POST">
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
