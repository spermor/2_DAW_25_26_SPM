<form method="POST" action="{{ route('procesarSumaForm') }}">
 @csrf <!-- Para evitar ataques CSRF -->

 n1: <input type="number" name="n1"><br>
 n2: <input type="number" name="n2"><br>

 @if ($errors->any())
 @foreach ($errors->all() as $error)
 {{ $error }}<br>
 @endforeach
 @endif

 <button type="submit">Enviar</button>
 </form>