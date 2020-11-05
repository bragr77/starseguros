@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h2 class="font-weight-bold text-center">Formulario de Registro</h2>

    <form action="{{ route('formularios.update', $formulario) }}" method="POST" class="bg-white">

        @method('PUT')
        @csrf

            <div class="container card py-3">
                <h4 class="text-center">Información Personal</h4>
                <hr>

                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required value="{{ $formulario->nombre }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="genero">Genero:</label>
                        <select type="text" id="genero" name="genero" class="form-control" required>
                            <option selected value="{{ $formulario->genero }}">{{ $formulario->genero }}</option>
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
                            <input type="text" id="fechan" name="fechan" class="form-control" required value="{{ $formulario->fechan }}"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" required value="{{ $formulario->direccion }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label class="text-black" for="ciudad">Ciudad:</label>
                        <input type="text" id="ciudad" name="ciudad" class="form-control" required value="{{ $formulario->ciudad }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label class="text-black" for="postal">Código Postal:</label>
                        <input type="text" id="postal" name="postal" class="form-control" required value="{{ $formulario->postal }}">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="telefono">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" required value="{{ $formulario->telefono }}">
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required value="{{ $formulario->email }}">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatus">Estatus Legal:</label>
                        <select type="text" id="estatus" name="estatus" class="form-control" required>
                            <option selected value="{{ $formulario->estatus }}">{{ $formulario->estatus }}</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssn">Nro. Seguro Social</label>
                        <input type="text" id="ssn" name="ssn" class="form-control" required value="{{ $formulario->ssn }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estadocivil">Estado Civil:</label>
                        <select type="text" id="estadocivil" name="estadocivil" class="form-control" required>
                            <option selected value="{{ $formulario->estadocivil }}">{{ $formulario->estadocivil }}</option>
                            <option value="casado">Casado(a)</option>
                            <option value="soltero">Soltero(a)</option>
                         </select>
                    </div>
                </div>
            </div>

            <div class="container card py-3 mt-2">

                <h4 class="text-center">Información del Conyugue</h4>
                <hr>

                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombrecy">Nombre Conyugue:</label>
                        <input type="text" id="nombrecy" name="nombrecy" class="form-control" value="{{ $formulario->nombrecy }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatuscy">Estatus Legal:</label>
                        <select type="text" id="estatuscy" name="estatuscy" class="form-control">
                            <option selected value="{{ $formulario->estatuscy }}">{{ $formulario->estatuscy }}</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssncy">Nro. Seguro Social</label>
                        <input type="text" id="ssn" name="ssncy" class="form-control" required value="{{ $formulario->ssncy }}">
                    </div>
                </div>

            </div>

            <div class="container card py-3 mt-2">

                <h4 class="text-center">Dependientes</h4>
                <hr>

                {{--  dependiente 1  --}}
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombred1">1. Nombre</label>
                        <input type="text" id="nombred1" name="nombred1" class="form-control" value="{{ $formulario->nombred1 }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generod1">Genero:</label>
                        <select type="text" id="generod1" name="generod1" class="form-control">
                            <option selected value="{{ $formulario->generod1 }}">{{ $formulario->generod1 }}</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand1">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechand1" name="fechand1" class="form-control" value="{{ $formulario->fechand1 }}"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond1">Relación:</label>
                        <select type="text" id="relaciond1" name="relaciond1" class="form-control">
                            <option selected value="{{ $formulario->relaciond1 }}">{{ $formulario->relaciond1 }}</option>
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd1">Estatus Legal:</label>
                        <select type="text" id="estatusd1" name="estatusd1" class="form-control">
                            <option selectedvalue="{{ $formulario->estatusd1 }}">{{ $formulario->estatusd1 }}</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd1">Nro. Seguro Social</label>
                        <input type="text" id="ssn" name="ssnd1" class="form-control" required value="{{ $formulario->ssnd1 }}">
                    </div>
                </div>
                {{--  Fin dependiente 1  --}}
                <hr>
                {{--  dependiente 2  --}}
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombred2">2. Nombre</label>
                        <input type="text" id="nombred2" name="nombred2" class="form-control" value="{{ $formulario->nombred2 }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generod2">Genero:</label>
                        <select type="text" id="generod2" name="generod2" class="form-control">
                            <option selected value="{{ $formulario->generod2 }}">{{ $formulario->generod2 }}</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand2">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechand2" name="fechand2" class="form-control" value="{{ $formulario->fechand2 }}"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond2">Relación:</label>
                        <select type="text" id="relaciond2" name="relaciond2" class="form-control">
                            <option selected value="{{ $formulario->relaciond2 }}">{{ $formulario->relaciond2 }}</option>
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd2">Estatus Legal:</label>
                        <select type="text" id="estatusd2" name="estatusd2" class="form-control">
                            <option selected value="{{ $formulario->estatusd2 }}">{{ $formulario->estatusd2 }}</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd2">Nro. Seguro Social</label>
                        <input type="text" id="ssn" name="ssnd2" class="form-control" required value="{{ $formulario->ssnd2 }}">
                    </div>
                </div>
                {{--  Fin dependiente 2  --}}
                <hr>
                {{--  dependiente 3  --}}
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombred3">3. Nombre</label>
                        <input type="text" id="nombred3" name="nombred3" class="form-control" value="{{ $formulario->nombred3 }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generod3">Genero:</label>
                        <select type="text" id="generod3" name="generod3" class="form-control">
                            <option selected value="{{ $formulario->generod3 }}">{{ $formulario->generod3 }}</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand3">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechand3" name="fechand3" class="form-control" value="{{ $formulario->fechand3 }}"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond1">Relación:</label>
                        <select type="text" id="relaciond3" name="relaciond3" class="form-control">
                            <option selected value="{{ $formulario->relaciond3 }}">{{ $formulario->relaciond3 }}</option>
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd3">Estatus Legal:</label>
                        <select type="text" id="estatusd3" name="estatusd3" class="form-control">
                            <option selected value="{{ $formulario->estatusd3 }}">{{ $formulario->estatusd3 }}</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd3">Nro. Seguro Social</label>
                        <input type="text" id="ssn" name="ssnd3" class="form-control" required value="{{ $formulario->ssnd3 }}">
                    </div>
                </div>
                {{--  Fin dependiente 3  --}}
                <hr>
                {{--  dependiente 4  --}}
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombred4">4. Nombre</label>
                        <input type="text" id="nombred4" name="nombred4" class="form-control" value="{{ $formulario->nombred4 }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generod4">Genero:</label>
                        <select type="text" id="generod4" name="generod4" class="form-control">
                            <option selected value="{{ $formulario->generod4 }}">{{ $formulario->generod4 }}</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand4">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechand4" name="fechand4" class="form-control" value="{{ $formulario->fechand4 }}"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond4">Relación:</label>
                        <select type="text" id="relaciond4" name="relaciond4" class="form-control">
                            <option selected value="{{ $formulario->relaciond4 }}">{{ $formulario->relaciond4 }}</option>
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd4">Estatus Legal:</label>
                        <select type="text" id="estatusd4" name="estatusd4" class="form-control">
                            <option selected value="{{ $formulario->estatusd4 }}">{{ $formulario->estatusd4 }}</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd4">Nro. Seguro Social</label>
                        <input type="text" id="ssn" name="ssnd4" class="form-control" required value="{{ $formulario->ssnd4 }}">
                    </div>
                </div>
                {{--  Fin dependiente 4  --}}
                <hr>
                {{--  dependiente 5  --}}
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombred5">5. Nombre</label>
                        <input type="text" id="nombred5" name="nombred5" class="form-control" value="{{ $formulario->nombred5 }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generod5">Genero:</label>
                        <select type="text" id="generod5" name="generod5" class="form-control">
                            <option selected value="{{ $formulario->generod5 }}">{{ $formulario->generod5 }}</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand5">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechand5" name="fechand5" class="form-control" value="{{ $formulario->fechand5 }}"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond5">Relación:</label>
                        <select type="text" id="relaciond5" name="relaciond5" class="form-control">
                            <option selected value="{{ $formulario->relaciond5 }}">{{ $formulario->relaciond5 }}</option>
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd5">Estatus Legal:</label>
                        <select type="text" id="estatusd5" name="estatusd5" class="form-control">
                            <option selected value="{{ $formulario->estatusd5 }}">{{ $formulario->estatusd5 }}</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd5">Nro. Seguro Social</label>
                        <input type="text" id="ssn" name="ssnd5" class="form-control" required value="{{ $formulario->ssnd5 }}">
                    </div>
                </div>
                {{--  Fin dependiente 5  --}}
                <hr>
                {{--  dependiente 6  --}}
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombred6">6. Nombre</label>
                        <input type="text" id="nombred6" name="nombred6" class="form-control" value="{{ $formulario->nombred6 }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generod6">Genero:</label>
                        <select type="text" id="generod6" name="generod6" class="form-control">
                            <option selected value="{{ $formulario->generod6 }}">{{ $formulario->generod6 }}</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand6">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechand6" name="fechand6" class="form-control" value="{{ $formulario->fechand6 }}"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond6">Relación:</label>
                        <select type="text" id="relaciond6" name="relaciond6" class="form-control">
                            <option selected value="{{ $formulario->relaciond6 }}">{{ $formulario->relaciond6 }}</option>
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd6">Estatus Legal:</label>
                        <select type="text" id="estatusd6" name="estatusd6" class="form-control">
                            <option selected value="{{ $formulario->estatusd6 }}">{{ $formulario->estatusd6 }}</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd6">Nro. Seguro Social</label>
                        <input type="text" id="ssn" name="ssnd6" class="form-control" required value="{{ $formulario->ssnd6 }}">
                    </div>
                </div>
                {{--  Fin dependiente 6  --}}
                <hr>
                {{--  dependiente 7  --}}
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombred7">7. Nombre</label>
                        <input type="text" id="nombred7" name="nombred7" class="form-control" value="{{ $formulario->nombred7 }}">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generod7">Genero:</label>
                        <select type="text" id="generod7" name="generod7" class="form-control">
                            <option selected value="{{ $formulario->generod7 }}">{{ $formulario->generod7 }}</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand7">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechand7" name="fechand7" class="form-control" value="{{ $formulario->fechand7 }}"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond7">Relación:</label>
                        <select type="text" id="relaciond7" name="relaciond7" class="form-control">
                            <option selected value="{{ $formulario->relaciond7 }}">{{ $formulario->relaciond7 }}</option>
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd7">Estatus Legal:</label>
                        <select type="text" id="estatusd7" name="estatusd7" class="form-control">
                            <option selected value="{{ $formulario->estatusd7 }}">{{ $formulario->estatusd7 }}</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd7">Nro. Seguro Social</label>
                        <input type="text" id="ssn" name="ssnd7" class="form-control" required value="{{ $formulario->ssnd7 }}">
                    </div>
                </div>
                {{--  Fin dependiente 7  --}}

            </div>

            <div class="container card py-3 mt-2">
                <h4 class="text-center">Información de Ingresos</h4>
                <hr>
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ingreso">Ingreso Grupal Anual en USD($):</label>
                        <input type="text" id="ingreso" name="ingreso" class="form-control" onkeyup="format(this)" onchange="format(this)" value="{{ $formulario->ingreso }}" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="banco">Nombre del Banco:</label>
                        <input type="text" id="banco" name="banco" class="form-control" value="{{ $formulario->banco }}" required>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="ruta">Ruta:</label>
                        <input type="text" id="ruta" name="ruta" class="form-control" value="{{ $formulario->ruta }}" required>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="cuenta">Nro. de Cuenta:</label>
                        <input type="text" id="cuenta" name="cuenta" class="form-control" value="{{ $formulario->cuenta }}" required>
                    </div>
                </div>
            </div>

            <div class="col-md-12 my-2">
                <div class="btn-group btn-block" role="group" aria-label="Basic example">
                    <button type="submit " value="Enviar " class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('panel') }}" class="btn btn-success">Regresar</a>
                </div>
            </div>
    </form>

</div>
<!-- .animated -->

<script>
    $('.rg-date').datepicker({
        format: "dd/mm/yyyy"
    });
</script>

<script>
    function format(input) {
        var num = input.value.replace(/\./g, '');
        if (!isNaN(num)) {
            num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
            num = num.split('').reverse().join('').replace(/^[\.]/, '');
            input.value = num;
        } else {
            alert('Solo se permiten numeros');
            input.value = input.value.replace(/[^\d\.]*/g, '');
        }
    }
</script>
@endsection
