@extends("layouts.vistaNumeros")

@section("titulo")
    Sorteo de numeros
@endsection

@section("encabezado")
    Sorteo de numeros
@endsection

@section("contenido")
    El numero aleatorio es {{ $random }}
@endsection