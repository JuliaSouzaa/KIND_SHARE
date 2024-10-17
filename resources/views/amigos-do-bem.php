<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ongs.css">

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


<!--Carrosel-->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" >
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/lira-e-cia.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-start">
          <h5>Juntos, fazemos a diferença!</h5>
          <p>Cada gesto solidário transforma vidas e cria um futuro melhor.</p>
        </div>
      </div>
    </div>
</div>

  <br><br>

 <!-- FAÇA SUA PARTE -->
 <div class="call-to-action">
  <span class="donate-btn">FAÇA SUA PARTE</span>
  <br>
  <p>Sua doação tem o poder <br> de transformar vidas.</p>
</div>

<!--Sobre a ONG -->
<div class="comunidades">
    <div class="texto">
        <h2>Amigos do Bem</h2>
        <p>A <strong>Amigos do Bem</strong> é uma organização sem fins lucrativos comprometida em transformar vidas e comunidades por meio da solidariedade. Atuamos na luta contra a fome e a pobreza, fornecendo alimentos, educação e oportunidades de trabalho para aqueles que mais precisam. Nossa abordagem é baseada no respeito e na dignidade, sempre buscando empoderar os indivíduos e promover mudanças sustentáveis. Junte-se a nós e seja um amigo do bem, contribuindo para um mundo mais justo e solidário!</p>
</div>
    
    <!-- Carrossel à direita com botão "Apadrinhar" abaixo -->
    <div class="imagem-comunidade">
        <div class="carrossel">
            <div class="carrossel-images">
                <img src="img/lira-e-cia1.jpg" alt="Perfil ONG">
                <img src="img/lira-e-cia2.jpg" alt="Perfil ONG">
                <img src="img/lira-e-cia3.jpg" alt="Perfil ONG">
            </div>
            <!-- Controles do carrossel -->
            <button class="carrossel-btn prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="carrossel-btn next" onclick="moveSlide(1)">&#10095;</button>
        </div>
        
        <!-- Botão abaixo do carrossel -->
        <div class="botao-imagem">
            <button>QUERO DOAR!!</button>
        </div>
    </div>
</div>

<!-- Script para funcionamento do carrossel -->
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carrossel-images img');
    const totalSlides = slides.length;

    function updateSlidePosition() {
        const offset = -currentSlide * 600; // 600 é a largura das imagens
        document.querySelector('.carrossel-images').style.transform = `translateX(${offset}px)`; // Use crase para template string
    }

    function moveSlide(step) {
        currentSlide = (currentSlide + step + totalSlides) % totalSlides;
        updateSlidePosition();
    }
</script>



<!-- Seção do mapa com fundo amarelo -->
<section class="mapa">
  <div class="mapa-content">
      <h2>Conheça Nossa Instituição</h2>
      <br></br>
      <div class="mapa-container">
          <!-- Novo elemento para o fundo amarelo -->
          <div class="mapa-background"></div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d434.1040027682777!2d-46.64044809999999!3d-23.548988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce589fa0d7d937%3A0xd11f95db334b48d0!2sAv.%20Paulista%2C%201500%20-%20Bela%20Vista%2C%20São%20Paulo%20-%20SP%2C%2001301-000!5e0!3m2!1spt-BR!2sbr!4v1694646165567!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </div>
</section>

<br><br>

<!-- Seção "Conheça as Outras Crianças" -->
<div class="container outras-criancas">
  <h2>Conheça As Outras Crianças</h2>
  <div class="row">
      <div class="col-md-4">
          <div class="card">
              <a href="/criança1(Lira-e-Cia)">
                  <img src="img/ana (Amigos-do-Bem).jpg" class="card-img-top" alt="Isabela">
                  <div class="card-body">
                      <h3 class="card-title">Fernanda</h3>
                      <p class="card-text">12 anos</p>
                  </div>
              </a>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <a href="/criança2(Lira-e-Cia)">
                  <img src="img/julia (Amigos-do-Bem).jpg" class="card-img-top" alt="Pedro">
                  <div class="card-body">
                      <h3 class="card-title">Helena</h3>
                      <p class="card-text">9 anos</p>
                  </div>
              </a>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <a href="/criança3(Lira-e-Cia)">
                  <img src="img/eloá (Amigos-do-Bem).jpg" class="card-img-top" alt="Felipe">
                  <div class="card-body">
                      <h3 class="card-title">Julieta</h3>
                      <p class="card-text">13 anos</p>
                  </div>
              </a>
          </div>
      </div>
  </div>
</div>

<br><br><br>


<!-- Botão abaixo das imagens -->
<div class="container ver-mais">
  <button class="btn btn-primary">Veja Mais!</button>
</div>

<br><br>

  <!-- Botão de voltar ao topo -->
  <a href="#" class="btn-to-top">
    <i class="fa-solid fa-arrow-up"></i>
  </a>
  
  <!--FOOTER-->
  <footer>
    <div class="footerContainer"></div>
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footerNav">
            <ul><li><a href="/">Home</a></li>
                <li><a href="/sobre">Sobre</a></li>
                <li><a href="/equipe">Quem Somos</a></li>
            </ul>
        </div>
        
    </div>
    <div class="footerBottom">
        <p>Copyright &copy;2024; KIND SHARE</p>
    </div>
  </footer>

<!-- Exibe a seta quando o usuário rolar 100px para baixo-->
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