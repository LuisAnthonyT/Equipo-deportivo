@extends('layout')
@section('title', 'Mensaje')
@section('content')
    <div class="message">
        <span>Nombre: {{ $message->name}}</span><br>
        <span>Asunto: {{ $message->subject}}</span><br>
        <span>Mensaje: {{ $message->text}}</span><br>

        <form action="{{ route('messages.destroy', $message)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Eliminar">
        </form>
    </div>
@endsection
