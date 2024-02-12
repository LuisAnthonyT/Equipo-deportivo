@extends('layout')
@section('title', 'Evento')
@section('content')
    <div class="event">
        <h2>{{ $event->name }}</h2>
        <span>{{ $event->description }}</span><br>
        <span>Localización: {{ $event->location }}</span><br>
        <span>Fecha: {{ $event->date }}</span><br>
        <span>Hora: {{ $event->hour }}</span><br>
        <span>Tipo: {{ $event->type }}</span><br>
        <span>Tags: {{ $event->tags }}</span><br>

        @if ($like)
            <form action="{{ route('event.deleteLike', $event)}}" method="post">
                @method('delete')
                @csrf
                <button type="submit">Quitar me gusta</button>
            </form>
        @else
            <form action="{{ route('event.like', $event)}}" method="post">
            @csrf
            <button type="submit">Me gusta</button>
            </form>
        @endif
    </div>
@endsection
