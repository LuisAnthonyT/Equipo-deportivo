@extends('layout')
@section('title', 'Editar evento')
@section('content')
    <form action="{{ route('events.update', $event) }}" method="post">
        @csrf
        @method('put')

        <label for="name">Nombre:</label><br>
        <input type="text" name="name" id="name" value="{{ $event->name}}"><br>

        <label for="description">Descripción:</label><br>
        <input type="text" name="description" id="description" value="{{ $event->description}}"><br>

        <label for="location">Localización:</label><br>
        <input type="text" name="location" id="location" value="{{ $event->location}}"><br>

        <label for="date">Fecha:</label><br>
        <input type="date" name="date" id="date" value="{{ $event->date }}"><br>

        <label for="hour">Hora:</label><br>
        <input type="time" name="hour" id="hour" value="{{ $event->hour}}"><br>

        <label for="type">Tipo:</label><br>
        <select name="type" id="type">
            <option value="official" {{ $event->type === 'official' ? 'selected' : '' }}>Official</option>
            <option value="exhibition" {{ $event->type === 'exhibition' ? 'selected' : '' }}>Exhibition</option>
            <option value="charity" {{ $event->type === 'charity' ? 'selected' : '' }}>Charity</option>
        </select>

        <label for="tags">Tags:</label><br>
        <input type="text" name="tags" id="tags" value="{{ $event->tags}}"><br>

        <label for="visible">Visible:</label><br>
        <input type="checkbox" name="visible" id="visible" {{ $event->visible ? 'checked' : '' }}><br>

        <input type="submit" value="Modificar">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    @endif
@endsection
