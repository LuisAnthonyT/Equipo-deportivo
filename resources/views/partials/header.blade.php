<nav class="header">
    <img src="{{ asset('img/logo.jpg')}}" alt="logo">
    <span>Equipo Random</span>
    <a href="{{ route('inicio')}}">Inicio</a>
    <a href="{{ route('players.index')}}">Jugadores</a>
    <a href="{{ route('events.index')}}">Eventos</a>
    <a href="{{ route('products.index')}}">Tienda</a>
    <a href="{{ route('messages.create')}}">Contacto</a>
    <a href="{{ route('donde-estamos')}}">¿Donde estamos?</a>

    @auth
        @if ( Auth::user()->rol == 'admin')
            <a href="{{ route('players.create')}}">Añadir jugador</a>
            <a href="{{ route('events.create')}}">Añadir evento</a>
            <a href="{{ route('messages.index')}}">Mensajes</a>
            <a href="{{ route('user.index')}}">Cuentas</a>
        @else
            <a href="{{ route('user.show', Auth::user()->id)}}">Cuenta</a>
        @endif

        <a href="{{ route('logout')}}">Logout</a>
    @else
        <a href="{{ route('signup')}}">Registrate</a>
        <a href="{{ route('login')}}">Login</a>
    @endauth
</nav>
