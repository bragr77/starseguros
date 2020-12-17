@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Información del Cliente</h1>
      <div class="">
          <a href="{{ route('planilla', $formulario) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-search"></i> Ver Planilla del Cliente</a>
          <a href="{{ route('pdf.show', $formulario) }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" target="_blank"><i class="fas fa-download fa-sm text-white-50"></i> Descargar Planilla del Cliente</a>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Datos Personales</h6>
                <div class="">
                    <a href="{{ route('editdatos.edit', $formulario) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit"></i> Editar</a>
                </div>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="text-dark"><strong>Nombres: </strong>{{ $formulario->nombre }} {{ $formulario->nombre2 }}</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-dark"><strong>Apellidos: </strong>{{ $formulario->apellido }} {{ $formulario->apellido2 }} </p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-dark"><strong>Genero: </strong>{{ $formulario->genero }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="text-dark"><strong>Fec. Nac.: </strong>{{ $formulario->fechan }}</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-dark"><strong>Estatus: </strong>{{ $formulario->estatus }}</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-dark"><strong>SSN: </strong>{{ $formulario->ssn }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-dark"><strong>Dirección: </strong>{{ $formulario->direccion }}</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-dark"><strong>Ciudad: </strong>{{ $formulario->ciudad }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="text-dark"><strong>Código Postal: </strong>{{ $formulario->postal }}</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-dark"><strong>Teléfono: </strong>{{ $formulario->telefono }}</p>
                        </div>
                        <div class="col-md-4">
                            <p class="text-dark"><strong>Email: </strong>{{ $formulario->email }}</p>
                        </div>
                    </div>

              </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Conyugue</h6>
                <div class="">
                    <a href="{{ route('editconyugue.edit', $formulario) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit"></i> Editar</a>
                </div>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-dark"><strong>Estado Civil: </strong>{{ $formulario->estadocivil }}</p>
                    </div>
                </div>

                @if ($formulario->estadocivil === 'soltero')
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-white">&nbsp;</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-white">&nbsp;</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-white">&nbsp;</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-white">&nbsp;</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-white">&nbsp;</p>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-dark"><strong>Nombre: </strong>{{ $formulario->nombrecy }} {{ $formulario->nombrecy2 }}</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark"><strong>Apellidos: </strong>{{ $formulario->apellidocy }} {{ $formulario->apellidocy2 }}</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark"><strong>Genero: </strong>{{ $formulario->generocy }}</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark"><strong>Fec. Nac.: </strong>{{ $formulario->fechancy }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-dark"><strong>Estatus: </strong>{{ $formulario->estatuscy }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-dark"><strong>SSN: </strong>{{ $formulario->ssncy }}</p>
                        </div>
                    </div>
                @endif

              </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Información Financiera</h6>
                <div class="">
                    <a href="{{ route('editfinanzas.edit', $formulario) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit"></i> Editar</a>
                </div>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-dark"><strong>Ingreso Grupal Anual $: </strong>{{ $formulario->ingreso }}</p>
                    </div>
                    <div class="col-md-12">
                        <p class="text-dark"><strong>Banco: </strong>{{ $formulario->banco }}</p>
                    </div>
                    <div class="col-md-12">
                        <p class="text-dark"><strong>Ruta: </strong>{{ $formulario->ruta }}</p>
                    </div>
                    <div class="col-md-12">
                        <p class="text-dark"><strong>Nro. de Cuenta: </strong>{{ $formulario->cuenta }}</p>
                    </div>
                    <div class="col-md-12">
                        <p class="text-white">&nbsp;</p>
                        <p class="text-white">&nbsp;</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Perfil</h6>
                @if ($formulario->perfil != 0)
                    <div class="">
                        <a href="{{ route('perfil.edit', $formulario->profile) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit"></i> Editar</a>
                    </div>
                @endif
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="row">

                    @if ($formulario->perfil === 0)
                        <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#modalperfil">
                            Agregar Información
                        </button>
                    @else
                        <div class="col-md-12">
                            <p class="text-dark"><strong>Seguro Contrado: </strong>{{ $formulario->profile->tiposeguro }}</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark"><strong>Comisión: </strong>{{ $formulario->profile->comision }}</p>
                        </div>
                        <div class="col-md-12">
                            <p class="text-dark"><strong>Observaciones:</p>
                            <p class="text-dark">
                                </strong>{{ $formulario->profile->observaciones }}
                            </p>
                        </div>
                    @endif


                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Dependientes</h6>
                <div class="">
                    <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modaldependiente"><i class="fas fa-plus"></i> Agregar Dependiente</a>
                </div>
              </div>
              <!-- Card Body -->
              <div class="card-body">

                    @if ($formulario->dependientes === 'no')
                        <h3>No tiene Dependientes registrados</h3>
                    @else
                        <div class="thead-light">
                            <table id="dependientes" class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>SSN</th>
                                        <th>Relación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dependientes as $dependiente)
                                        <tr>
                                            <td>{{ $cont++ }}</td>
                                            <td>{{ $dependiente->nombre }} {{ $dependiente->nombre2 }}</td>
                                            <td>{{ $dependiente->apellido }} {{ $dependiente->apellido2 }}</td>
                                            <td>{{ $dependiente->ssn }}</td>
                                            <td>{{ $dependiente->relacion }}</td>
                                            <td>
                                                <div class="row">
                                                    <a href="{{ route('dependiente.show', $dependiente) }}" class="mr-1 btn btn-success btn-sm">Ver Depediente</a>
                                                    <form action="{{ route('dependiente.destroy', $dependiente) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="ml-1 mr-1 btn btn-danger btn-sm">Eliminar</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

              </div>
            </div>
        </div>
    </div>

</div>
<!-- .animated -->


<!-- Modal Perfil -->
<div class="modal fade" id="modalperfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Información del Perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('perfil.store', $formulario) }}" method="POST" class="bg-white">

                    @csrf
                    <div class="row form-group">
                        <input type="hidden" id="id" name="id" class="form-control" value="{{ $formulario->id }}" >
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="seguro">Tipo de Seguro:</label>
                            <select type="text" id="seguro" name="seguro" class="form-control">
                                <option selected value="">Selecciona...</option>
                                @foreach ($seguros as $seguro)
                                    <option value="{{ $seguro->nombre }}">{{ $seguro->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="comision">Comisión:</label>
                            <input type="text" id="comision" name="comision" class="form-control" >
                        </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col-md-12 ">
                            <label class="text-black " for="observaciones">Mensaje</label>
                            <textarea name="observaciones" id="observaciones" cols="30 " rows="4" class="form-control " minlength="3"></textarea >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit " value="Enviar " class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
                    </div>

                </form>
            </div>

        </div>
  </div>
</div>

<!-- Modal Dependiente -->
<div class="modal fade" id="modaldependiente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Dependiente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dependiente.store', $formulario) }}" method="POST" class="bg-white">

                    @csrf
                    <input type="hidden" id="id" name="id" class="form-control" value="{{ $formulario->id }}" >

                    <div class="row form-group">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="nombre">Primer Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" >
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="nombre2">Segundo Nombre:</label>
                            <input type="text" id="nombre2" name="nombre2" class="form-control" >
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="apellido">Primer Apellido:</label>
                            <input type="text" id="apellido" name="apellido" class="form-control" >
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="apellido2">Segundo Apellido:</label>
                            <input type="text" id="apellido2" name="apellido2" class="form-control" >
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label for="genero">Genero:</label>
                            <select type="text" id="genero" name="genero" class="form-control" required>
                                <option selected value="">Selecciona...</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="text-black" for="fechan">Fecha de Nacimiento:</label>
                            <div class="input-group date rg-date">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" id="fechan" name="fechan" class="form-control" required><span class="input-group-addon"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-4 mb-md-0">
                            <label for="relacion">Relación:</label>
                            <select type="text" id="relacion" name="relacion" class="form-control">
                                <option selected value="">Selecciona...</option>
                                <option value="Padre">Padre</option>
                                <option value="Madre">Madre</option>
                                <option value="Hijo">Hijo</option>
                                <option value="Hija">Hija</option>
                                <option value="Abuelo">Abuelo</option>
                                <option value="Abuela">Abuela</option>
                                <option value="Nieto">Nieto</option>
                                <option value="Nieta">Nieta</option>
                                <option value="sobrino">sobrino</option>
                                <option value="sobrina">sobrina</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label for="estatus">Estatus Legal:</label>
                            <select type="text" id="estatus" name="estatus" class="form-control" required>
                                <option selected value="">Selecciona...</option>
                                <option value="Ciudadano">Ciudadano</option>
                                <option value="Residente">Residente</option>
                                <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="ssn">Nro. Seguro Social</label>
                            <input name="ssn" id="ssn" type="text"  class="form-control" placeholder="000-00-000" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit " value="Enviar " class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
                    </div>

                </form>
            </div>

        </div>
  </div>
</div>
@endsection
