<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Contacto</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div>
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </div>
        <br>
        <div>
            <label>Correo electrónico:</label><br>
            <input type="email" name="correo" value="{{ old('correo') }}">
        </div>
        <br>
        <div>
            <label>Mensaje:</label><br>
            <textarea name="mensaje">{{ old('mensaje') }}</textarea>
        </div>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>