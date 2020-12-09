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
            <td scope="col"><strong>Nombre:</strong> {{ $formulario->nombre }}</td>
            <td scope="col"><strong>Genero:</strong> {{ $formulario->genero }}</td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong> {{ $formulario->fechan }}</td>
          </tr>
          <tr>
            <td scope="col" colspan="2"><strong>Direccion:</strong> {{ $formulario->direccion }}</td>
            <td scope="col"><strong>Ciudad:</strong> {{ $formulario->ciudad }}</td>
          </tr>
          <tr>
            <td scope="col"><strong>Código Postal:</strong> {{ $formulario->postal }}</td>
            <td scope="col"><strong>Teléfono:</strong> {{ $formulario->telefono }}</td>
            <td scope="col"><strong>Email:</strong> {{ $formulario->email }}</td>
          </tr>
          <tr>
            <td scope="col"><strong>Estatus:</strong> {{ $formulario->estatus }}</td>
            <td scope="col"><strong>SSN:</strong> {{ $formulario->ssn }}</td>
            <td scope="col"><strong>Estado Civil:</strong> {{ $formulario->estadocivil }}</td>
          </tr>
        </tbody>
    </table>
</div>

<div class="@if (is_null($formulario->nombrecy)) d-none @else @endif">
    <h4 class="text-center">Información Conyugue</h4>
    <hr>
    <table class="table table-bordered ">
        <tbody>
          <tr>
            <td scope="col"><strong>Nombre:</strong> {{ $formulario->nombrecy }}</td>
            <td scope="col"><strong>Genero:</strong> {{ $formulario->generocy }}</td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong> {{ $formulario->fechancy }}</td>
          </tr>
          <tr>
            <td scope="col"><strong>Estatus:</strong> {{ $formulario->estatuscy }}</td>
            <td scope="col" colspan="2"><strong>SSN:</strong> {{ $formulario->ssncy }}</td>
          </tr>
        </tbody>
    </table>
</div>

<div class="@if ($formulario->dependientes != 'si') d-none @else  @endif">

    <h4 class="text-center">Información Dependientes</h4>
    <hr>

    @foreach ($dependientes as $dependiente)
        <table class="table table-bordered ">
            <tbody>
              <tr>
                <td scope="col"><strong>{{ $cont++ }}. Nombre:</strong> {{ $dependiente->nombre }}</td>
                <td scope="col"><strong>Genero:</strong> {{ $dependiente->genero }}</td>
                <td scope="col"><strong>Fecha de Nacimiento:</strong> {{ $dependiente->fechan }}</td>
              </tr>
              <tr>
                <td scope="col"><strong>Relación:</strong> {{ $dependiente->relacion }}</td>
                <td scope="col"><strong>Estatus:</strong> {{ $dependiente->estatus }}</td>
                <td scope="col"><strong>SSN:</strong> {{ $dependiente->ssn }}</td>
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
            <td scope="col"><strong>Nombre del Banco:</strong> {{ $formulario->banco }}</td>
            <td scope="col"><strong>Ruta:</strong> {{ $formulario->ruta }}</td>
            <td scope="col"><strong>Nro. de Cuenta:</strong> {{ $formulario->cuenta }}</td>
          </tr>
        </tbody>
    </table>
</div>
</body>
</html>
