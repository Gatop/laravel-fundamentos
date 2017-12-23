<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style type="text/css">
        .active {
            text-decoration: none;
            color: green;
        }

        .error {
            color: red;
            font-size: 10px;
        }
    </style>
    <title>Mi sitio</title>
</head>
<body>
    <header>
        <?php  function activeMenu($url){
            return request()->is($url) ? 'active' : '';
        }?>
        <nav>
            <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a>
            <a class="{{ activeMenu('saludos/*') }}" href="{{ route('saludos', 'jorge') }}">Saludo</a>
            <a class="{{ activeMenu('mensajes/create') }}" href="{{ route('mensajes.create') }}">Contactos</a>
            @if (auth()->check())
                <a class="{{ activeMenu('mensajes') }}" href="{{ route('mensajes.index') }}">Mensajes</a>
                <a href="/logout">Logout {{auth()->user()->name }}</a>
            @endif
            @if (auth()->guest())
                <a class="{{ activeMenu('login') }}" href="/login">Login</a>
            @endif
        </nav>
    </header>
    @yield('contenido')
    <footer>@Copyright {{ date('Y') }}</footer>
</body>
</html>