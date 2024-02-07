@extends('layout')
@section('title', 'Jugador')
@section('content')
    <h1>{{ $player->name}}</h1>
    <span>Twitter: {{ $player->twitter}}</span>
    <span>Instagram. {{ $player->instagram}}</span>
    <span>Posición: {{ $player->position}}</span>
    <span>Dorsal: {{ $player->jersey_number}}</span>
@endsection
