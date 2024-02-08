@extends('layout')
@section('title', 'Jugadores')
@section('content')
    <div class="players">
        @empty($players)
        No hay jugadores
        @else
        <h1>Jugadores</h1>
        @foreach ($players as $player)
        @guest
        @if ($player->visible == true)
        <span>{{ $player->name}}</span><br>
        @endif
        @else
        <span><a href="{{ route('players.show', $player)}}">{{ $player->name}}</a></span><br>
        @if (Auth::user()->rol == 'admin')
        <form action="{{ route('players.update', $player)}}" method="post">
            @csrf
            @method('put')
            <label for="visibility">Visibilidad:</label><br>
            <select name="visibility" id="visibility">
                <option value="1" {{ $player->visible ? 'selected' : '' }}>Visible</option>
                <option value="0" {{ $player->visible ? 'selected' : '' }}>No visible</option>
            </select><br>
            <button type="submit">Guardar</button>
        </form>
        @endif
        @endguest
        @endforeach
        @endempty
    </div>
@endsection