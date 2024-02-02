@extends('layout')
@section('title', 'Mensajes')
@section('content')
    @forelse ($messages as $message)
        <div class="message">
            @if ($message->readed != true)
                <h1>Mensages no leídos</h1>
                <span><a href="{{ route('messages.show', $message)}}">Nombre: {{ $message->name}}</a></span>
                <span>Asunto: {{ $message->subject}}</span>
            @else
                <h1>Mensajes leídos</h1>
                <span><a href="{{ route('messages.show', $message)}}">Nombre: {{ $message->name}}</a></span>
                <span>Asunto: {{ $message->subject}}</span>
            @endif
        </div>
    @empty
        <span>No hay mensajes</span>
    @endforelse
@endsection
