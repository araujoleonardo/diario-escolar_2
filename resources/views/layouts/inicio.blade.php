<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row bg-white">
            <div class="col rounded-3 border shadow text-end m-2 p-2">
                <nav class="container navbar">
                    <h3>Diário Escolar</h3>
                    <div class="d-flex">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="btn btn-primary">Inicio</a>

                                <!-- Drop Down menu -->
                                <div class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a href="#" class="nav-link dropdown-item">Meu Perfil</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="nav-link dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary me-2">Entrar</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary">Registrar-se</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </nav>
            </div>
        </div>

        <div class="row bg-white" style="height: 750px;">
            <div class="col rounded-3 border shadow m-2">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="bg-white text-center fixed-bottom">
        <div class="rounded-3 border shadow m-2 text-center p-3">
            © 2022 Copyright | Todos os direitos reservados
        </div>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
