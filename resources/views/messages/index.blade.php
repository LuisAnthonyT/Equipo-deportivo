@extends('layout')
@section('title', 'Mensajes')
@section('content')
   @if ($messages->isEmpty())
        No hay mensajes
    @else
    <h1>Mensajes no leidos</h1>
        @foreach ($messages as $message)
            <div class="message">
                @if ($message->readed != true)
                <span>Nombre: {{ $message->name}}</span>
                <span><a href="{{ route('messages.show', $message)}}">Asunto: {{ $message->subject}}</a></span>
                @endif
            </div>
        @endforeach

        <h1>Mensajes leidos</h1>
        @foreach ($messages as $message)
            <div class="message">
                @if ($message->readed == true)
                <span>Nombre: {{ $message->name}}</span>
                <span><a href="{{ route('messages.show', $message)}}">Asunto: {{ $message->subject}}</a></span>
                @endif
            </div>
        @endforeach
    @endif
@endsection
