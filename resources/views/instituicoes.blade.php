<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/instituicoes.css') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    <link rel="shortcut icon" href="{{ asset('img/logo_web.png') }}" type="image/x-icon">
    <title>KIND SHARE</title>
</head>
<body>
 
@include('components.nav')

<!-- Main Content -->
<section class="institutions-section">
    <div class="intro">
        <h1>Bem-vindo à seção de Instituições</h1>
        <p>Explore as instituições que incentivam a sua participação.</p>
    </div>
    <div class="section-search-container">
        <input type="text" class="form-control" placeholder="Digitar..." id="headerSearchInput">
        <button id="searchButton">Pesquisar</button>
    </div>


    <div class="categories">
        <h2>Categorias</h2>
        <div class="category-cards">
            <div class="category-card">
                <img src="{{ asset('img/ong1.png') }}" alt="Corações Unidos">
                <p><a href="{{ asset('/coracao_unido') }}" class="custom-button">Corações Unidos</a></p>
            </div>            
          <div class="category-card">
            <img src="{{ asset('img/ong2.png') }}" alt="Instituição 2">
            <p><a href="{{ asset('/lira-e-cia') }}" class="custom-button">Lira e Cia</a></p>
          </div>
          <div class="category-card">
            <img src="{{ asset('img/ong3.png') }}" alt="Instituição 3">
            <p><a href="{{ asset('/vozes-da-comunidade') }}" class="custom-button">Vozes da Comunidade</a></p>
          </div>
          <div class="category-card">
            <img src="{{ asset('img/ong4.png') }}" alt="Instituição 4">
            <p><a href="{{ asset('/rede-de-esperanca') }}" class="custom-button">Rede de Esperança</a></p>
          </div>
          <div class="category-card">
            <img src="{{ asset('img/ong5.png') }}" alt="Instituição 5">
            <p><a href="{{ asset('/amigos-do-bem') }}" class="custom-button">Amigos do Bem</a></p>
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

</body>
</html>
