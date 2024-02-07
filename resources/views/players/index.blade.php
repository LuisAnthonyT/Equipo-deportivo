@extends('layout')
@section('title', 'Jugadores')
@section('content')
    @empty($players)
        No hay jugadores
    @else
        <h1>Jugadores</h1>
        @foreach ($players as $player)
            @if ($player->visible == true)
                @guest
                    <span>{{ $player->name}}</span>
                @else
                    <span><a href="{{ route('players.show', $player)}}">{{ $player->name}}</a></span>
                @endguest
            @endif
        @endforeach
    @endempty
@endsection
