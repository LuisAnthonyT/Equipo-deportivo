@extends('layout')
@section('title', 'Crear jugador')
@section('content')
    <form action="{{ route('players.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="name">Nombre:</label>
        <input required type="text" name="name" id="name">

        <label for="twitter">Twitter:</label>
        <input type="text" name="twitter" id="twitter">

        <label for="instagram">Instagram:</label>
        <input type="text" name="instagram" id="instagram">

        <label for="twitch">Twitch:</label>
        <input type="text" name="twitch" id="twitch">

        <label for="position">Posición:</label>
        <input type="text" name="position" id="position">

        <label for="jersey_number">Dorsal:</label>
        <input type="number"  name="jersey_number" id="jersey_number" min="0"><br>

        <label for="photo">Imagen:</label>
        <input type="file" name="photo" id="photo"><br>

        <input type="submit" value="Crear jugador">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    @endif
@endsection
