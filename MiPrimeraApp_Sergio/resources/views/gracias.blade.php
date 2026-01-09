<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gracias</title>
</head>
<body>
    <h1>¡Gracias por tu mensaje!</h1>
    <p>Hemos recibido la siguiente información:</p>
    
    <ul>
        <li><strong>Nombre:</strong> {{ $datos['nombre'] }}</li>
        <li><strong>Email:</strong> {{ $datos['correo'] }}</li>
        <li><strong>Mensaje:</strong> {{ $datos['mensaje'] }}</li>
    </ul>

    <a href="{{ route('contact.show') }}">Volver al formulario</a>
</body>
</html>