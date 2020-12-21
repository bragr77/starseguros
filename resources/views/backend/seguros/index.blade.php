@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-2 font-weight-bold">Compañias de Seguros</h2>

    <div class="mb-3">
        <a href="{{ route('seguros.create') }}" class="btn btn-primary">Agregar</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive-lg">
                <table id="dependientes" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nombre de la Compañia de Seguro</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($seguros as $seguro)

                        <tr>
                            <th scope="row">{{ $conts++ }}</th>
                            <td>{{ $seguro->nombre }}</td>
                            <td>
                                <div class="row text-center">
                                    <a href="{{ route('seguros.edit', $seguro) }}" class="mr-1 btn btn-success btn-sm">Editar Compañia</a>
                                    <form action="{{ route('seguros.destroy', $seguro) }}" method="POST">
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
