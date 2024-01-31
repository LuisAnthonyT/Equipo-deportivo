@extends('layout')
@section('content')
    <form action="{{ route('login')}}" method="post">
        @csrf

        <label for="email">Email:</label><br>
        <input required type="text" name="email" id="email"><br>

        <label for="password">Contraseña:</label><br>
        <input required type="password" name="password" id="password"><br>

        <input type="submit" value="Enviar">
    </form>
@endsection
