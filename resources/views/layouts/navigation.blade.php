<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<!-- Mensagem de Login -->
<div id="welcome-message" style="display: none; background-color: #f0f0f0; padding: 10px; text-align: center; border-radius: 5px; position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 1000;">
    Bem-vindo(a), {{ Auth::user()->name }}!
</div>

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
                    <a class="nav-link"  href="{{ route('welcome') }}">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="instituicaoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">ONGS</a>
                    <ul class="dropdown-menu" aria-labelledby="instituicaoDropdown">
                        <li><a class="dropdown-item" href="#">Instituição</a></li>
                        <li><a class="dropdown-item" href="#">Doe Agora</a></li>
                        <li><a class="dropdown-item" href="#">Necessidades</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Envolva-se</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">GUIA</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="icons">
        <i class="fas fa-search icon" id="searchIcon"></i> <!-- Ícone de pesquisa -->
        <i class="fas fa-user icon" id="profileIcon" onclick="toggleDropdown()"></i> <!-- ícone do usuário -->
        <div class="user-dropdown">
           
            <div class="dropdown-content" id="dropdownMenu">
           
                <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ Auth::user()->name }}</a> <!-- Link para o perfil -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-button">Log Out</button> <!-- Botão de logout -->
                </form>
            </div>
        </div>
    </div>

</header>
    
<!-- Adicione o script para a mensagem de boas-vindas -->
<script>
    window.onload = function() {
        const message = document.getElementById('welcome-message');
        message.style.display = 'block';
        setTimeout(() => {
            message.style.display = 'none';
        }, 3000); // Exibe a mensagem por 3 segundos
    };

    function toggleDropdown() {
        const dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    }

    // Para fechar o dropdown ao clicar fora
    window.onclick = function(event) {
        const dropdownMenu = document.getElementById('dropdownMenu');
        if (!event.target.matches('#profileIcon')) {
            dropdownMenu.style.display = 'none';
        }
    };
</script>

<!-- Carrossel -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-start">
          <h5>Juntos, fazemos a diferença!</h5>
          <p>Cada gesto solidário transforma vidas e cria um futuro melhor.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="img/2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-start">
          <h5>Apoie quem mais precisa!</h5>
          <p>Sua ajuda é a esperança para milhares de pessoas.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-start">
          <h5>A caridade começa com você!</h5>
          <p>A mudança que o mundo precisa pode começar com uma pequena ação.</p>
        </div>
      </div>
    </div>
</div>

<!-- Seção de Ícones -->
<div class="icon-section">
    <div>
        <img src="img/ong1.png" alt="Corações Unidos">
        <p><a href="coracao_unido.html">Corações Unidos</a></p>
    </div>
    <div>
        <img src="img/ong2.png" alt="Lira e Cia">
        <p><a href="pagina-lira-e-cia.html">Lira e Cia</a></p>
    </div>
    <div>
        <img src="img/ong3.png" alt="Vozes da Comunidade">
        <p><a href="pagina-vozes-da-comunidade.html">Vozes da Comunidade</a></p>
    </div>
    <div>
        <img src="img/ong4.png" alt="Rede de Esperança">
        <p><a href="pagina-rede-de-esperanca.html">Rede de Esperança</a></p>
    </div>
    <div>
        <img src="img/ong5.png" alt="Amigos do Bem">
        <p><a href="pagina-amigos-do-bem.html">Amigos do Bem</a></p>
    </div>
</div>

<!-- Bloco de informação com imagem e texto -->
<div class="content-section">
    <div class="image-container">
      <img src="img/foto1.jpg" alt="Criança comendo 1">
    </div>
    <div class="text-container">
      <h2>Uma infância saudável</h2>
      <p>Na mesa, uma criança se concentra em sua refeição. O prato contém arroz, feijão, carne e salada, uma combinação equilibrada de nutrientes essenciais. O ambiente sugere uma refeição compartilhada, talvez em uma escola ou centro comunitário.</p>
      <a href="#" class="btn-learn-more">Saiba Mais</a>
    </div>
  </div>
  
  <div class="content-section">
    <div class="image-container">
      <img src="img/foto2.jpg" alt="Criança comendo 2">
    </div>
    <div class="text-container">
      <h2>Educação nutricional</h2>
      <p>Crianças aprendendo sobre a importância da alimentação saudável. As refeições balanceadas são fundamentais para o desenvolvimento físico e cognitivo delas.</p>
      <a href="#" class="btn-learn-more">Saiba Mais</a>
    </div>
  </div>
  
  <div class="content-section">
    <div class="image-container">
      <img src="img/foto3.jpg" alt="Criança comendo 3">
    </div>
    <div class="text-container">
      <h2>Alimentação consciente</h2>
      <p>Promover uma alimentação consciente ajuda as crianças a entenderem a importância de escolhas saudáveis e seu impacto em suas vidas e no meio ambiente.</p>
      <a href="#" class="btn-learn-more">Saiba Mais</a>
    </div>
  </div>

  <!-- lista de Necessidades -->
  <section class="comunidades">
    <div class="texto">
      <h2>Transformando Comunidades Todos Os Dias</h2>
      <p>
        Nossa equipe se dedica incansavelmente às comunidades, 
        oferecendo apoio contínuo em várias frentes. 
        Estamos comprometidos em ensinar e orientar crianças,
        
        prover alimentos para famílias necessitadas e espalhar esperança e fé por onde passamos.
         Com 15 serviços especializados em locais estratégicos, nossa atuação abrange desde a prevenção 
         e intervenção até a proteção e formação integral de crianças, adolescentes e jovens. Trabalhamos 
         para promover um ambiente mais seguro e acolhedor, estimulando o desenvolvimento pessoal e comunitário.
          Através de projetos educacionais e sociais, buscamos transformar vidas e construir um futuro melhor para todos.
      </p>
    </div>
    
    <div class="imagem-comunidade">
      <img src="img/nece1.jpg" class="img-fluid" alt="Pessoas na Comunidade">
      <button class="btnnecessidades">Ver Lista de Necessidades</button>
  </div>
  </section>

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
