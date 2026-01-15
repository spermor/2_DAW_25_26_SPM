@extends('layouts.blogBase')



@section('content')
 <form action="{{ route('procesarFormularioNoticia') }}" method="POST">
    @csrf
    Titular: <input type="text" name="titular"><br>
    Entradilla: <input type="text" name="entradilla"><br>
    Cuerpo: <input type="text" name="cuerpo"><br>

    <button type="submit">Crear Noticia</button>
</form>
@endsection


