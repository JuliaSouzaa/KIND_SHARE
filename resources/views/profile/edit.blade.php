<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="../css/editarperfil.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

<!-- Header -->
<header>
    <div class="logo">
        <img src="img/logo_preta.png" alt="Logo KIND SHARE">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:history.back()">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="instituicaoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">ONGS</a>
                    <ul class="dropdown-menu" aria-labelledby="instituicaoDropdown">
                        <li><a class="dropdown-item" href="#">Instituição</a></li>
                        <li><a class="dropdown-item" href="#">Doe Agora</a></li>
                        <li><a class="dropdown-item" href="#">Necessidades</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Envolva-se</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">GUIA</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="icons">
        <i class="fas fa-search icon" id="searchIcon"></i> <!-- Ícone de pesquisa -->
        <i class="fas fa-user icon" id="profileIcon" onclick="toggleDropdown()"></i> <!-- ícone do usuário -->
        <div class="user-dropdown">
           
            <div class="dropdown-content" id="dropdownMenu">
           
                <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a> <!-- Link para o perfil -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-button">Log Out</button> <!-- Botão de logout -->
                </form>
            </div>
        </div>
    </div>

</header>

    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Perfil') }}
    </h2>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Seção de Atualização de Informações -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg login-card">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Atualizar Informações</h3>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Seção de Atualização de Senha -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg login-card">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Atualizar Senha</h3>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Seção de Deletar Usuário -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg login-card">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Deletar Conta</h3>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

</body>
</html>