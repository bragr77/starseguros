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

<div class="@if (is_null($formulario->nombred1)) d-none @else @endif">
    <h4 class="text-center">Información Dependientes</h4>
    <hr>
    <table class="table table-bordered ">
        <tbody>
          <tr>
            <td scope="col"><strong>1. Nombre:</strong> {{ $formulario->nombred1 }}</td>
            <td scope="col"><strong>Genero:</strong> {{ $formulario->generod1 }}</td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong> {{ $formulario->fechand1 }}</td>
          </tr>
          <tr>
            <td scope="col"><strong>Relación:</strong> {{ $formulario->relaciond1 }}</td>
            <td scope="col"><strong>Estatus:</strong> {{ $formulario->estatusd1 }}</td>
            <td scope="col"><strong>SSN:</strong> {{ $formulario->ssnd1 }}</td>
          </tr>
        </tbody>
    </table>
    <table class="table table-bordered @if (is_null($formulario->nombred2)) d-none @else @endif">
        <tbody>
          <tr>
            <td scope="col"><strong>2. Nombre:</strong> {{ $formulario->nombred2 }}</td>
            <td scope="col"><strong>Genero:</strong> {{ $formulario->generod2 }}</td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong> {{ $formulario->fechand2 }}</td>
          </tr>
          <tr>
            <td scope="col"><strong>Relación:</strong> {{ $formulario->relaciond2 }}</td>
            <td scope="col"><strong>Estatus:</strong> {{ $formulario->estatusd2 }}</td>
            <td scope="col"><strong>SSN:</strong> {{ $formulario->ssnd2 }}</td>
          </tr>
        </tbody>
    </table>
    <table class="table table-bordered @if (is_null($formulario->nombred3)) d-none @else @endif">
        <tbody>
          <tr>
            <td scope="col"><strong>3. Nombre:</strong> {{ $formulario->nombred3 }}</td>
            <td scope="col"><strong>Genero:</strong> {{ $formulario->generod3 }}</td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong> {{ $formulario->fechand3 }}</td>
          </tr>
          <tr>
            <td scope="col"><strong>Relación:</strong> {{ $formulario->relaciond3 }}</td>
            <td scope="col"><strong>Estatus:</strong> {{ $formulario->estatusd3 }}</td>
            <td scope="col"><strong>SSN:</strong> {{ $formulario->ssnd3 }}</td>
          </tr>
        </tbody>
    </table>
    <table class="table table-bordered @if (is_null($formulario->nombred4)) d-none @else @endif">
        <tbody>
          <tr>
            <td scope="col"><strong>4. Nombre:</strong> {{ $formulario->nombred4 }}</td>
            <td scope="col"><strong>Genero:</strong> {{ $formulario->generod4 }}</td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong> {{ $formulario->fechand4 }}</td>
          </tr>
          <tr>
            <td scope="col"><strong>Relación:</strong> {{ $formulario->relaciond4 }}</td>
            <td scope="col"><strong>Estatus:</strong> {{ $formulario->estatusd4 }}</td>
            <td scope="col"><strong>SSN:</strong> {{ $formulario->ssnd4 }}</td>
          </tr>
        </tbody>
    </table>
    <table class="table table-bordered @if (is_null($formulario->nombred5)) d-none @else @endif">
        <tbody>
          <tr>
            <td scope="col"><strong>5. Nombre:</strong> {{ $formulario->nombred5 }}</td>
            <td scope="col"><strong>Genero:</strong> {{ $formulario->generod5 }}</td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong> {{ $formulario->fechand5 }}</td>
          </tr>
          <tr>
            <td scope="col"><strong>Relación:</strong> {{ $formulario->relaciond5 }}</td>
            <td scope="col"><strong>Estatus:</strong> {{ $formulario->estatusd5 }}</td>
            <td scope="col"><strong>SSN:</strong> {{ $formulario->ssnd5 }}</td>
          </tr>
        </tbody>
    </table>
    <table class="table table-bordered @if (is_null($formulario->nombred6)) d-none @else @endif">
        <tbody>
          <tr>
            <td scope="col"><strong>6. Nombre:</strong> {{ $formulario->nombred6 }}</td>
            <td scope="col"><strong>Genero:</strong> {{ $formulario->generod6 }}</td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong> {{ $formulario->fechand6 }}</td>
          </tr>
          <tr>
            <td scope="col"><strong>Relación:</strong> {{ $formulario->relaciond6 }}</td>
            <td scope="col"><strong>Estatus:</strong> {{ $formulario->estatusd6 }}</td>
            <td scope="col"><strong>SSN:</strong> {{ $formulario->ssnd6 }}</td>
          </tr>
        </tbody>
    </table>
    <table class="table table-bordered @if (is_null($formulario->nombred7)) d-none @else @endif">
        <tbody>
          <tr>
            <td scope="col"><strong>7. Nombre:</strong> {{ $formulario->nombred7 }}</td>
            <td scope="col"><strong>Genero:</strong> {{ $formulario->generod7 }}</td>
            <td scope="col"><strong>Fecha de Nacimiento:</strong> {{ $formulario->fechand7 }}</td>
          </tr>
          <tr>
            <td scope="col"><strong>Relación:</strong> {{ $formulario->relaciond7 }}</td>
            <td scope="col"><strong>Estatus:</strong> {{ $formulario->estatusd7 }}</td>
            <td scope="col"><strong>SSN:</strong> {{ $formulario->ssnd7 }}</td>
          </tr>
        </tbody>
    </table>
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
