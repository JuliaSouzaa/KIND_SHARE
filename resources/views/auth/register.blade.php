<!-- CADASTRO -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">  <!-- CSS Customizado -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title>Cadastro</title>
</head>
<body>
    <main class="main-container">
        <div class="login-card">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="logo-container">
                        <center>
                            <a class="navbar-brand" href="{{ route('welcome') }}">
                                <img src="img/logo_branca.jpg" alt="logo" class="logo-img-default">
                            </a>
                        </center>
                        <span class="text-muted">Faça o cadastro para prosseguir</span>
                    </div>
                    
                    
                    <div class="input-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome completo" :value="old('name')" required>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" :value="old('email')" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="input-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF" required>
                    </div>
                    <div class="input-group">
                        <label for="dob">Data de Nascimento</label>
                        <input type="date" class="form-control" id="dob" required>
                    </div>
                    <div class="input-group">
                        <label for="phone">Telefone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Digite seu telefone"  required>
                    </div>

                    <div class="input-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" placeholder="Digite sua senha" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="input-group">
                        <label for="password_confirmation">Confirmar Senha</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
   
                    <div class="button-container">
                        <button type="submit" class="btn-login">Cadastrar</button>
                    </div>
                    
                    <p class="text-footer">Já tem uma conta? <a href="{{ route('login') }}" class="btn btn-link">Entrar</a></p>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
