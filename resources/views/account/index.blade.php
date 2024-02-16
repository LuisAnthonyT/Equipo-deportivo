@extends('layout')
@section('title', 'Cuentas')
@section('content')
<div class="users">
    @forelse ($users as $user)
    <div class="user">
        <h2>{{ $user->name}}</h2>
        <span>Fecha de nacimiento: {{ $user->birthday}}</span>
    </div>
    @empty
    <span>No hay usuarios</span>
    @endforelse
</div>
@endsection
