<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/instituicoes.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    <link rel="shortcut icon" href="img/5-Photoroom.png" type="image/x-icon">
    <title>KIND SHARE</title>
</head>
<body>

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
<!-- Main Content -->
<section class="institutions-section">
    <div class="intro">
        <h1>Bem-vindo à seção de Instituições</h1>
        <p>Explore as instituições que incentivam a sua participação.</p>
    </div>
    <div class="section-search-container">
        <input type="text" class="form-control" placeholder="Pesquisar..." id="headerSearchInput">
        <button id="searchButton">SEARCH</button>
    </div>


    <div class="categories">
        <h2>Categorias</h2>
        <div class="category-cards">
            <div class="category-card">
                <img src="img/ong1.png" alt="Corações Unidos">
                <p><a href="/coracao_unido" class="custom-button">Corações Unidos</a></p>
            </div>            
          <div class="category-card">
            <img src="img/ong2.png" alt="Instituição 2">
            <p><a href="/lira-e-cia" class="custom-button">Lira e Cia</a></p>
          </div>
          <div class="category-card">
            <img src="img/ong3.png" alt="Instituição 3">
            <p><a href="/vozes-da-comunidade" class="custom-button">Vozes da Comunidade</a></p>
          </div>
          <div class="category-card">
            <img src="img/ong4.png" alt="Instituição 4">
            <p><a href="/rede-de-esperanca" class="custom-button">Rede de Esperança</a></p>
          </div>
          <div class="category-card">
            <img src="img/ong5.png" alt="Instituição 5">
            <p><a href="/amigos-do-bem" class="custom-button">Amigos do Bem</a></p>
          </div>
          <div class="category-card">
            <img src="img/Instituição2.jpg" alt="Instituição 6">
            <p>Instituição 6</p>
          </div>
          <div class="category-card">
            <img src="img/Instituição3.jpg" alt="Instituição 7">
            <p>Instituição 7</p>
          </div>
          <div class="category-card">
            <img src="img/Instituição4.jpg" alt="Instituição 8">
            <p>Instituição 8</p>
          </div>
          <div class="category-card">
            <img src="img/Instituição1.jpg" alt="Instituição 9">
            <p>Instituição 9</p>
          </div>
          <div class="category-card">
            <img src="img/Instituição2.jpg" alt="Instituição 10">
            <p>Instituição 10</p>
          </div>
          <div class="category-card">
            <img src="img/Instituição3.jpg" alt="Instituição 11">
            <p>Instituição 11</p>
          </div>
          <div class="category-card">
            <img src="img/Instituição4.jpg" alt="Instituição 12">
            <p>Instituição 12</p>
          </div>
        </div>
      </div>
</section>

<!-- Botão de voltar ao topo -->
<a href="#" class="btn-to-top">
    <i class="fa-solid fa-arrow-up"></i>
</a>
  
<!-- FOOTER -->
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

<!-- Scripts -->
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
