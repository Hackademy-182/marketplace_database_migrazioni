<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand zen-dots-regular" href="#">Marketplace Auto & Moto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('car-form') }}"> Inserisci Auto </a>
                </li>
                <a class="nav-link active css_home" aria-current="page" href="{{ route('cardCar') }}">Auto</a>
                <li class="nav-item">
                </li>
                <a class="nav-link active css_home" aria-current="page" href="{{ route('motoCard') }}">Moto</a>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('moto-form') }}"> Inserisci Moto </a>
                </li>
            </ul>
            <li class="nav-item dropdown">
            @auth
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao, {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
                            Logout
                        </a>
                        <form action="{{ route('logout') }}" method="POST" style="display: none;" id="form-logout">
                            @csrf
                        </form>
                    </li>
                </ul>
            @else
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao, Ospite!
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                </ul>
            @endauth
        </li>
    </div>
</div>
</nav>
