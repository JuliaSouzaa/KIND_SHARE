<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> <!-- Link para Font Awesome -->
</head>
<body>

@yield('conteudo')

<!-- Header -->
<header>
        <div class="logo">
            <img src="{{ asset('img/logo_preta.png') }}" alt="Logo KIND SHARE">
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <!-- Link para Início -->
            <li class="nav-item">
                <a class="nav-link" 
                   href="@auth {{ url('/dashboard') }} @else {{ url('/') }} @endauth">
                   Início
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="instituicaoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ONGS
                </a>
                <ul class="dropdown-menu" aria-labelledby="instituicaoDropdown">
                    <li><a class="dropdown-item" href="{{ url('dashboard/instituicoes') }}" 
                           @guest onclick="redirectToLogin(event)" @endguest>
                        Instituição
                    </a></li>
                    <li><a class="dropdown-item" href="{{ url('dashboard/doação') }}" 
                           @guest onclick="redirectToLogin(event)" @endguest>
                        Doe Agora
                    </a></li>
                    <li><a class="dropdown-item" href="{{ url('dashboard/lista_necessidades') }}" 
                           @guest onclick="redirectToLogin(event)" @endguest>
                        Necessidades
                    </a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/envolva-se') }}">Envolva-se</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/guia') }}">Guia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/sobre') }}">Sobre</a>
            </li>
        </ul>
    </div>
</nav>
    
    <div class="icons">

        @auth
            <!-- O usuário está logado, então exibe o ícone de perfil com o dropdown -->
            <i class="fas fa-user icon" id="profileIcon" onclick="toggleDropdown()"></i> <!-- Ícone do usuário -->
            <div class="user-dropdown">
            <div class="dropdown-content" id="dropdownMenu">
                <a class="dropdown-link" href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a> <!-- Link para o perfil -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-button">Sair</button> <!-- Botão de logout -->
                </form>
            </div>
</div>
        @else
            <!-- O usuário não está logado, então o ícone direciona para a tela de login -->  
            <a href="{{ route('login') }}">
                <i class="fas fa-user icon" id="profileIcon" onclick="toggleDropdown()"></i>
            </a>
        @endauth

    </div>
</div>
</header>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdownMenu');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }

       // Função para redirecionar visitantes não autenticados ao login
    function redirectToLogin(event) {
        event.preventDefault(); // Impede o link de ser seguido
        window.location.href = "{{ route('login') }}"; // Redireciona para a página de login
    }
</script>


</body>
</html>
