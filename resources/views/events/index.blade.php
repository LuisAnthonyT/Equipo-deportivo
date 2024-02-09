{{-- EVENTOS VISIBLE PARA TODOS LOS ROLES --}}
@extends('layout')
@section('title', 'Eventos')
@section('content')
<div class="events">
    @foreach ($events as $event)
    <div class="event">
        {{-- SI NO SE ESTA LOGUEADO, SOLO SE MOSTRARÁ EL NOMBRE Y LA DESCRIPCIÓN --}}
       @guest
            <h2>{{ $event->name }}</h2>
        @else
        {{-- SI SE ESTA LOGUEADO, TENDRÁ UN ENLACE PARA VER EL EVENTO EN DETALLE --}}
            <h2><a href="{{ route('events.show', $event)}}">{{ $event->name }}</a></h2>
       @endguest

        <span>{{ $event->description }}</span><br>

        @auth
            {{-- SI SE TRATA DEL ADMIN, TENDRÁ EL ROL DE MODIFICAR Y ELIMINAR CADA EVENTO  --}}
            @if (Auth::user()->rol == 'admin')
                <a href="{{ route('events.edit', $event)}}">Modificar</a>
                <form action="{{ route('events.destroy', $event)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Eliminar">
                </form>
                @else
                {{-- SI SE ESTA LOGUEADO, SE PODRÁ DAR LIKE AL EVENTO --}}
                <form action="{{ route('event.like', $event)}}" method="post">
                    @csrf
                    <button type="submit">Me gusta</button>
                </form>
                @endif
        @endauth
    </div>
    <hr>
    @endforeach
</div>
@endsection
