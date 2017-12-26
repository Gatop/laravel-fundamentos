@extends('layout')

@section('contenido')
    <h1>Usuarios</h1>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Role</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            {{ $role->display_name }}
                        @endforeach
                    </td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop