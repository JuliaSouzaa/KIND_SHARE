<!-- TELA ANTES DE LOGADA -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');</style> <!-- LINK PARA CARROSEL-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- LINK PARA CARROSEL-->
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> <!-- LINK PARA CARROSEL-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- LINK PARA CARROSEL-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <!-- LINK PARA FOOTER-->
    <link rel="shortcut icon" href="img/logo_web.png" type="image/x-icon">
    <title>KIND SHARE</title>
    
</head>
<body>


@include('components.nav')


<!--Carrosel-->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" >
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
        <div class="carousel-caption d-none d-md-block text-start" data-bs-interval="5000" >
          <h5>A caridade começa com você!</h5>
          <p>A mudança que o mundo precisa pode começar com uma pequena ação.</p>
        </div>
      </div>
    </div>
</div>
  </div>

  <!-- Seção de Ícones -->
<!-- Seção de Ícones -->
<div class="icon-section">
    <div>
        <img src="img/ong1.png" alt="Corações Unidos">
        <p><a href="/coracao_unido">Corações Unidos</a></p>
    </div>
    <div>
        <img src="img/ong2.png" alt="Lira e Cia">
        <p><a href="/lira-e-cia">Lira e Cia</a></p>
    </div>
    <div>
        <img src="img/ong3.png" alt="Vozes da Comunidade">
        <p><a href="/vozes-da-comunidade">Vozes da Comunidade</a></p>
    </div>
    <div>
        <img src="img/ong4.png" alt="Rede de Esperança">
        <p><a href="/rede-de-esperanca">Rede de Esperança</a></p>
    </div>
    <div>
        <img src="img/ong5.png" alt="Amigos do Bem">
        <p><a href="/amigos-do-bem">Amigos do Bem</a></p>
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
            <a href="https://www.instagram.com/kindshare__tcc/"><i class="fa-brands fa-instagram"></i></a>
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
