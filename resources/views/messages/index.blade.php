@extends('layout')
@section('title', 'Mensajes')
@section('content')
<div class="messages">
   @if ($messages->isEmpty())
        No hay mensajes
    @else
        <h1>Mensajes</h1>
        @foreach ($messages as $message)
            @if ($message->readed != true)
                <div class="read-false">
                    <span>Nombre: {{ $message->name}}</span><br>
                    <a href="{{ route('messages.show', $message)}}">Asunto: {{ $message->subject}}</a>
                </div>
            @else
                <div class="readed">
                    <span>Nombre: {{ $message->name}}</span><br>
                    <a href="{{ route('messages.show', $message)}}">Asunto: {{ $message->subject}}</a>
                </div>
            @endif
        @endforeach
    @endif
</div>
@endsection
