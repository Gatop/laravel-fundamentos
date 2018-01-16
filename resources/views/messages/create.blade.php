@extends('layout')

@section('contenido')
    <h1>Contactos</h1>
    @if( session()->has('info'))
        <h3>{{ session('info') }}</h3>
    @else
    <form method="POST" action="{{route('mensajes.store')}}">
        @include('messages.form')
    </form>
    <hr>
    @endif
@stop