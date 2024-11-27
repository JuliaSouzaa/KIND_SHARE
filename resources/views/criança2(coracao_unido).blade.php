<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/crianças.css') }}">

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

@include('components.nav')

  <!-- Perfil da criança -->
  <div class="comunidades">
    <div class="texto">
        <h2>Conheça o Pedro!</h2>
        <p>Pedro é um menino de 12 anos que sonha com um lar cheio de carinho e acolhimento. Tímido no começo, ele se revela uma criança cheia de curiosidade e com um coração enorme quando se sente à vontade. Gosta de aprender sobre o mundo ao seu redor, tem uma paixão especial por animais e sempre encontra alegria em desenhar seus próprios super-heróis, imaginando histórias onde a bondade vence no final.</p>
    </div>
    <!-- Imagem à direita -->
    <div class="imagem-comunidade">
        <img src="{{ asset('img/pedro (coracao_unido).jpg') }}" alt="Imagem do Pedro">
   <!-- Botão abaixo da imagem -->
<div class="container ver-mais">
    <a href="{{ url('dashboard/apadrinhe') }}" class="btn btn-link" @guest onclick="redirectToLogin(event)" @endguest>
    Apadrinhe Já</a>
</div>
</div>
</div>

<!-- Seção "Conheça as Outras Crianças" -->
<div class="outras-criancas">
    <h2>Conheça as Outras Crianças</h2>
    <!-- Seção com três imagens e subtítulos -->
    <div class="cards">
        
        <div class="card">
            <a href="{{ url('dashboard/criança1(coracao_unido)') }}">
                <img src="{{ asset('img/isabela (coracao_undio).jpg') }}" alt="Isabela">
                <h3>Isabela</h3>
                <p>9 anos</p>
            </a>
        </div>

         <div class="card">
            <a href="{{ url('dashboard/criança3(coracao_unido)') }}">
                <img src="{{ asset('img/felipe (coracao_unido).jpg') }}" alt="Felipe">
                <h3>Felipe</h3>
                <p>10 anos</p>
            </a>
        </div>

         <!-- Botão abaixo da imagem -->
         <div class="botao-imagem">
            <a href="{{ url('dashboard/apadrinhe') }}" class="btn btn-link">
            <button>Apadrinhar</button></a>
            </div>
    </div>
</div>

<!-- Botão abaixo das imagens -->
<div class="ver-mais">
    <a href="/instituicoes">
        <button>Veja Mais!</button>
    </a>
</div>

<br></br>

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
            <ul><li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Quem Somos</a></li>
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
