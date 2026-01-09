<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Mi Primer Formulario</title>
</head>

<body>

    <h1>Registro de Usuario</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>


        <button type="submit">Enviar</button>
    </form>

</body>

</html>