<!DOCTYPE html>
<html lang="es">
<head>

</head>
<body>

    <h3>Saludos {{ $datosemail['nombre'] }}</h3>
    <h3>Soy su corredor de seguros Jose Sanchez StarsSeguros</h3>
    <h3>Le envio la siguiente información</h3>

    <p><strong>Asunto:</strong> {{ $datosemail['asunto'] }}</p>

    <p><strong>Mensaje:</strong> {{ $datosemail['mensaje'] }}</p>

    <img src="{{ $message->embed('imgmensajes/'.$datosemail['imagen']) }}">
    {{--  para inscrustar imagenes  --}}

    {{--  <img class="img-fluid" src="{{ asset('imgmensajes/'.$mensajemasivo->imagen) }}" alt="">  --}}
</body>
</html>
