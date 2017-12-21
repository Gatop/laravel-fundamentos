@extends('layout')

@section('contenido')
<h1>Contactos</h1>

<form method="POST" action="contacto">
    <p>
        <label for="nombre">
            Nombre
            <input type="text" name="nombre" value="{{ old('nombre') }}">
            {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
        </label>
    </p>
    <p>
        <label for="email">
            Email
            <input type="email" name="email" value="{{ old('email') }}">
            {!! $errors->first('email', '<span class=error>:message</span>') !!}
        </label>
    </p>
    <p>
        <label for="mensaje">
            Mensaje
            <textarea name="mensaje" value="{{ old('mensaje') }}"></textarea>
            {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
        </label>
    </p>
    <p><input type="submit" value="Enviar"></p>
</form>
<hr>
@stop