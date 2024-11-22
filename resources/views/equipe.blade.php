<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/equipe.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
  
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

</body>
</html>