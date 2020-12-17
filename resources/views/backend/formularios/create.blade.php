@extends('backend.layouts.app')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <h2 class="font-weight-bold text-center">Formulario de Registro</h2>

    <form action="{{ route('formularios.store') }}" method="POST" class="bg-white">

        @csrf

            <div class="container card py-3">
                <h4 class="text-center">Información Personal</h4>
                <hr>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombre">Primer Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombre2">Segundo Nombre:</label>
                        <input type="text" id="nombre2" name="nombre2" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellido">Primer Apellido:</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellido2">Segundo Apellido:</label>
                        <input type="text" id="apellido2" name="apellido2" class="form-control">
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
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label class="text-black" for="ciudad">Ciudad:</label>
                        <input type="text" id="ciudad" name="ciudad" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label class="text-black" for="postal">Código Postal:</label>
                        <input type="text" id="postal" name="postal" class="form-control" maxlength="5" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="telefono">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
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
                        <input name="ssn" id="ssn" type="text"  class="form-control" placeholder="000-00-0000" required>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="estadocivil">Estado Civil:</label>
                        <select type="text" id="estadocivil" name="estadocivil" class="form-control" onChange="esposo(this.value);" required>
                            <option selected value="">Selecciona...</option>
                            <option value="casado">Casado(a)</option>
                            <option value="soltero">Soltero(a)</option>
                         </select>
                    </div>
                </div>
            </div>

            <div class="container card py-3 mt-2" id="casado" style="display: none;">

                <h4 class="text-center">Información del Conyugue</h4>
                <hr>

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
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="apellidocy2">Segundo Apellido:</label>
                        <input type="text" id="apellidocy2" name="apellidocy2" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generocony">Genero:</label>
                        <select type="text" id="generocy" name="generocy" class="form-control">
                            <option selected value="">Selecciona...</option>
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatuscy">Estatus Legal:</label>
                        <select type="text" id="estatuscy" name="estatuscy" class="form-control">
                            <option selected value="">Selecciona...</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="ssncy">Nro. Seguro Social</label>
                        <input id="ssncy" name="ssncy" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>

            </div>

            <div class="container card py-3 mt-2">
                <h4 class="text-center">Información de Ingresos</h4>
                <hr>
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ingreso">Ingreso Grupal Anual en USD($):</label>
                        <input type="text" id="ingreso" name="ingreso" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="banco">Nombre del Banco:</label>
                        <input type="text" id="banco" name="banco" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="ruta">Ruta:</label>
                        <input type="text" id="ruta" name="ruta" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="cuenta">Nro. de Cuenta:</label>
                        <input type="text" id="cuenta" name="cuenta" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="container card py-3 mt-2">
                <div class="col-md-3 mb-3 mb-md-0">
                    <label for="agregardependientes">Desea Agregar Dependientes:</label>
                    <select type="text" id="agregardependientes" name="agregardependientes" class="form-control" onChange="dependiente(this.value);" required>
                        <option selected value="no">No</option>
                        <option value="si">Si</option>
                        {{--  <option value="no">No</option>  --}}
                     </select>
                </div>
            </div>

            <div class="container card py-3 mt-2" id="si" style="display: none;">

                <h4 class="text-center">Dependientes</h4>
                <hr>

                {{--  dependiente 1  --}}
                <strong></strong>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred1">1. Primer Nombre</label>
                        <input type="text" id="nombred1" name="nombred1" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred12">Segundo Nombre</label>
                        <input type="text" id="nombred12" name="nombred12" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod1">Primer Apellido</label>
                        <input type="text" id="apellidod1" name="apellidod1" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod12">Segundo Apellido</label>
                        <input type="text" id="apellidod12" name="apellidod12" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod1">Genero:</label>
                        <select type="text" id="generod1" name="generod1" class="form-control">
                            <option selected value="">Selecciona...</option>
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
                            <input type="text" id="fechand1" name="fechand1" class="form-control"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond1">Relación:</label>
                        <select type="text" id="relaciond1" name="relaciond1" class="form-control">
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd1">Estatus Legal:</label>
                        <select type="text" id="estatusd1" name="estatusd1" class="form-control">
                            <option selected value="">Selecciona...</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd1">Nro. Seguro Social</label>
                        <input name="ssnd1" id="ssnd1" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 1  --}}
                <hr>
                {{--  dependiente 2  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred2">2. Primer Nombre</label>
                        <input type="text" id="nombred2" name="nombred2" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred22">Segundo Nombre</label>
                        <input type="text" id="nombred22" name="nombred22" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod2">Primer Apellido</label>
                        <input type="text" id="apellidod2" name="apellidod2" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod22">Segundo Apellido</label>
                        <input type="text" id="apellidod22" name="apellidod22" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod2">Genero:</label>
                        <select type="text" id="generod2" name="generod2" class="form-control">
                            <option selected value="">Selecciona...</option>
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
                            <input type="text" id="fechand2" name="fechand2" class="form-control"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond2">Relación:</label>
                        <select type="text" id="relaciond2" name="relaciond2" class="form-control">
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd2">Estatus Legal:</label>
                        <select type="text" id="estatusd2" name="estatusd2" class="form-control">
                            <option selected value="">Selecciona...</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd2">Nro. Seguro Social</label>
                        <input name="ssnd2" id="ssnd2" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 1  --}}
                <hr>
                {{--  dependiente 3  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred3">3. Primer Nombre</label>
                        <input type="text" id="nombred3" name="nombred3" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred32">Segundo Nombre</label>
                        <input type="text" id="nombred32" name="nombred32" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod3">Primer Apellido</label>
                        <input type="text" id="apellidod3" name="apellidod3" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod32">Segundo Apellido</label>
                        <input type="text" id="apellidod32" name="apellidod32" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod3">Genero:</label>
                        <select type="text" id="generod3" name="generod3" class="form-control">
                            <option selected value="">Selecciona...</option>
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
                            <input type="text" id="fechand3" name="fechand3" class="form-control"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond3">Relación:</label>
                        <select type="text" id="relaciond3" name="relaciond3" class="form-control">
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd3">Estatus Legal:</label>
                        <select type="text" id="estatusd3" name="estatusd3" class="form-control">
                            <option selected value="">Selecciona...</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd3">Nro. Seguro Social</label>
                        <input name="ssnd3" id="ssnd3" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 3  --}}
                <hr>
                {{--  dependiente 4  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred4">4. Primer Nombre</label>
                        <input type="text" id="nombred4" name="nombred4" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred42">Segundo Nombre</label>
                        <input type="text" id="nombred42" name="nombred42" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod4">Primer Apellido</label>
                        <input type="text" id="apellidod4" name="apellidod4" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod42">Segundo Apellido</label>
                        <input type="text" id="apellidod42" name="apellidod42" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod4">Genero:</label>
                        <select type="text" id="generod4" name="generod4" class="form-control">
                            <option selected value="">Selecciona...</option>
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
                            <input type="text" id="fechand4" name="fechand4" class="form-control"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond4">Relación:</label>
                        <select type="text" id="relaciond4" name="relaciond4" class="form-control">
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd4">Estatus Legal:</label>
                        <select type="text" id="estatusd4" name="estatusd4" class="form-control">
                            <option selected value="">Selecciona...</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd4">Nro. Seguro Social</label>
                        <input name="ssnd4" id="ssnd4" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 4  --}}
                <hr>
                {{--  dependiente 5  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred5">5. Primer Nombre</label>
                        <input type="text" id="nombred5" name="nombred5" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred52">Segundo Nombre</label>
                        <input type="text" id="nombred52" name="nombred52" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod5">Primer Apellido</label>
                        <input type="text" id="apellidod5" name="apellidod5" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod52">Segundo Apellido</label>
                        <input type="text" id="apellidod52" name="apellidod52" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod5">Genero:</label>
                        <select type="text" id="generod5" name="generod5" class="form-control">
                            <option selected value="">Selecciona...</option>
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
                            <input type="text" id="fechand5" name="fechand5" class="form-control"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond5">Relación:</label>
                        <select type="text" id="relaciond5" name="relaciond5" class="form-control">
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd5">Estatus Legal:</label>
                        <select type="text" id="estatusd5" name="estatusd5" class="form-control">
                            <option selected value="">Selecciona...</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd5">Nro. Seguro Social</label>
                        <input name="ssnd5" id="ssnd5" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 5  --}}
                <hr>
                {{--  dependiente 6  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred6">6. Primer Nombre</label>
                        <input type="text" id="nombred6" name="nombred6" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred62">Segundo Nombre</label>
                        <input type="text" id="nombred62" name="nombred62" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod6">Primer Apellido</label>
                        <input type="text" id="apellidod6" name="apellidod6" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod62">Segundo Apellido</label>
                        <input type="text" id="apellidod62" name="apellidod62" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod6">Genero:</label>
                        <select type="text" id="generod6" name="generod6" class="form-control">
                            <option selected value="">Selecciona...</option>
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
                            <input type="text" id="fechand6" name="fechand6" class="form-control"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond6">Relación:</label>
                        <select type="text" id="relaciond6" name="relaciond6" class="form-control">
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd6">Estatus Legal:</label>
                        <select type="text" id="estatusd6" name="estatusd6" class="form-control">
                            <option selected value="">Selecciona...</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd6">Nro. Seguro Social</label>
                        <input name="ssnd6" id="ssnd6" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 6  --}}
                <hr>
                {{--  dependiente 7  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred7">7. Primer Nombre</label>
                        <input type="text" id="nombred7" name="nombred7" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred72">Segundo Nombre</label>
                        <input type="text" id="nombred72" name="nombred72" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod7">Primer Apellido</label>
                        <input type="text" id="apellidod7" name="apellidod7" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod72">Segundo Apellido</label>
                        <input type="text" id="apellidod72" name="apellidod72" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod7">Genero:</label>
                        <select type="text" id="generod7" name="generod7" class="form-control">
                            <option selected value="">Selecciona...</option>
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
                            <input type="text" id="fechand7" name="fechand7" class="form-control"><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="relaciond7">Relación:</label>
                        <select type="text" id="relaciond7" name="relaciond7" class="form-control">
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
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd7">Estatus Legal:</label>
                        <select type="text" id="estatusd7" name="estatusd7" class="form-control">
                            <option selected value="">Selecciona...</option>
                            <option value="Ciudadano">Ciudadano</option>
                            <option value="Residente">Residente</option>
                            <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd7">Nro. Seguro Social</label>
                        <input name="ssnd7" id="ssnd7" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 7  --}}

            </div>

            <div class="col-md-12 my-2">
                <div class="btn-group btn-block" role="group" aria-label="Basic example">
                    <button type="submit " value="Enviar " class="btn btn-primary">Enviar</button>
                    <a href="{{ route('panel') }}" class="btn btn-success">Regresar</a>
                </div>
            </div>
    </form>

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

<script type="text/javascript">
    function dependiente(id) {
        if (id == "si") {
            $("#si").show();
        }

        if (id == "no") {
            $("#si").hide();
        }

        if (id == "") {
            $("#si").hide();
        }
    }
</script>

{{--  <script>
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
</script>  --}}
@endsection
