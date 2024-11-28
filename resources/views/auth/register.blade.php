<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo_web.png" type="image/x-icon">

    <title>Cadastro</title>
</head>
<body>

@include('components;nav')

    <main class="main-container">
        <div class="form-container">
            <div class="form-header">
                <a href="{{ route('welcome') }}">
                    <img src="img/logo_branca.jpg" alt="logo" class="logo-img-default">
                </a><br>
                <span class="text-muted">Faça o cadastro para prosseguir</span>
            </div>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label for="name">Nome Completo</label>
                <div class="input-group">
                    
                    <input type="text" id="name" name="name" placeholder="Digite seu nome completo" :value="old('name')" required>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" :value="old('email')" required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- CPF -->
                <label for="cpf">CPF</label>
                <div class="input-group">
                    <input type="string" id="cpf" name="cpf" placeholder="Digite seu CPF" :value="old('cpf')" required>
                </div>

                <!-- Data de Nascimento -->
                <label for="nasc">Data de Nascimento</label>
                <div class="input-group">
                    <input type="date" id="nasc" name="nasc" :value="old('nasc')" required>
                    <x-input-error :messages="$errors->get('nasc')" class="mt-2" />
                </div>

                <!-- Telefone -->
                <label for="phone">Telefone</label>
                <div class="input-group">
                    <input type="string" id="phone" name="phone" placeholder="Digite seu telefone" :value="old('phone')" required>
                </div>

                <label for="password">Senha</label>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Digite sua senha" required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>
                <label for="password_confirmation">Confirmar Senha</label>
                <div class="input-group">
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="button-container">
                    <button type="submit" class="submit-btn">Cadastrar</button>
                </div>

                <p class="form-footer">Já tem uma conta? <a href="{{ route('login') }}" class="btn-link">Entrar</a></p>
            </form>
        </div>
    </main>
</body>
</html>
