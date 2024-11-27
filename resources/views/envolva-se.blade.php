<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIND SHARE</title>
    <link rel="stylesheet" href="{{ asset('css/envolvase.css') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    <link rel="shortcut icon" href="{{ asset('img/logo_web.png') }}" type="image/x-icon">
</head>
<body>

@include('components.nav')

    <!-- LOGO E LINKS -->

    <div class="custom-page">
    <div class="container">

        <div class="profile">
            <img src="{{ asset('img/KIND.png') }}" alt="Kindshare Logo" class="logo">
            <h1>KIND SHARE</h1>
            <p>Sistema para auxílio de instituições de caridade.</p>
        </div>

        <div class="links">
            </a>
            <a href="/doação" class="link-item">
                 Como ajudar as ONGs?
            </a>

            <a href="{{ route('register') }}" class="link-item">
                 Faça seu cadastro
            </a>

            <a href="/instituicoes" class="link-item">
                 Instituições

            <a href="/sobre" class="link-item">
                Entre em contato conosco

            <a href="https://www.instagram.com/kindshare__tcc?igsh=aG56ZzEyeTh1d3Qy" class="link-item">
                 Nosso instagram ✨
            </a>
        </div>
    </div>
    
    </div>
    

</body>
</html>
