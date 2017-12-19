<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mi sitio</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Inicio</a>
            <a href="{{ route('saludos', 'jorge') }}">Saludo</a>
            <a href="{{ route('contactanos') }}">Contactos</a>
        </nav>
    </header>
    @yield('contenido')
    <footer>@Copyright {{ date('Y') }}</footer>
</body>
</html>