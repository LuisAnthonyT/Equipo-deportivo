{{-- VISIBLE PARA TODOS LOS ROLES --}}
@extends('layout')
@section('content')
<div class="events">
    @foreach ($events as $event)
    <div class="event">
       @guest
            <h2>{{ $event->name }}</h2>
        @else
            <h2><a href="{{ route('events.show', $event)}}">{{ $event->name }}</a></h2>
       @endguest

        <span>{{ $event->description }}</span><br>

        @auth
            @if (Auth::user()->rol == 'admin')
                <a href="">Modificar</a>
                <a href="">Eliminar</a>
                @else
                <a href="">Me gusta</a>
            @endif
        @endauth
    </div>
    <hr>
    @endforeach
</div>
@endsection
