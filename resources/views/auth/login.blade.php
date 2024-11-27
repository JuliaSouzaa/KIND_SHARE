<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="css/entrar.css">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/logo_web.png" type="image/x-icon">

</head>
<body>
    <main class="main-container">
        
        <!-- Mensagem de Boas-Vindas -->
        <div class="welcome-message">
            <h2>A caridade começa com você.</h2>
            <p>Parabéns por tomar essa iniciativa de se juntar a nós!</p>
        </div>
        
        <!-- Cartão de Login -->
        <div class="login-card">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="logo-container">
                    <center>
                        <a class="navbar-brand" href="{{ route('welcome') }}">
                            <img src="img/logo_transparente.png" alt="logo" class="logo-img-default">
                        </a>
                    <center>
                        <span class="text-muted">Faça o seu login abaixo para prosseguir</span>
                    </div>

                    <div class="input-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" :value="old('email')" placeholder="Digite seu e-mail" required autofocus>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="input-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="btn-link" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                    @endif
                    </div>
                <br><br>

                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded" name="remember">
                            <span>Me Lembrar</span>
                        </label>
                    </div>

                    <div class="button-container">
                        <button type="submit" class="btn-login">Login</button>
                    </div>

                </form>

                <div class="register-link">
                    <p>Ainda não tem uma conta? <a href="{{ route('register') }}" class="btn-link">Cadastrar</a></p>
                </div>
            </div>
        </div>

        <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Seleciona o texto de boas-vindas e o container do login
        const welcomeText = document.querySelector('.welcome-message');
        const loginCard = document.querySelector('.login-card');

        // Define as posições finais para o texto e a caixa
        const finalWelcomePosition = 'translateX(-130%)'; // Texto ficará à esquerda da caixa
        const finalLoginPosition = 'translateX(0)'; // Caixa estará centralizada

        // Função para iniciar a animação depois que a página for carregada
        setTimeout(() => {
            // Move o texto e a caixa para a posição inicial (centro)
            welcomeText.style.transform = 'translateX(0)';
            welcomeText.style.opacity = '0';
            welcomeText.classList.remove('visible'); // Torna o texto invisível inicialmente
            loginCard.style.transform = 'translateX(0)';
            loginCard.style.opacity = '1';

            // Adiciona um novo timeout para ajustar a posição final após a animação
            setTimeout(() => {
                welcomeText.style.transform = finalWelcomePosition; // Texto à esquerda da caixa
                loginCard.style.transform = finalLoginPosition; // Caixa centralizada
                welcomeText.style.opacity = '1'; // Altera a opacidade do texto para 0 quando atrás da caixa

            }, 800); // Tempo após a animação inicial para ajustar a posição final
        }, 300); // Pequeno atraso para melhorar a experiência visual
    });
</script>


    </main>
</body>
</html>
