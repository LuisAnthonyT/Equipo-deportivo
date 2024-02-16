@extends('layout')
@section('title', 'Jugadores')
@section('content')
    <div class="players">
        @empty($players)
            No hay jugadores
        @else
            <h1>Jugadores</h1>
            @foreach ($players as $player)
            {{-- SI NO SE ESTA LOGUEADO, SOLO SE MOSTRARÁN LOS JUGADORES VISIBLES Y SIN ENLACE A SHOW --}}
            @guest
                @if ($player->visible == true)
                <h2>{{ $player->name}}</h2><br>
                <img class="player-img" src="{{ $player->photo}}" alt="{{ $player->name}}">
                @endif
            @else
                {{-- SI SE ESTA LOGUEADO, SE MOSTRARÁN TODOS LOS JUGADORES CON ENLACE A SHOW --}}
                <h2><a href="{{ route('players.show', $player)}}">{{ $player->name}}</a></h2><br>
                <img class="player-img" src="{{  asset($player->photo) }}" alt="{{ $player->name}}">

        {{-- SI EL ROL ES ADMIN, TENDRÁ LA OPCIÓN DE CAMBIAR LA VISIBILIDAD DE CADA JUGADOR --}}
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
