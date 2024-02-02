@extends('layout')
@section('title', 'Modificar datos')
@section('content')
    <form action="{{ route('user.update', $user)}}" method="post">
        @csrf
        @method('put')

        {{-- ESTOY GESTIONANDO EL LOGIN CON EL EMAIL, POR LO CUAL "ME DA IGUAL" EL NOMBRE --}}
        <label for="name">Nombre:</label>
        <input required type="text" name="name" id="name" value="{{ $user->name}}">

        <label for="birthday">Fecha de nacimiento:</label>
        <input required type="date" name="birthday" id="birthday" value="{{ $user->birthday}}"><br>

        <input type="submit" value="Modificar">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    @endif
@endsection
