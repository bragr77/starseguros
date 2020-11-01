<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Stars Seguros</title>

    <link rel="icon" type="image/png" href="{{  asset('favicon.png') }}"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>

<body data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="container  d-flex justify-content-center" style="margin-top: 150px">

        <div class="col-md-8">
            <div class="card bg-light">
                <div class="card-header text-center">
                    <img class="img-fluid" src="{{  asset('img/logo2.png') }}" alt="Logo">
                </div>
                <div class="card-body text-center">
                  <h5 class="card-title">Tu Formulario ha sido enviado.</h5>
                  <p class="card-text">Te has Registrado exitosamente.</p>
                  <p class="card-text">¡Gracias por confiar en nosotros!</p>
                  <hr>
                  <h5 class="card-title">Your Form has been sent.</h5>
                  <p class="card-text">You have successfully registered.</p>
                  <p class="card-text">Thanks for trusting us!</p>
                  <br>
                  <a class="btn btn-primary btn-block" href="{{ url('/') }}">Regresar / Return</a>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
