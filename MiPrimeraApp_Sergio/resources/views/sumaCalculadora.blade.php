@extends("layouts.vistaNumeros")

@section("titulo")
    Suma de numeros
@endsection

@section("encabezado")
    Suma de numeros
@endsection

@section("contenido")
    El resultado de sumar {{ $n1 }} y {{ $n2 }} es {{ $resultado }}
@endsection