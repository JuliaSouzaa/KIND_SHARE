<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/lista_necessidades.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');</style> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

<!-- Carrossel -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/lista_necessidades.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-start">
                <h5>Juntos, fazemos a diferença!</h5>
                <p>Cada gesto solidário transforma vidas e cria um futuro melhor.</p>
            </div>
        </div>
    </div>
</div>

<Br>

    <!-- Carrosel de informações-->
<section id="necessidades">
    <h2>Obrigado por visitar nossa lista de necessidades!</h2>
    <p>Aqui, você encontrará todas as informações sobre como pode colaborar e transformar a vida de muitas crianças. Seja por meio de uma contribuição financeira através do nosso site ou doando itens específicos, cada gesto de generosidade terá um impacto profundo.</p>
    <p>Sua participação é essencial para o sucesso de nossos projetos, e cada ato de solidariedade nos aproxima ainda mais de nosso objetivo: oferecer um futuro mais promissor para essas crianças. Venha fazer parte dessa missão de <strong>amor e esperança!</strong></p>
    <p>Contribua agora ou entre em contato pelo WhatsApp para saber mais sobre os produtos que estamos precisando. Estamos prontos para receber sua ajuda com muita gratidão e carinho!</p>
</section>

<div id="carrossel-informacoes" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-content">
                <div class="carousel-text">
                    <h2>Corações Unidos</h2>
                    <hr>
                    <h4>Alimentos:</h4>
                    <ul>
                        <li>Arroz, feijão e macarrão</li>
                        <li>Leite em pó ou integral</li>
                        <li>Óleo de cozinha</li>
                        <li>Açúcar, sal e farinha de trigo</li>
                    </ul>
                    <h4>Produtos de Higiene:</h4>
                    <ul>
                        <li>Sabonetes e shampoo</li>
                        <li>Creme dental e escovas de dente</li>
                        <li>Papel higiênico</li>
                    </ul>
                    <div class="button-container">
                        <button class="btn-doar">DOAR</button>
                        <button class="btn-doar-especifico">DOAR ITEM ESPECÍFICO</button>
                    </div>
                </div>
                <div class="carousel-image">
                    <img src="img/lis_nece1.jpg" class="img-fluid" alt="Imagem de doação">
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-content">
                <div class="carousel-text">
                    <h2>Lorem Ipsum</h2>
                    <hr>
                    <h4>Alimentos Necessários:</h4>
                    <ul>
                        <li>Feijão preto e arroz integral</li>
                        <li>Leite desnatado</li>
                        <li>Azeite de oliva</li>
                        <li>Farinha de trigo integral</li>
                    </ul>
                    <h4>Itens de Higiene:</h4>
                    <ul>
                        <li>Sabonetes líquidos</li>
                        <li>Desodorantes</li>
                        <li>Toalhas de papel</li>
                    </ul>
                    <div class="button-container">
                        <button class="btn-doar">DOAR</button>
                        <button class="btn-doar-especifico">DOAR ITEM ESPECÍFICO</button>
                    </div>
                </div>
                <div class="carousel-image">
                    <img src="img/lis_nece2.jpg" class="img-fluid" alt="Imagem de doação">
                </div>
            </div>
        </div>
    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carrossel-informacoes" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carrossel-informacoes" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>

<br></br> 

<!-- Botão de voltar ao topo -->
<a href="#" class="btn-to-top">
    <i class="fa-solid fa-arrow-up"></i>
</a>

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
