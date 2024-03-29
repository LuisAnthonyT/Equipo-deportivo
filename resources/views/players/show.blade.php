@extends('layout')
@section('title', 'Jugador')
@section('content')
<div class="player">
    <h1>{{ $player->name}}</h1>
    <span>Twitter: {{ $player->twitter}}</span><br>
    <span>Instagram. {{ $player->instagram}}</span><br>
    <span>Posición: {{ $player->position}}</span><br>
    <span>Dorsal: {{ $player->jersey_number}}</span><br>
    @if ($player->visible == true)
        <span>Visible</span><br>
    @else
        <span>No visible</span><br>
    @endif
    <img src="{{ asset($player->photo) }}" alt="{{ $player->name}}">
</div>
@endsection
