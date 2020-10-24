<!DOCTYPE html>
<html lang="es">
<head>

</head>
<body>

    <h3>Este correo fue enviado desde el portal www.starsseguros.com</h3>

    <h4>Por el Sr(a). {{ $datosemail['nombre'] }}</h4>

    <h4>Telefono: {{ $datosemail['telefono'] }} </h4>

    <h4>Email: {{ $datosemail['email'] }}</h4>

    <h4>Asunto:</h4>
    <p>{{ $datosemail['asunto'] }}</p>

    <h4>Mensaje:</h4>
    <p>{{ $datosemail['mensaje'] }}</p>

</body>
</html>
