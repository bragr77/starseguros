<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <h3 class="text-center">Reporte de Clientes</h3>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombres y Apellidos</th>
                <th scope="col">Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formularios as $formulario)

            <tr>
                <th scope="row">{{ $contr1++ }}</th>
                <td>{{$formulario->nombre }} {{$formulario->nombre2 }} {{$formulario->apellido }} {{$formulario->apellido2 }}</td>
                <td>{{$formulario->created_at->format('d / m / Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>
