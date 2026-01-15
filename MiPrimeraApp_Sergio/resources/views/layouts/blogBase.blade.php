<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Laravel HackBlog')</title>
    
    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    @yield('css')
</head>

<body>
    <header>
        <h1><a href="{{ url('/') }}">The HackBlog</a></h1>
    </header>

    <div id="container">
        <div id="main">
            @yield('content')
        </div>
    </div>

    <footer>Copyright © <span>Sergio <a href="{{ url('/') }}">The HackBlog</a></span></footer>
</body>

</html>