@extends("layouts.vistaNumeros")

@section("titulo")
Calculadora IMC
@endsection

@section("encabezado")
Calculadora IMC
@endsection

@section("contenido")
    IMC = peso / (altura x altura) <br>
    Segun sus datos introducidos ({{ $altura }}m de altura y {{ $peso }}kg de peso), su indice de masa corporal es {{ $imc }}. <br>
    @if($imc < 18.5)
    <img src="{{ asset('bajo.png') }}">
    @elseif($imc >= 18.5 && $imc <= 24.9)
    <img src="{{ asset('normal.png') }}">
    @elseif($imc >= 25 && $imc <= 29.9)
    <img src="{{ asset('sobrepeso.png') }}">
    @else
    <img src="{{ asset('obeso.png') }}">
    @endif
@endsection