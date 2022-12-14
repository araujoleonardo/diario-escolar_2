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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <div class="row bg-white">
            <div class="col rounded-3 border bg-primary bg-gradient shadow text-end m-2 p-2">
                <nav class="container-fluid navbar">
                    <a href="{{ url('/home') }}" class="nav-link link-light p-0"><h4>Diário Escolar</h4></a>
                    <div class="d-flex">
                        @if (Route::has('login'))
                            @auth
                                <!-- Drop Down menu -->
                                <div class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link link-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            <div class="col-md-2 rounded-3 border shadow m-2 p-2" style="min-height: 700px;">
                <div class="text-center p-2">
                    <h3>Menu</h3>
                </div>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li>
                        <a href="/home" class="{{ !Route::Is('home') ?: 'active' }} btn btn-outline-light nav-link link-dark text-start mb-2">
                            <i class="bi-house-door-fill me-2"></i>
                            Página Inicial
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('professor.index') }}" class="{{ !Route::Is('professor.index') ?: 'active' }} btn btn-outline-light nav-link link-dark text-start mb-2">
                            <i class="bi-grid-fill me-2"></i>
                            Professores
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('aluno.index') }}" class="{{ !Route::Is('aluno.index') ?: 'active' }} btn btn-outline-light nav-link link-dark text-start mb-2">
                            <i class="bi-grid-fill me-2"></i>
                            Alunos
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('turma.index') }}" class="{{ !Route::Is('turma.index') ?: 'active' }} btn btn-outline-light nav-link link-dark text-start mb-2">
                            <i class="bi-grid-fill me-2"></i>
                            Turmas
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('periodo.index') }}" class="{{ !Route::Is('periodo.index') ?: 'active' }} btn btn-outline-light nav-link link-dark text-start mb-2">
                            <i class="bi-grid-fill me-2"></i>
                            Periodo Escolar
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('disciplina.index') }}" class="{{ !Route::Is('disciplina.index') ?: 'active' }} btn btn-outline-light nav-link link-dark text-start mb-2">
                            <i class="bi-grid-fill me-2"></i>
                            Disciplinas
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('consulta.index') }}" class="{{ !Route::Is('consulta.index') ?: 'active' }} btn btn-outline-light nav-link link-dark text-start mb-2">
                            <i class="bi-grid-fill me-2"></i>
                            Consultas
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
