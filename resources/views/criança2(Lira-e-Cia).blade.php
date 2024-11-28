<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crianças.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- SCRIPT DA NAV BAR-->
    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
                    <a class="nav-link" href="/">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="instituicaoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">ONGS</a>
                    <ul class="dropdown-menu" aria-labelledby="instituicaoDropdown">
                        <li><a class="dropdown-item" href="/instituicoes">Instituição</a></li>
                        <li><a class="dropdown-item" href="/doação">Doe Agora</a></li>
                        <li><a class="dropdown-item" href="/lista_necessidades">Necessidades</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/envolva-se">Envolva-se</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="guia.html">Guia</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/sobre">Sobre</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="icons">
        <div class="search-container">
            <input type="text" class="form-control" placeholder="Pesquisar..." id="searchInput">
        </div>
        <i class="fas fa-search icon" id="searchIcon"></i>
        <a href="bem-vindo.html">
            <i class="fas fa-user icon" id="profileIcon"></i>
        </a>
    </div>
</header>

    <!-- Perfil da criança -->
    <div class="comunidades">
        <div class="texto">
            <h2>Conheça a Helena!</h2>
            <p>Helena tem 12, é uma garota sonhadora, cheia de imaginação e criatividade. Ela adora contar histórias e se perder em livros que a levam a mundos mágicos. Com um coração gentil, Fernanda é sensível às emoções dos outros e sempre busca ajudar quem está ao seu redor. Ela sonha em ter uma família que a encoraje a explorar suas paixões e a abraçar suas ideias. Com Fernanda, cada dia pode ser uma nova aventura cheia de descobertas!</p>
        </div>
        <!-- Imagem à direita -->
        <div class="imagem-comunidade">
            <img src="img/helena (Lira-e-Cia).jpg" alt="Imagem da Fernanda">
            <!-- Botão abaixo da imagem -->
            <div class="botao-imagem">
            <a href="{{ url('dashboard/apadrinheLIRA') }}" class="btn btn-link">
                <button>Apadrinhar</button>
            </div>
        </div>
    </div>

    <!-- Seção "Conheça as Outras Crianças" -->
    <div class="outras-criancas">
        <h2>Conheça as Outras Crianças</h2>
        <div class="cards">
            <div class="card">
                <a href="/criança2(Lira-e-Cia)">
                    <img src="img/fernanda (Lira-e-Cia).jpg" alt="fernanda">
                    <h3>Fernanda</h3>
                    <p>12 anos</p>
                </a>
            </div>

            <div class="card">
                <a href="/criança3(Lira-e-Cia)">
                    <img src="img/julieta (Lira-e-Cia).jpg" alt="julieta">
                    <h3>Julieta</h3>
                    <p>13 anos</p>
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
        window.location.href = 'E-C.html';
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
