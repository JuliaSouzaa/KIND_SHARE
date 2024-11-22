<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/equipe.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- SCRIPT DA NAV BAR-->
    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');</style> <!-- LINK PARA CARROSEL-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- LINK PARA CARROSEL-->
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> <!-- LINK PARA CARROSEL-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- LINK PARA CARROSEL-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <!-- LINK PARA FOOTER-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Inclua o link para a biblioteca Font Awesome no seu HTML -->
<!-- JavaScript do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
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
    
        <!-- Header NAV BAR -->
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

<!-- TEXTO SOBRE EQUIPE -->
<div class="text-between">
    <h2>Conheça Nossa Equipe</h2>
    <p>Além de amigas, somos uma equipe, e com uma único objetivo: Facilitar a vida dos usuários que estão dispostos a mudar a vida de alguém. Formado o grupo com quatro meninas dispostas a aprender e com um único princípio.</p>
    <p>Esse projeto tem como finalidade de nos ajudar com experiências e com o auxilio do nosso orientador e um eterno amigo, Marcelo Collado. Queremos agradecer a paciência infinita. Mesmo que, muitas das vezes não tendo respostas para as nossas dúvidas, sempre nos ajudou com muito carinho e atenção.</p>
    <p>Certeza que levaremos todos esses conselhos para as nossas vidas!</p>
</div>


<!-- CARDS COM FOTOS NOSSAS -->
<section class="team-section">
    <div class="team-grid">
        <div class="member-card">
            <div class="card-front">
                <img src="img/ana.jpeg" alt="Ana Júlia Souza">
                <h3>Ana Júlia Souza</h3>
            </div>
            <div class="card-back">
                <p>Desenvolvedora Backend</p>
            </div>
        </div>
        <div class="member-card">
            <div class="card-front">
                <img src="img/gabi.jpeg" alt="Gabriela Correia">
                <h3>Gabriela Correia</h3>
            </div>
            <div class="card-back">
                <p>Desenvolvedora Frontend</p>
            </div>
        </div>
        <div class="member-card">
            <div class="card-front">
                <img src="img/gabi L.jpeg" alt="Gabriela Lujan">
                <h3>Gabriela Lujan</h3>
            </div>
            <div class="card-back">
                <p>Desenvolvedora Backend</p>
            </div>
        </div>
        <div class="member-card">
            <div class="card-front">
                <img src="img/karol.jpeg" alt="Karolinna Lessa">
                <h3>Karolinna Lessa</h3>
            </div>
            <div class="card-back">
                <p>Desenvolvedora Frontend</p>
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

<!-- Exibe a seta quando o usuário rolar 100px para baixo -->
<script>
    window.onscroll = function() {
        let btnToTop = document.querySelector('.btn-to-top');
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            btnToTop.style.display = "block";
        } else {
            btnToTop.style.display = "none";
        }
    };

    // Ao clicar no botão, rola suavemente até o topo da página
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