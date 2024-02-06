@extends('layout')
@section('title', 'Jugadores')
@section('content')
    @empty($players)
        No hay jugadores
    @else
        <h1>Jugadores</h1>
        @foreach ($players as $player)
            <span>{{ $player->name}}</span>
        @endforeach
    @endempty

@endsection
