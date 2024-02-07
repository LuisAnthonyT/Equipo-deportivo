@extends('layout')
@section('title', 'Contacto')
@section('content')
    <div class="container">
        <h2>Dejanos tu mensaje:</h2>
        <form action="{{ route('messages.store')}}" method="post">
            @csrf

            <label for="name">Nombre:</label>
            <input required type="text" id="name" name="name">

            <label for="subject">Asunto:</label>
            <input required type="text" id="subject" name="subject">

            <label for="text">Mensaje:</label>
            <textarea required id="text" name="text"></textarea>

            <input type="submit" value="Enviar">
        </form>
    </div>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    @endif
@endsection
