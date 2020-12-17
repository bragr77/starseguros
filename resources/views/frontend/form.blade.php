<!DOCTYPE html>
<html lang="en">

<head>
    <title>StarsSeguros Formulario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="{{  asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/datepicker/css/bootstrap-datepicker.standalone.min.css') }}"/>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="img-fluid" src="{{  asset('img/logonav.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <a href="{{ url('/') }}" class="btn btn-outline-primary">Return</a>
                </ul>
            </div>
        </div>
    </nav>

    <h2 class="font-weight-bold text-center">Registration Form</h2>

    <form action="{{ route('registro.store') }}" method="POST" class="bg-white">

        @csrf

            <div class="container card py-3">
                <h4 class="text-center">Personal information</h4>
                <hr>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombre">First Name:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombre2">Second Name:</label>
                        <input type="text" id="nombre2" name="nombre2" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellido">First Surname:</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellido2">Second Surname:</label>
                        <input type="text" id="apellido2" name="apellido2" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="genero">Gender:</label>
                        <select type="text" id="genero" name="genero" class="form-control" required>
                            <option selected value="">select...</option>
                            <option value="Femenino">Female</option>
                            <option value="Masculino">Male</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechan">Birthdate:</label>
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
                        <label class="text-black" for="direccion">Address:</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label class="text-black" for="ciudad">CCity:</label>
                        <input type="text" id="ciudad" name="ciudad" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label class="text-black" for="postal">ZIP Code:</label>
                        <input type="text" id="postal" name="postal" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="telefono">Telephone:</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="estatus">Legal status:</label>
                        <select type="text" id="estatus" name="estatus" class="form-control" required>
                            <option selected value="">Select...</option>
                            <option value="Ciudadano">Citizen</option>
                            <option value="Residente">Resident</option>
                            <option value="Permiso de Trabajo">(PT) Work permit</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="ssn">SSN</label>
                        <input name="ssn" id="ssn" type="text"  class="form-control" placeholder="000-00-0000" required>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="estadocivil">Marital status:</label>
                        <select type="text" id="estadocivil" name="estadocivil" class="form-control" onChange="esposo(this.value);" required>
                            <option selected value="">Select...</option>
                            <option value="casado">Married</option>
                            <option value="soltero">Single</option>
                         </select>
                    </div>
                </div>
            </div>

            <div class="container card py-3 mt-2" id="casado" style="display: none;">

                <h4 class="text-center">Spouse Information</h4>
                <hr>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombrecy">First Name:</label>
                        <input type="text" id="nombrecy" name="nombrecy" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombrecy2">Second Name:</label>
                        <input type="text" id="nombrecy2" name="nombrecy2" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidocy">First Surname:</label>
                        <input type="text" id="apellidocy" name="apellidocy" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="apellidocy2">Second Surname:</label>
                        <input type="text" id="apellidocy2" name="apellidocy2" class="form-control">
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generocony">Gender:</label>
                        <select type="text" id="generocy" name="generocy" class="form-control">
                            <option selected value="">Selecciona...</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechancy">Birthdate:</label>
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
                        <label for="estatuscy">Legal status::</label>
                        <select type="text" id="estatuscy" name="estatuscy" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Ciudadano">Citizen</option>
                            <option value="Residente">Resident</option>
                            <option value="Permiso de Trabajo">(PT) Work permit</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssncy">SSN</label>
                        <input id="ssncy" name="ssncy" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>

            </div>

            <div class="container card py-3 mt-2">
                <h4 class="text-center">Income Information</h4>
                <hr>
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ingreso">Annual Group Income in USD ($):</label>
                        <input type="text" id="ingreso" name="ingreso" class="form-control" onkeyup="format(this)" onchange="format(this)" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="banco">Name of the bank:</label>
                        <input type="text" id="banco" name="banco" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="ruta">Route:</label>
                        <input type="text" id="ruta" name="ruta" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="cuenta">Account number:</label>
                        <input type="text" id="cuenta" name="cuenta" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="container card py-3 mt-2">
                <div class="col-md-3 mb-3 mb-md-0">
                    <label for="agregardependientes">You want to add dependents:</label>
                    <select type="text" id="agregardependientes" name="agregardependientes" class="form-control" onChange="dependiente(this.value);" required>
                        <option selected value="no">No</option>
                        <option value="si">Yes</option>
                        {{--  <option value="no">No</option>  --}}
                     </select>
                </div>
            </div>

            <div class="container card py-3 mt-2" id="si" style="display: none;">

                <h4 class="text-center">Dependents</h4>
                <hr>

                {{--  dependiente 1  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred1">1. First Name:</label>
                        <input type="text" id="nombred1" name="nombred1" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred12">Second Name:</label>
                        <input type="text" id="nombred12" name="nombred12" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod1">First Surname:</label>
                        <input type="text" id="apellidod1" name="apellidod1" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod12">Second Surname:</label>
                        <input type="text" id="apellidod12" name="apellidod12" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod1">Gender:</label>
                        <select type="text" id="generod1" name="generod1" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Femenino">Female</option>
                            <option value="Masculino">Male</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand1">Birthdate:</label>
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
                        <label for="relaciond1">Relationship:</label>
                        <select type="text" id="relaciond1" name="relaciond1" class="form-control">
                            <option selected value="">Select...</option>
                            <option value="Padre">Father</option>
                            <option value="Madre">Mother</option>
                            <option value="Hijo">Son</option>
                            <option value="Hija">Daughter</option>
                            <option value="Abuelo">Grandfather</option>
                            <option value="Abuela">Grandmother</option>
                            <option value="Nieto">Grandchild</option>
                            <option value="Nieta">Granddaughter</option>
                            <option value="sobrino">nephew</option>
                            <option value="sobrina">niece</option>

                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd1">Legal status:</label>
                        <select type="text" id="estatusd1" name="estatusd1" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Ciudadano">Citizen</option>
                            <option value="Residente">Resident</option>
                            <option value="Permiso de Trabajo">(PT) Work permit</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd1">SSN:</label>
                        <input name="ssnd1" id="ssnd1" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 1  --}}
                <hr>
                {{--  dependiente 2  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred2">2. First Name:</label>
                        <input type="text" id="nombred2" name="nombred2" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred22">Second Name:</label>
                        <input type="text" id="nombred22" name="nombred22" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod2">First Surname:</label>
                        <input type="text" id="apellidod2" name="apellidod2" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod22">Second Surname:</label>
                        <input type="text" id="apellidod22" name="apellidod22" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod2">Gender:</label>
                        <select type="text" id="generod2" name="generod2" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Femenino">Female</option>
                            <option value="Masculino">Male</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand2">Birthdate:</label>
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
                        <label for="relaciond2">Relationship:</label>
                        <select type="text" id="relaciond2" name="relaciond2" class="form-control">
                            <option selected value="">Select...</option>
                            <option value="Padre">Father</option>
                            <option value="Madre">Mother</option>
                            <option value="Hijo">Son</option>
                            <option value="Hija">Daughter</option>
                            <option value="Abuelo">Grandfather</option>
                            <option value="Abuela">Grandmother</option>
                            <option value="Nieto">Grandchild</option>
                            <option value="Nieta">Granddaughter</option>
                            <option value="sobrino">nephew</option>
                            <option value="sobrina">niece</option>

                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd2">Legal status:</label>
                        <select type="text" id="estatusd2" name="estatusd2" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Ciudadano">Citizen</option>
                            <option value="Residente">Resident</option>
                            <option value="Permiso de Trabajo">(PT) Work permit</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd2">SSN:</label>
                        <input name="ssnd2" id="ssnd2" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 2  --}}
                <hr>
                {{--  dependiente 3  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred3">3. First Name:</label>
                        <input type="text" id="nombred3" name="nombred3" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred32">Second Name:</label>
                        <input type="text" id="nombred32" name="nombred32" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod3">First Surname:</label>
                        <input type="text" id="apellidod3" name="apellidod3" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod32">Second Surname:</label>
                        <input type="text" id="apellidod32" name="apellidod32" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod3">Gender:</label>
                        <select type="text" id="generod3" name="generod3" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Femenino">Female</option>
                            <option value="Masculino">Male</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand3">Birthdate:</label>
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
                        <label for="relaciond3">Relationship:</label>
                        <select type="text" id="relaciond3" name="relaciond3" class="form-control">
                            <option selected value="">Select...</option>
                            <option value="Padre">Father</option>
                            <option value="Madre">Mother</option>
                            <option value="Hijo">Son</option>
                            <option value="Hija">Daughter</option>
                            <option value="Abuelo">Grandfather</option>
                            <option value="Abuela">Grandmother</option>
                            <option value="Nieto">Grandchild</option>
                            <option value="Nieta">Granddaughter</option>
                            <option value="sobrino">nephew</option>
                            <option value="sobrina">niece</option>

                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd3">Legal status:</label>
                        <select type="text" id="estatusd3" name="estatusd3" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Ciudadano">Citizen</option>
                            <option value="Residente">Resident</option>
                            <option value="Permiso de Trabajo">(PT) Work permit</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd3">SSN:</label>
                        <input name="ssnd3" id="ssnd3" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 3  --}}
                <hr>
                {{--  dependiente 4  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred4">4. First Name:</label>
                        <input type="text" id="nombred4" name="nombred4" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred42">Second Name:</label>
                        <input type="text" id="nombred42" name="nombred42" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod4">First Surname:</label>
                        <input type="text" id="apellidod4" name="apellidod4" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod42">Second Surname:</label>
                        <input type="text" id="apellidod42" name="apellidod42" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod4">Gender:</label>
                        <select type="text" id="generod4" name="generod4" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Femenino">Female</option>
                            <option value="Masculino">Male</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand4">Birthdate:</label>
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
                        <label for="relaciond4">Relationship:</label>
                        <select type="text" id="relaciond4" name="relaciond4" class="form-control">
                            <option selected value="">Select...</option>
                            <option value="Padre">Father</option>
                            <option value="Madre">Mother</option>
                            <option value="Hijo">Son</option>
                            <option value="Hija">Daughter</option>
                            <option value="Abuelo">Grandfather</option>
                            <option value="Abuela">Grandmother</option>
                            <option value="Nieto">Grandchild</option>
                            <option value="Nieta">Granddaughter</option>
                            <option value="sobrino">nephew</option>
                            <option value="sobrina">niece</option>

                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd4">Legal status:</label>
                        <select type="text" id="estatusd4" name="estatusd4" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Ciudadano">Citizen</option>
                            <option value="Residente">Resident</option>
                            <option value="Permiso de Trabajo">(PT) Work permit</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd4">SSN:</label>
                        <input name="ssnd4" id="ssnd4" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 4  --}}
                <hr>
                {{--  dependiente 5  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred5">5. First Name:</label>
                        <input type="text" id="nombred5" name="nombred5" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred52">Second Name:</label>
                        <input type="text" id="nombred52" name="nombred52" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod5">First Surname:</label>
                        <input type="text" id="apellidod5" name="apellidod5" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod52">Second Surname:</label>
                        <input type="text" id="apellidod52" name="apellidod52" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod5">Gender:</label>
                        <select type="text" id="generod5" name="generod5" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Femenino">Female</option>
                            <option value="Masculino">Male</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand5">Birthdate:</label>
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
                        <label for="relaciond5">Relationship:</label>
                        <select type="text" id="relaciond5" name="relaciond5" class="form-control">
                            <option selected value="">Select...</option>
                            <option value="Padre">Father</option>
                            <option value="Madre">Mother</option>
                            <option value="Hijo">Son</option>
                            <option value="Hija">Daughter</option>
                            <option value="Abuelo">Grandfather</option>
                            <option value="Abuela">Grandmother</option>
                            <option value="Nieto">Grandchild</option>
                            <option value="Nieta">Granddaughter</option>
                            <option value="sobrino">nephew</option>
                            <option value="sobrina">niece</option>

                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd5">Legal status:</label>
                        <select type="text" id="estatusd5" name="estatusd5" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Ciudadano">Citizen</option>
                            <option value="Residente">Resident</option>
                            <option value="Permiso de Trabajo">(PT) Work permit</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd5">SSN:</label>
                        <input name="ssnd5" id="ssnd5" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 5  --}}
                <hr>
                {{--  dependiente 6  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred6">6. First Name:</label>
                        <input type="text" id="nombred6" name="nombred6" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred62">Second Name:</label>
                        <input type="text" id="nombred62" name="nombred62" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod6">First Surname:</label>
                        <input type="text" id="apellidod6" name="apellidod6" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod62">Second Surname:</label>
                        <input type="text" id="apellidod62" name="apellidod62" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod6">Gender:</label>
                        <select type="text" id="generod6" name="generod6" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Femenino">Female</option>
                            <option value="Masculino">Male</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand6">Birthdate:</label>
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
                        <label for="relaciond6">Relationship:</label>
                        <select type="text" id="relaciond6" name="relaciond6" class="form-control">
                            <option selected value="">Select...</option>
                            <option value="Padre">Father</option>
                            <option value="Madre">Mother</option>
                            <option value="Hijo">Son</option>
                            <option value="Hija">Daughter</option>
                            <option value="Abuelo">Grandfather</option>
                            <option value="Abuela">Grandmother</option>
                            <option value="Nieto">Grandchild</option>
                            <option value="Nieta">Granddaughter</option>
                            <option value="sobrino">nephew</option>
                            <option value="sobrina">niece</option>

                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd6">Legal status:</label>
                        <select type="text" id="estatusd6" name="estatusd6" class="form-control">
                             <option selected value="">Select...</option>
                            <option value="Ciudadano">Citizen</option>
                            <option value="Residente">Resident</option>
                            <option value="Permiso de Trabajo">(PT) Work permit</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd6">SSN:</label>
                        <input name="ssnd6" id="ssnd6" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 6  --}}
                <hr>
                {{--  dependiente 7  --}}
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred7">7. First Name:</label>
                        <input type="text" id="nombred7" name="nombred7" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nombred72">Second Name:</label>
                        <input type="text" id="nombred72" name="nombred72" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod7">First Surname:</label>
                        <input type="text" id="apellidod7" name="apellidod7" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="apellidod72">Second Surname:</label>
                        <input type="text" id="apellidod72" name="apellidod72" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="generod7">Gender:</label>
                        <select type="text" id="generod7" name="generod7" class="form-control">
                             <option selected value="">select...</option>
                            <option value="Femenino">Female</option>
                            <option value="Masculino">Male</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechand7">Birthdate:</label>
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
                        <label for="relaciond7">Relationship:</label>
                        <select type="text" id="relaciond7" name="relaciond7" class="form-control">
                            <option selected value="">select...</option>
                            <option value="Padre">Father</option>
                            <option value="Madre">Mother</option>
                            <option value="Hijo">Son</option>
                            <option value="Hija">Daughter</option>
                            <option value="Abuelo">Grandfather</option>
                            <option value="Abuela">Grandmother</option>
                            <option value="Nieto">Grandchild</option>
                            <option value="Nieta">Granddaughter</option>
                            <option value="sobrino">nephew</option>
                            <option value="sobrina">niece</option>

                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estatusd7">Legal status:</label>
                        <select type="text" id="estatusd7" name="estatusd7" class="form-control">
                             <option selected value="">select...</option>
                            <option value="Ciudadano">Citizen</option>
                            <option value="Residente">Resident</option>
                            <option value="Permiso de Trabajo">(PT) Work permit</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssnd7">SSN:</label>
                        <input name="ssnd7" id="ssnd7" type="text"  class="form-control" placeholder="000-00-0000">
                    </div>
                </div>
                {{--  Fin dependiente 7  --}}

            </div>

            <div class="container card py-3 mt-2">
                <div class="btn-group btn-block" role="group" aria-label="Basic example">
                    <button type="submit " value="Enviar " class="btn btn-primary">Enviar</button>
                    <a href="{{ url('/') }}" class="btn btn-success">Regresar</a>
                </div>
            </div>
    </form>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{  asset('backend/js/jquery.mask.min.js') }}"></script>
    <script src="{{  asset('backend/js/mascaras.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="{{ asset('frontend/datepicker/js/bootstrap-datepicker-es.js') }}"></script>

    <script>
        $('.rg-date').datepicker({
            format: "mm/dd/yyyy"
        });
    </script>

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
</body>

</html>

