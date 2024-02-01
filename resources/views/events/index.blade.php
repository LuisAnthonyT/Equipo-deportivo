{{-- VISIBLE PARA TODOS LOS ROLES --}}
@extends('layout')
@section('title', 'Eventos')
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
                <a href="{{ route('events.edit', $event)}}">Modificar</a>
                <form action="{{ route('events.destroy', $event)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar">
                </form>
                @else
                <a href="">Me gusta</a>
            @endif
        @endauth
    </div>
    <hr>
    @endforeach
</div>
@endsection
