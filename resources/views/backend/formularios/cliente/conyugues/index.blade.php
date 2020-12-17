@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold">Conyugues</h2>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive-lg">
                <table id="conyugues" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Conyugue</th>
                            <th scope="col">Titular</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formularios as $formulario)
                            @if (isset($formulario->nombrecy))
                                <tr>
                                    <th scope="row">{{ $cont++ }}</th>
                                    <td>{{$formulario->nombrecy }} {{$formulario->nombrecy2 }} {{$formulario->apellidocy }} {{$formulario->apellidocy2 }}</td>
                                    <td>{{$formulario->nombre }} {{$formulario->nombre2 }} {{$formulario->apellido }} {{$formulario->apellido2 }}</td>
                                    <td>
                                        <div class="row text-center">
                                            <a href="{{ route('conyugues.show', $formulario) }}" class="mr-1 btn btn-success btn-sm">Ver</a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- .animated -->
@endsection
