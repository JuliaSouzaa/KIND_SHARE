<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/sobre.css">

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
@include('components.nav')

<!--SOBRE NÓS-->
<section class="hero">
    <div class="hero-content">
        <h1>Conheça a <span>Kindshare</span></h1>
        <p>Transformando vidas através da solidariedade e conectando corações a instituições de caridade.</p>
        <a href="/equipe" class="btn">Nosso time</a>
    </div>
</section>

<section class="about" id="missao">
    <h2>Quem Somos</h2>
    <div class="about-content">
        <p>A <strong>Kindshare</strong> é uma plataforma inovadora que visa conectar pessoas dispostas a fazer a diferença com instituições de caridade que precisam de apoio. Nossa missão é facilitar doações e aumentar a conscientização sobre a importância de ajudar crianças em situação de vulnerabilidade.</p>
        <p>Acreditamos no poder da solidariedade e da transparência. Com o nosso sistema, você pode ajudar diretamente, seja por meio de doações financeiras ou apadrinhando uma criança. Cada contribuição é um passo em direção a um futuro melhor para milhares de crianças.</p>
    </div>
</section>

<section class="values">
    <div class="values-card">
        <h3>Transparência</h3>
        <p>Nosso compromisso é garantir que cada doação chegue ao destino correto e seja utilizada da melhor forma.</p>
    </div>
    <div class="values-card">
        <h3>Inovação</h3>
        <p>Utilizamos a tecnologia para facilitar e democratizar as doações, tornando o processo simples e acessível.</p>
    </div>
    <div class="values-card">
        <h3>Compromisso</h3>
        <p>Nossa equipe é formada por pessoas dedicadas e apaixonadas por transformar a vida de crianças e suas famílias.</p>
    </div>
</section>

<!-- ENTRAR EM CONTATO -->
<section class="contact-section">
    <h2>Entre em Contato</h2>
    <form action="#" method="post" class="contact-form">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Mensagem:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Enviar</button>
    </form>
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
            <li><a href="/">Home</a></li>
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

<!-- TEM HAVE COM A ROLAGEM DE CIMA PARA BAIXO DA TELA INICAL -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const heroSection = document.querySelector(".hero");
    heroSection.classList.add("visible");
});
</script>


</body>
</html>