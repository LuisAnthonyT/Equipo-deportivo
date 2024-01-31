<nav class="header">
    <img src="{{ asset('img/logo.jpg')}}" alt="logo">
    <span>Equipo Random</span>
    <a href="{{ route('inicio')}}">Inicio</a>
    <a href="">Jugadores</a>
    <a href="{{ route('events.index')}}">Eventos</a>
    <a href="">Tienda</a>
    <a href="{{ route('contacto')}}">Contacto</a>
    <a href="{{ route('donde-estamos')}}">¿Donde estamos?</a>

    @auth
        @if ( Auth::user()->rol == 'admin')
            <a href="">Añadir jugador</a>
            <a href="">Añadir evento</a>
            <a href="">Mensajes</a>
        @endif
    @endauth

    @auth
        <a href="">Cuenta</a>
        <a href="{{ route('logout')}}">Logout</a>
    @else
        <a href="{{ route('signup')}}">Registrate</a>
        <a href="{{ route('login')}}">Login</a>
    @endauth

</nav>
