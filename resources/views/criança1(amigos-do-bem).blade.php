<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/crianças.css') }}">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- SCRIPT DA NAV BAR-->
    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="img/logo_web.png" type="image/x-icon">

    <title>KIND SHARE</title>

    <style>
        .search-container {
            display: none; /* Inicialmente oculta */
            position: absolute; /* Remove da normal flow */
            right: 80px; /* Ajuste para mais à esquerda */
            top: 15px; /* Ajuste conforme necessário para a posição vertical */
            z-index: 1000; /* Fica acima de outros elementos */
        }
  
        #searchInput {
            width: 200px; /* Ajuste o tamanho conforme necessário */
            margin-right: 5px; /* Espaço entre a caixa de texto e a lupa */
        }
    </style>

</head>
<body>

<!-- Header -->
@include('components.nav')

    <!-- Perfil da criança -->
    <div class="comunidades">
        <div class="texto">
            <h2>Conheça a Ana!</h2>
            <p>Ana tem 7 anos, é apaixonada por cores e está sempre pintando ou desenhando em seus cadernos. Ela tem uma imaginação incrível e consegue transformar até os dias chuvosos em momentos de diversão, criando castelos de papelão dentro de casa. Seu sonho é ser uma artista famosa, inspirando o mundo com suas obras.</p>
        </div>
        <!-- Imagem à direita -->
        <div class="imagem-comunidade">
            <img src="{{ asset('img/ana (Amigos-do-Bem).jpg') }}" alt="Imagem da Fernanda">
        </div>
    </div>

    <!-- Seção "Conheça as Outras Crianças" -->
    <div class="outras-criancas">
        <h2>Conheça as Outras Crianças</h2>
        <div class="cards">
            <div class="card">
                <a href="{{ url('dashboard/criança2(amigos-do-bem)') }} ">
                    <img src="{{ asset('img/eloá (Amigos-do-Bem).jpg') }}" alt="Helena">
                    <h3>Eloá</h3>
                    <p>6 anos</p>
                </a>
            </div>

            <div class="card">
                <a href="{{ url('dashboard/criança3(amigos-do-bem)') }}">
                    <img src="{{ asset('img/julia (Amigos-do-Bem).jpg') }}" alt="julieta">
                    <h3>Julia</h3>
                    <p>10 anos</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Botão abaixo das imagens -->
    <div class="ver-mais">
        <button>Veja Mais!</button>
    </div>

    <!-- Botão de voltar ao topo -->
    <a href="#" class="btn-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

    <br>

    <!-- Footer -->
    <footer>
        <div class="footerContainer"></div>
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footerNav">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Quem Somos</a></li>
            </ul>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2024; KIND SHARE</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        window.onscroll = function() {
            let btnToTop = document.querySelector('.btn-to-top');
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                btnToTop.style.display = "block";
            } else {
                btnToTop.style.display = "none";
            }
        };

        document.querySelector('.btn-to-top').addEventListener('click', function(event) {
            event.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

    </script>

    <!-- Seleciona o ícone de perfil pelo ID -->
<script>
    document.getElementById('profileIcon').addEventListener('click', function() {
        window.location.href = 'bem-vindo.html';
    });

    // Exibe/oculta a caixa de pesquisa ao clicar na lupa
    document.getElementById('searchIcon').addEventListener('click', function() {
        const searchContainer = document.querySelector('.search-container');
        if (searchContainer.style.display === "none" || searchContainer.style.display === "") {
            searchContainer.style.display = "flex"; // Mostra a caixa de pesquisa
            document.getElementById('searchInput').focus(); // Foca na caixa de texto
        } else {
            searchContainer.style.display = "none"; // Oculta a caixa de pesquisa
        }
    });
</script>


</body>
</html>
