@extends('layout')
@section('title', 'Crear evento')
@section('content')
    <form action="{{ route('events.store') }}" method="post">
        @csrf

        <label for="name">Nombre:</label><br>
        <input required type="text" name="name" id="name"><br>

        <label for="description">Descripción:</label><br>
        <input required type="text" name="description" id="description"><br>

        <label for="location">Localización:</label><br>
        <input required type="text" name="location" id="location"><br>

        <label for="date">Fecha:</label><br>
        <input required type="date" name="date" id="date"><br>

        <label for="hour">Hora:</label><br>
        <input required type="time" name="hour" id="hour"><br>

        <label for="type">Tipo:</label><br>
        <select name="type" id="type">
            <option value="official">Official</option>
            <option value="exhibition">Exhibition</option>
            <option value="charity">Charity</option>
        </select>

        <label for="tags">Tags:</label><br>
        <input required type="text" name="tags" id="tags"><br>

        <label for="visible">Visible:</label><br>
        <input  type="checkbox" name="visible" id="visible"><br>

        <input type="submit" value="Crear">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    @endif
@endsection
