<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Kind Share</title>
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="css/esqueceu-senha.css">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/logo_web.png" type="image/x-icon">

    
</head>
<body>
    <main class="main-container">
        <div class="login-card">
            <div class="card-body">


                <center>
                    <a class="navbar-brand" href="{{ route('welcome') }}">
                        <img src="img/logo_branca.jpg" alt="logo" class="logo-img-default">
                    </a>
                <center>
        
            
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Esqueceu sua senha? Não tem problema. Informe seu endereço de email e iremos enviar um link para recuperar a senha.') }}
    </div>
    <div class="logo-container">
   
    <!-- Session Status -->
    <div class="input-group">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form method="POST" action="{{ route('password.email') }}">
    </div>

        @csrf
        

        <!-- Email Address -->
        <div class="input-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        
            <div class="button-container">
            <button type="submit" class="btn-login">Confirmar</button>
            </div>
        
    </form>

