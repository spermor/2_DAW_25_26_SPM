<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Producto</title>
</head>

<body>

    <h1>Crear Producto</h1>

    <form action="{{ route('procesarActualizarProducto', ["id" => $producto->id]) }}" method="POST">
        @csrf

        Nombre: <input type="text" name="nombre" value="{{ $producto->nombre }}"><br>
        Descripcion: <input type="text" name="descripcion" value="{{ $producto->descripcion }}"><br>
        Precio: <input type="number" name="precio" value="{{ $producto->precio }}"><br>
        Stock: <input type="number" name="stock" value="{{ $producto->stock }}"><br>


        <button type="submit">Actualizar Producto</button>
    </form>

</body>

</html>