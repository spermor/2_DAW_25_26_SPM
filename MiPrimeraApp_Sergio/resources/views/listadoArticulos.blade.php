<table>

<tr>
    <th>Titulo</th>
    <th>Contenido</th>
    <th>Fecha publicacion</th>
    <th>Categoria</th>
    <th>Visitas</th>
</tr>

@foreach ($list as $articulo)
<tr>
    <td>{{ $articulo->title }}</td>
    <td>{{ $articulo->content }}</td>
    <td>{{ $articulo->publish_date }}</td>
    <td>{{ $articulo->category }}</td>
    <td>{{ $articulo->views }}</td>
</tr>

@endforeach

</table>
