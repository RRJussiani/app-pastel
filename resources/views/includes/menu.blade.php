<nav id="menu-topo">
    <div class="flex-center">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="top-left links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('clientes.index') }}">Clientes</a>
            {{-- <a href="{{ route('pasteis') }}">Pasteis</a>
            <a href="{{ route('pedidos') }}">Pedidos</a> --}}
        </div>
    </div>
</nav>