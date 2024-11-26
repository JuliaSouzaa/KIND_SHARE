<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/sobre.css') }}">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
  
    <link rel="shortcut icon" href="{{ asset('img/logo_web.png') }}" type="image/x-icon">

    <title>KIND SHARE</title>
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
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <form action="{{ route('contact.submit') }}" method="post" class="contact-form">
        @csrf <!-- Adiciona um token CSRF para segurança -->
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
        <a href="https://www.instagram.com/kindshare__tcc/"><i class="fa-brands fa-instagram"></i></a>
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

<!-- TEM HAVE COM A ROLAGEM DE CIMA PARA BAIXO DA TELA INICAL -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const heroSection = document.querySelector(".hero");
    heroSection.classList.add("visible");
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alert = document.querySelector('.alert-success');
        if (alert) {
            setTimeout(() => {
                alert.style.display = 'none';
            }, 5000); // 5000 ms = 5 segundos
        }
    });
</script>


</body>
</html>