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
        <a href="">Me gusta</a>
    </div>
@endsection
