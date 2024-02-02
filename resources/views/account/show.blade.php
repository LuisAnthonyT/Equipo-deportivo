@extends('layout')
@section('title', 'Cuenta')
@section('content')
    <div class="account">
        <h1>Datos</h1>
        <span>Nombre: {{ $user->name}}</span><br>
        <span>Email: {{ $user->email}}</span><br>
        <span>Fecha de nacimiento: {{ $user->birthday}}</span><br>
        <span>Rol: {{ $user->rol}}</span><br>
        <a href="{{ route('user.edit', $user)}}">Modificar datos</a>
    </div>
@endsection
