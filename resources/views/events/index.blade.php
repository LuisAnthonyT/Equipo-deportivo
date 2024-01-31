{{-- VISIBLE PARA TODOS LOS ROLES --}}
@extends('layout')
@section('content')
<div class="events">
    @foreach ($events as $event)
    <div class="event">
        <h2>{{ $event->name }}</h2>
        <span>{{ $event->description }}</span><br>
        <span>Localización: {{ $event->location }}</span>
        <span>Fecha: {{ $event->date }}</span>
        <span>Tipo: {{ $event->type }}</span>
        @auth('role' == 'admin')
            <a href="">Modificar</a>
            <a href="">Eliminar</a>
        @endauth
    </div>
    <hr>
    @endforeach
</div>
@endsection
