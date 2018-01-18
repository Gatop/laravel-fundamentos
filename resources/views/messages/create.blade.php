@extends('layout')

@section('contenido')
    <h1>Mensaje</h1>
    @if( session()->has('info'))
        <h3>{{ session('info') }}</h3>
    @else
    <form method="POST" action="{{route('mensajes.store')}}">
        @include('messages.form', ['message' => new App\Message, 'showFields' => auth()->guest()])
    </form>
    <hr>
    @endif
@stop