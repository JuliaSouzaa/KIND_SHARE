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
    <link rel="shortcut icon" href="img/logo_web.png" type="image/x-icon">

    <title>KIND SHARE</title>

</head>
<body>

@include('components.nav')

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
        <h2>Vozes da Comunidade</h2>
        <p>A <strong>Vozes da Comunidade</strong> é uma organização dedicada a amplificar as vozes de grupos marginalizados e promover a inclusão social. Acreditamos que cada história é importante e que a mudança começa quando as pessoas têm a oportunidade de se expressar. Por meio de workshops, eventos e campanhas de conscientização, trabalhamos para fortalecer a autonomia das comunidades e fomentar o diálogo. Junte-se a nós para construir um futuro onde todos têm a chance de ser ouvidos!</p>
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
        <a class="botao-imagem" href="/doação">
            <button>QUERO DOAR!!</button>
        </a>
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
  <p>Com apenas R$ 100,00 mensais, você contribui para a transformação social e permite que nossas crianças continuem sonhando.</p>
  <br>
  <div class="row">
      <div class="col-md-4">
          <div class="card">
              <a href="{{ url('dashboard/criança1(vozes-da-comunidade)') }}" @guest onclick="redirectToLogin(event)" @endguest>
                  <img src="img/maria (Vozes-Comunidade).jpg" class="card-img-top" alt="Isabela">
                  <div class="card-body">
                      <h3 class="card-title">Maria</h3>
                      <p class="card-text">8 anos</p>
                  </div>
              </a>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <a href="{{ url('dashboard/criança2(vozes-da-comunidade)') }}" @guest onclick="redirectToLogin(event)" @endguest>
                  <img src="img/betania (Vozes-Comunidade).jpg" class="card-img-top" alt="Pedro">
                  <div class="card-body">
                      <h3 class="card-title">Betania</h3>
                      <p class="card-text">9 anos</p>
                  </div>
              </a>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <a href="{{ url('dashboard/criança3(vozes-da-comunidade)') }}" @guest onclick="redirectToLogin(event)" @endguest>
                  <img src="img/nicolli (Vozes-Comunidade).jpg" class="card-img-top" alt="Felipe">
                  <div class="card-body">
                      <h3 class="card-title">Nicolli</h3>
                      <p class="card-text">10 anos</p>
                  </div>
              </a>
          </div>
      </div>
  </div>
</div>

<br><br><br>


<!-- Botão abaixo das imagens -->
<div class="container ver-mais">
    <a href="{{ url('dashboard/apadrinheComu') }}" class="btn btn-link" @guest onclick="redirectToLogin(event)" @endguest>
    Apadrinhe Já</a>
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

</body>
</html>