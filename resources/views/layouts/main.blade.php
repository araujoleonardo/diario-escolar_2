<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <div class="row bg-white">
            <div class="col rounded-3 border shadow text-end m-2 p-2">
                <nav class="container-fluid navbar">
                    <h3>Diário Escolar</h3>
                    <div class="d-flex">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="nav-link">Inicio</a>

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
                                <a href="{{ route('login') }}" class="nav-link">Entrar</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link">Registrar-se</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </nav>
            </div>
        </div>

        <!-- Sidebar / Menu lateral -->
        <div class="row bg-white">
            <div class="col-md-2 rounded-3 border shadow m-2" style="min-height: 700px;">
                <div class="text-center p-2">
                    <h3>Menu</h3>
                </div>
                <hr>
                <ul class="list-unstyled p-2">
                    <li class="active">
                        <a href="{{ url('/home') }}" class="list-group-item list-group-item-action list-group-item-light rounded-3">
                            <i class="bi-house-door-fill h4 text-primary"></i>
                            PAGINA INICIAL
                        </a>
                    </li>

                    <li>
                        <a class="list-group-item list-group-item-action list-group-item-light rounded-3" data-bs-toggle="collapse" href="#professorMenu" aria-expanded="false">
                            <i class="bi-person-square h4 text-primary"></i>
                            PROFESSOR
                            <i class="bi-arrow-down-short h5"></i>
                        </a>
                        <div class="collapse" id="professorMenu">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">ALUNO</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">SERVIDOR</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">PROFESSOR</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">ESCOLA</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">USUÁRIO</a>
                            </li>
                        </ul>
                        </div>
                    </li>

                    <li>
                        <a class="list-group-item list-group-item-action list-group-item-light rounded-3" data-bs-toggle="collapse" href="#alunoMenu" aria-expanded="false">
                            <i class="bi-mortarboard h4 text-primary"></i>
                            ALUNO
                            <i class="bi-arrow-down-short h5"></i>
                        </a>
                        <div class="collapse" id="alunoMenu">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">ALUNO</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">SERVIDOR</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">PROFESSOR</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">ESCOLA</a>
                            </li>
                        </ul>
                        </div>
                    </li>

                    <li class="active">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3">
                            <i class="bi-building h4 text-primary"></i>
                            TURMAS
                        </a>
                    </li>

                    <li class="active">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3">
                            <i class="bi-filter-square h4 text-primary"></i>
                            MATRICULA
                        </a>
                    </li>

                    <li>
                        <a class="list-group-item list-group-item-action list-group-item-light rounded-3" data-bs-toggle="collapse" href="#consultasMenu" aria-expanded="false">
                            <i class="bi-file-earmark-text h4 text-primary"></i>
                            CONSULTAS
                            <i class="bi-arrow-down-short h5"></i>
                        </a>
                        <div class="collapse" id="consultasMenu">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">ALUNO</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">SERVIDOR</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">PROFESSOR</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3 p-1 ms-3">ESCOLA</a>
                            </li>
                        </ul>
                        </div>
                    </li>

                    <li class="active">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3">
                            <i class="bi-calendar-range h4 text-primary"></i>
                            PERIODO ESCOLAR
                        </a>
                    </li>
                    
                    <li class="active">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-3">
                            <i class="bi-journal-text h4 text-primary"></i>
                            DISCIPLINAS
                        </a>
                    </li>
                </ul>
            </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    @yield('js')
</body>
</html>
