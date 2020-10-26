<!DOCTYPE html>
<html lang="es">

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

                    <a href="{{ url('/') }}" class="btn btn-outline-primary">Regresar</a>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-2 text-center">
        <h1>Formulario de Registro</h1>
    </div>

    <div class="container-fluid">
        <form action="#" method="GET" class="bg-white">

            <div class="container card py-3">

                <h4 class="text-center">Información Personal</h4>
                <hr>

                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
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
                        <label class="text-black" for="direccion">Código Postal:</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" required>
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
                    <div class="col-md-2 mb-3 mb-md-0">
                        <label for="ciudadania">Ciudadania:</label>
                        <select type="text" id="ciudadania" name="ciudadania" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nrociudadania">Número de ciudadania:</label>
                        <input type="text" id="nrociudadania" name="nrociudadania" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ssn">SSN:</label>
                        <input type="text" id="ssn" name="ssn" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2 mb-3 mb-md-0">
                        <label for="residente">Residente:</label>
                        <select type="text" id="residente" name="residente" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="pt">PT:</label>
                        <input type="text" id="pt" name="pt" class="form-control" required>
                    </div>

                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="estadocivil">Estado Civil:</label>
                        <select type="text" id="estadocivil" name="estadocivil" class="form-control" onChange="esposo(this.value);" required>
                            <option selected value="">Selecciona...</option>
                            <option value="casado">Casado(a)</option>
                            <option value="soltero">Soltero(a)</option>
                         </select>
                    </div>

                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="hijos">Hijos:</label>
                        <select type="text" id="hijos" name="hijos" class="form-control" onChange="hijo(this.value);" required required>
                            <option selected value="">Selecciona...</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="container card py-3 mt-2" id="casado" style="display: none;">

                <h4 class="text-center">Información del Conyugue</h4>
                <hr>

                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombrecy">Nombre Conyugue:</label>
                        <input type="text" id="nombrecy" name="nombrecy" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generocony">Genero:</label>
                        <select type="text" id="generocy" name="generocy" class="form-control" required>
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
                            <input type="text" id="fechancy" name="fechancy" class="form-control" required><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="ciudadaniacy">Ciudadania:</label>
                        <select type="text" id="ciudadaniacy" name="ciudadaniacy" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nrociudadaniacy">Número de ciudadania:</label>
                        <input type="text" id="nrociudadaniacy" name="nrociudadaniacy" class="form-control" required>
                    </div>
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="ssncy">SSN:</label>
                        <input type="text" id="ssncy" name="ssncy" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="residentecy">Residente:</label>
                        <select type="text" id="residentecy" name="residentecy" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="ptcy">PT:</label>
                        <input type="text" id="ptcy" name="ptcy" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="container card py-3 mt-2" id="si" style="display: none;">
                <h4 class="text-center">Información de Hijos</h4>
                <hr>

                <h4 class="text-center mb-3">Hijo 1</h4>
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombreh1">Nombre Conyugue:</label>
                        <input type="text" id="nombreh1" name="nombreh1" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generoh1">Genero:</label>
                        <select type="text" id="generoh1" name="generoh1" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechanh1">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechanh1" name="fechanh1" class="form-control" required><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="ciudadaniah1">Ciudadania:</label>
                        <select type="text" id="ciudadaniah1" name="ciudadaniah1" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nrociudadaniah1">Número de ciudadania:</label>
                        <input type="text" id="nrociudadaniah1" name="nrociudadaniah1" class="form-control" required>
                    </div>
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="ssnh1">SSN:</label>
                        <input type="text" id="ssnh1" name="ssnh1" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="residenteh1">Residente:</label>
                        <select type="text" id="residenteh1" name="residenteh1" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="pth1">PT:</label>
                        <input type="text" id="pth1" name="pth1" class="form-control" required>
                    </div>
                </div>
                <hr>

                <h4 class="text-center mb-3">Hijo 2</h4>
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombreh2">Nombre Conyugue:</label>
                        <input type="text" id="nombreh2" name="nombreh2" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generocony">Genero:</label>
                        <select type="text" id="generoh2" name="generoh2" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechanh2">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechanh2" name="fechanh2" class="form-control" required><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="ciudadaniah2">Ciudadania:</label>
                        <select type="text" id="ciudadaniah2" name="ciudadaniah2" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nrociudadaniah2">Número de ciudadania:</label>
                        <input type="text" id="nrociudadaniah2" name="nrociudadaniah2" class="form-control" required>
                    </div>
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="ssnh2">SSN:</label>
                        <input type="text" id="ssnh2" name="ssnh2" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="residenteh2">Residente:</label>
                        <select type="text" id="residenteh2" name="residenteh2" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="pth2">PT:</label>
                        <input type="text" id="pth2" name="pth2" class="form-control" required>
                    </div>
                </div>
                <hr>

                <h4 class="text-center mb-3">Hijo 3</h4>
                <div class="row form-group">
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="nombreh3">Nombre Conyugue:</label>
                        <input type="text" id="nombreh3" name="nombreh3" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="generocony">Genero:</label>
                        <select type="text" id="generoh3" name="generoh3" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="text-black" for="fechanh3">Fecha de Nacimiento:</label>
                        <div class="input-group date rg-date">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" id="fechanh3" name="fechanh3" class="form-control" required><span class="input-group-addon"></span>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="ciudadaniah3">Ciudadania:</label>
                        <select type="text" id="ciudadaniah3" name="ciudadaniah3" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="nrociudadaniah3">Número de ciudadania:</label>
                        <input type="text" id="nrociudadaniah3" name="nrociudadaniah3" class="form-control" required>
                    </div>
                    <div class="col-md-5 mb-3 mb-md-0">
                        <label class="text-black" for="ssnh3">SSN:</label>
                        <input type="text" id="ssnh3" name="ssnh3" class="form-control" required>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label for="residenteh3">Residente:</label>
                        <select type="text" id="residenteh3" name="residenteh3" class="form-control" required>
                            <option selected value="">Selecciona...</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="pth3">PT:</label>
                        <input type="text" id="pth3" name="pth3" class="form-control" required>
                    </div>
                </div>
                <hr>

            </div>

            <div class="container card py-3 mt-2">
                <h4 class="text-center">Información de Ingresos</h4>
                <hr>
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-black" for="ingreso">Ingreso Anual $:</label>
                        <input type="text" id="ingreso" name="ingreso" class="form-control" required>
                    </div>
                </div>
                <hr>
                <h4 class="text-center">Información de Ingresos</h4>
                <hr>
                <div class="row form-group">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label class="text-black" for="banco">Nombre del Banco:</label>
                        <input type="text" id="banco" name="banco" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label class="text-black" for="route">Route:</label>
                        <input type="text" id="route" name="route" class="form-control" required>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <label class="text-black" for="cuenta">Nro. de Cuenta:</label>
                        <input type="text" id="cuenta" name="cuenta" class="form-control" required>
                    </div>
                </div>
            </div>


            <div class="container">
                <button type="submit" class="btn btn-primary btn-block mt-4">Enviar</button>
            </div>

        </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="{{ asset('frontend/datepicker/js/bootstrap-datepicker-es.js') }}"></script>

    <script>
        $('.rg-date').datepicker({
            format: "dd/mm/yyyy"
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
        function hijo(id) {
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
</body>

</html>
