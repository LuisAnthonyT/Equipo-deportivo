@extends('layout')
@section('content')
    <div class="container">
        <h2>Dejanos tu mensaje:</h2>
        <form action="" method="post">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>

            <input type="submit" value="Enviar">
        </form>
    </div>
@endsection
