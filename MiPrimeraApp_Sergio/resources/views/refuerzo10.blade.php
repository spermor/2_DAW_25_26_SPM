<form action="{{ route('procesarRefuerzo10') }}" method="POST">
    @csrf

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    @endif

    n1: <input type="number" name="n1"><br>
    n2: <input type="number" name="n2"><br>
    <select name="operacion" id="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicar</option>
        <option value="division">Division</option>
        <option value="potencia">Potencia</option>
    </select><br>

    <button type="submit">Enviar</button>
</form>

@isset($resultado)
    El resultado es {{ $resultado }}
@endisset