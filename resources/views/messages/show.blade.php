@extends('layout')
@section('title', 'Mensaje')
@section('content')
    <div class="message">
        <span>Nombre: {{ $message->name}}</span>
        <span>Asunto: {{ $message->subject}}</span>
        <span>Mensaje: {{ $message->text}}</span>
    </div>
@endsection
