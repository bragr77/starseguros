@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">

    <h2 class="mb-5 font-weight-bold">Clientes con Dependientes</h2>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive-lg">
                <table id="formularios" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nombres y Apellidos</th>
                            <th scope="col">Fecha de Registro</th>
                            <th scope="col">Estado Civil</th>
                            <th scope="col">Dependientes</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formularios as $formulario)

                            @if ($formulario->estadocivil === 'casado' or $formulario->dependientes === 'si')
                                <tr class="@if ($formulario->visto == 0) ItemNuevo @else @endif">
                                    <th scope="row">{{ $contr2++ }}</th>
                                    <td>{{$formulario->nombre }} {{$formulario->nombre2 }} {{$formulario->apellido }} {{$formulario->apellido2 }}</td>
                                    <td>{{$formulario->created_at->diffForHumans() }}</td>
                                    <td>{{$formulario->estadocivil }}</td>
                                    <td>{{$formulario->dependientes }}</td>
                                    <td>
                                        <div class="row text-center">
                                            <a href="{{ route('reportes.show', $formulario) }}" class="mr-1 btn btn-success btn-sm" target="__blank">Ver Pdf</a>
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

