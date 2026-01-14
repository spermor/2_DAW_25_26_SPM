<table>

<tr>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th>Stock</th>
</tr>

@foreach ($list as $producto)
<tr>
    <td>{{ $producto->nombre }}</td>
    <td>{{ $producto->descripcion }}</td>
    <td>{{ $producto->precio }}</td>
    <td>{{ $producto->stock }}</td>
</tr>

@endforeach

</table>
