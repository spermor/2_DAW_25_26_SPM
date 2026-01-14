<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Articulo</title>
</head>

<body>

    <h1>Crear Articulo</h1>

    <form action="{{ route('procesarFormArticulo') }}" method="POST">
        @csrf

       Titulo: <input type="text" name="title"><br>
       Contenido: <input type="text" name="content"><br>
       Fecha: <input type="date" name="publish_date"><br>
       Categoria: <input type="text" name="category"><br>
       Nº Visitas: <input type="number" name="views"><br>


        <button type="submit">Crear articulo</button>
    </form>

</body>

</html>