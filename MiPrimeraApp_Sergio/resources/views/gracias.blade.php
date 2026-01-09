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
        <li>Nombre:{{ $nombre }}</li>
        <li>Email:{{ $correo }}</li>
        <li>Mensaje:{{ $mensaje }}</li>
    </ul>

    <a href="{{ route('contact.show') }}">Volver al formulario</a>
</body>
</html>