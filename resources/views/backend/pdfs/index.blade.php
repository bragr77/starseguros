<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div>
    <h2 class="font-weight-bold text-center">Formulario de Registro</h2>
    <h4 class="text-center">Información Personal</h4>
    <hr>


    <table class="table table-bordered ">
        <tbody>
          <tr>
            <td scope="col"><strong>Nombres y Apellidos:</strong> </td>
            <td scope="col"><strong>Genero:</strong> </td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong></td>
          </tr>
          <tr>
            <td scope="col">{{ $formulario->nombre }} {{ $formulario->nombre2 }} {{ $formulario->apellido }} {{ $formulario->apellido2 }}</td>
            <td scope="col">{{ $formulario->genero }}</td>
            <td scope="col">{{ $formulario->fechan }}</td>
          </tr>

          <tr>
            <td scope="col" colspan="2"><strong>Direccion:</strong> </td>
            <td scope="col"><strong>Ciudad:</strong></td>
          </tr>
          <tr>
            <td scope="col" colspan="2">{{ $formulario->direccion }}</td>
            <td scope="col">{{ $formulario->ciudad }}</td>
          </tr>

          <tr>
            <td scope="col"><strong>Código Postal:</strong></td>
            <td scope="col"><strong>Teléfono:</strong></td>
            <td scope="col"><strong>Email:</strong></td>
          </tr>
          <tr>
            <td scope="col">{{ $formulario->postal }}</td>
            <td scope="col">{{ $formulario->telefono }}</td>
            <td scope="col">{{ $formulario->email }}</td>
          </tr>

          <tr>
            <td scope="col"><strong>Estatus:</strong></td>
            <td scope="col"><strong>SSN:</strong></td>
            <td scope="col"><strong>Estado Civil:</strong></td>
          </tr>
          <tr>
            <td scope="col">{{ $formulario->estatus }}</td>
            <td scope="col">{{ $formulario->ssn }}</td>
            <td scope="col">{{ $formulario->estadocivil }}</td>
          </tr>
        </tbody>
    </table>
</div>

<div class="@if (is_null($formulario->nombrecy)) d-none @else @endif">
    <br>
    <br>
    <br>
    <h4 class="text-center">Información Conyugue</h4>
    <hr>
    <table class="table table-bordered ">
        <tbody>
          <tr>
            <td scope="col"><strong>Nombres y Apellidos:</strong> </td>
            <td scope="col"><strong>Genero:</strong> </td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong> </td>
          </tr>
          <tr>
            <td scope="col">{{ $formulario->nombrecy }} {{ $formulario->nombrecy2 }} {{ $formulario->apellidocy }} {{ $formulario->apellidocy2 }}</td>
            <td scope="col">{{ $formulario->generocy }}</td>
            <td scope="col">{{ $formulario->fechancy }}</td>
          </tr>

          <tr>
            <td scope="col"><strong>Estatus:</strong></td>
            <td scope="col" colspan="2"><strong>SSN:</strong></td>
          </tr>
          <tr>
            <td scope="col">{{ $formulario->estatuscy }}</td>
            <td scope="col" colspan="2">{{ $formulario->ssncy }}</td>
          </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>
</div>

<div class="@if ($formulario->dependientes != 'si') d-none @else  @endif">

    <h4 class="text-center">Información Dependientes</h4>
    <hr>

    @foreach ($dependientes as $dependiente)
        <table class="table table-bordered ">
            <tbody>
              <tr>
                <td scope="col"><strong>{{ $cont++ }}. Nombres y Apellidos:</strong></td>
                <td scope="col"><strong>Genero:</strong></td>
                <td scope="col"><strong>Fecha de Nacimiento:</strong></td>
              </tr>
              <tr>
                <td scope="col">{{ $dependiente->nombre }} {{ $dependiente->nombre2 }} {{ $dependiente->apellido }} {{ $dependiente->apellido2 }}</td>
                <td scope="col">{{ $dependiente->genero }}</td>
                <td scope="col">{{ $dependiente->fechan }}</td>
              </tr>

              <tr>
                <td scope="col"><strong>Relación:</strong></td>
                <td scope="col"><strong>Estatus:</strong></td>
                <td scope="col"><strong>SSN:</strong></td>
              </tr>
              <tr>
                <td scope="col">{{ $dependiente->relacion }}</td>
                <td scope="col">{{ $dependiente->estatus }}</td>
                <td scope="col">{{ $dependiente->ssn }}</td>
              </tr>
            </tbody>
        </table>
    @endforeach

</div>

<div>
    <h4 class="text-center">Información Financiera</h4>
    <hr>
    <table class="table table-bordered ">
        <tbody>
          <tr>
            <td scope="col" colspan="2"><strong>Ingreso Grupal Anual $:</strong> {{ $formulario->ingreso }}</td>
          </tr>

          <tr>
            <td scope="col"><strong>Nombre del Banco:</strong></td>
            <td scope="col"><strong>Ruta:</strong></td>
            <td scope="col"><strong>Nro. de Cuenta:</strong></td>
          </tr>
          <tr>
            <td scope="col">{{ $formulario->banco }}</td>
            <td scope="col">{{ $formulario->ruta }}</td>
            <td scope="col">{{ $formulario->cuenta }}</td>
          </tr>
        </tbody>
    </table>
</div>
</body>
</html>
