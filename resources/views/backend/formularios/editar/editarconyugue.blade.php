@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h4 class="font-weight-bold text-center">
        Editar datos del conyugue de:
        <strong>
            {{ $formulario->nombre }}
            {{ $formulario->nombre2 }}
            {{ $formulario->apellido }}
            {{ $formulario->apellido2 }}
        </strong>
    </h4>

  <div class="container card">
        <form action="{{ route('editconyugue.update', $formulario) }}" method="POST" class="bg-white mt-5">

            @method('PUT')
            @csrf

            @if ($formulario->estadocivil == "soltero")
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="estadocivil">Estado Civil:</label>
                        <select type="text" id="estadocivil" name="estadocivil" class="form-control" onChange="esposo(this.value);" required>
                            <option selected value="{{ $formulario->estadocivil }}">{{ $formulario->estadocivil }}</option>
                            <option value="casado">Casado(a)</option>
                            <option value="soltero">Soltero(a)</option>
                         </select>
                    </div>
                </div>

                <div id="casado" style="display: none;">
                    <div class="row form-group">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="nombrecy">Primer Nombre:</label>
                            <input type="text" id="nombrecy" name="nombrecy" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="nombrecy2">Segundo Nombre:</label>
                            <input type="text" id="nombrecy2" name="nombrecy2" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="apellidocy">Primer Apellido:</label>
                            <input type="text" id="apellidocy" name="apellidocy" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="apellidocy2">Segundo Apellido:</label>
                            <input type="text" id="apellidocy2" name="apellidocy2" class="form-control">
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label for="generocony">Genero:</label>
                            <select type="text" id="generocy" name="generocy" class="form-control">
                                <option selected value="">Seleccionar...</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="text-black" for="fechancy">Fecha de Nacimiento:</label>
                            <div class="input-group date rg-date">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" id="fechancy" name="fechancy" class="form-control"><span class="input-group-addon"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label for="estatuscy">Estatus Legal:</label>
                            <select type="text" id="estatuscy" name="estatuscy" class="form-control">
                                <option selected value="">Seleccionar...</option>
                                <option value="Ciudadano">Ciudadano</option>
                                <option value="Residente">Residente</option>
                                <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="ssncy">Nro. Seguro Social</label>
                            <input id="ssncy" name="ssncy" type="text"  class="form-control" placeholder="000-00-000">
                        </div>
                    </div>
                </div>
            @endif

            @if (($formulario->estadocivil == "casado"))
            <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                    <label for="estadocivil">Estado Civil:</label>
                    <select type="text" id="estadocivil" name="estadocivil" class="form-control" onChange="esposo(this.value);" required>
                        <option selected value="casado">{{ $formulario->estadocivil }}</option>
                        <option value="casado">Casado(a)</option>
                        <option value="soltero">Soltero(a)</option>
                     </select>
                </div>
            </div>
                <div id="casado" style="display: block;">
                    <div class="row form-group">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="nombrecy">Primer Nombre:</label>
                            <input type="text" id="nombrecy" name="nombrecy" class="form-control" value="{{ $formulario->nombrecy }}">
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="nombrecy2">Segundo Nombre:</label>
                            <input type="text" id="nombrecy2" name="nombrecy2" class="form-control" value="{{ $formulario->nombrecy2 }}">
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="apellidocy">Primer Apellido:</label>
                            <input type="text" id="apellidocy" name="apellidocy" class="form-control" value="{{ $formulario->apellidocy }}">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="apellidocy2">Segundo Apellido:</label>
                            <input type="text" id="apellidocy2" name="apellidocy2" class="form-control" value="{{ $formulario->apellidocy2 }}">
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label for="generocony">Genero:</label>
                            <select type="text" id="generocy" name="generocy" class="form-control">
                                <option selected value="{{ $formulario->generocy }}">{{ $formulario->generocy }}</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="text-black" for="fechancy">Fecha de Nacimiento:</label>
                            <div class="input-group date rg-date">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" id="fechancy" name="fechancy" class="form-control" value="{{ $formulario->fechancy }}"><span class="input-group-addon"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label for="estatuscy">Estatus Legal:</label>
                            <select type="text" id="estatuscy" name="estatuscy" class="form-control">
                                <option selected value="{{ $formulario->estatuscy }}">{{ $formulario->estatuscy }}</option>
                                <option value="Ciudadano">Ciudadano</option>
                                <option value="Residente">Residente</option>
                                <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="text-black" for="ssncy">Nro. Seguro Social</label>
                            <input id="ssncy" name="ssncy" type="text"  class="form-control" value="{{ $formulario->ssncy }}">
                        </div>
                    </div>
                </div>

            @endif


            {{--  inputs vacios  --}}

            <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                    <input type="hidden" id="2nombrecy" name="2nombrecy" class="form-control">
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <input type="hidden" id="2nombrecy2" name="2nombrecy2" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                    <input type="hidden" id="2apellidocy" name="2apellidocy" class="form-control">
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <input type="hidden" id="2apellidocy2" name="2apellidocy2" class="form-control">
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <input type="hidden" id="2generocy" name="2generocy" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-4">
                    <input type="hidden" id="2fechancy" name="2fechancy" class="form-control">
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <input type="hidden" id="2estatuscy" name="2estatuscy" class="form-control">
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <input type="hidden" id="2ssncy" name="2ssncy" class="form-control">
                </div>
            </div>

            <div class="col-md-12 my-4">
                <div class="btn-group btn-block" role="group" aria-label="Basic example">
                    <button type="submit " value="Enviar " class="btn btn-primary">Actualizar</button>
                    <a href="{{ URL::previous() }}" class="btn btn-success">Regresar</a>
                </div>
            </div>

        </form>
    </div>



</div>
<!-- .animated -->

<script type="text/javascript">
    function esposo(id) {
        if (id == "casado") {
            $("#casado").show();
        }

        if (id == "soltero") {
            $("#casado").hide();
        }

        if (id == "") {
            $("#casado").hide();
        }
    }
</script>
@endsection


