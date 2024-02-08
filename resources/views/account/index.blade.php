@extends('layout')
@section('title', 'Cuentas')
@section('content')
    @forelse ($users as $user)
        <div class="user">
            <span>Nombre: {{ $user->name}}</span><br>
            <span>Fecha de nacimiento: {{ $user->birthday}}</span>
            <hr>
        </div>
    @empty
        <span>No hay usuarios</span>
    @endforelse
@endsection
