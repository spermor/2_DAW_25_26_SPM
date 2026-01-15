<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Borrar</th>
        <th>Actualizar</th>
    </tr>

    @foreach ($list as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>
            <td><a href="{{ route("borrarProducto", ["id" => $producto->id]) }}">Borrar</a></td>
            <td><a href="producto/modificar/{{ $producto->id }}">Actualizar</a></td>
        </tr>
    @endforeach

</table>