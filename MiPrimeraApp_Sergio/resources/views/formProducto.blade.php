<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Producto</title>
</head>

<body>

    <h1>Crear Producto</h1>

    <form action="{{ route('procesarFormProducto') }}" method="POST">
        @csrf

       Nombre: <input type="text" name="nombre"><br>
       Descripcion: <input type="text" name="descripcion"><br>
       Precio: <input type="number" name="precio"><br>
       Stock: <input type="number" name="stock"><br>


        <button type="submit">Crear Producto</button>
    </form>

</body>

</html>