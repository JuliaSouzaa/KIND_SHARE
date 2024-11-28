<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia - KindShare</title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    <link rel="shortcut icon" href="img/logo_web.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500;600;700;800;900&display=swap">
    <style>

/* Define a fonte padrão para o site e remove as margens e preenchimentos padrões */
body {
    margin: 0;
    padding: 0;
    background-color: #FFFAFA !important;
}
.custom-page{
    border-top: 2px solid #ffa600;

}
        /* Layout geral */
        .container {
            max-width: 95%;
            margin: auto;
            padding: 20px;

        }

        /* Passos (containers com vídeo e texto) */
        .step-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 20px;
            overflow: hidden;
        }
        .step-container:nth-child(even) {
            flex-direction: row-reverse;
        }
        .step-text {
            flex: 1;
            padding: 20px;
        }
        .step-text h2 {
            color: #333;
            margin-bottom: 10px;
            font-size: 24px;
        }
        .step-text p {
            color: #666;
            font-size: 18px;
        }
        .step-video {
            flex: 1;
            max-width: 55%;
        }
        .step-video video {
            width: 100%;
            height: auto;
            border-radius: 12px;
        }

        .step-video:hover {
    transform: scale(1.05); /* Aumenta ligeiramente o tamanho ao passar o mouse */
    box-shadow: 0 0 15px 5px rgba(255, 255, 255, 0.8); /* Adiciona sombra */
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Fundo semi-transparente */
    color: white;
    font-size: 18px;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0; /* Invisível por padrão */
    transition: opacity 0.3s ease;
}


        /* Estilização do último container */
        .community-container {
            background-color: #f8cf47;
            padding: 120px;
            border-radius: 12px;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 100px 0 100px 0; /* Bordas arredondadas apenas nos cantos superiores */

        }
        .community-container h2 {
            color: #111;
            margin-bottom: 15px;
            font-size: 28px;
        }
        .community-container p {
            color: #333;
            font-size: 18px;
            line-height: 1.6;
        }
        .community-container button {
            display: block;
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .community-container button:hover {
            background-color: #555;
        }

        

        /* Estilização dos botões personalizados */
        .custom-button {
            display: inline-block;
            font-size: 14px;
            padding: 10px 20px;
            background-color: #f0a500;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 40px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .custom-button:hover {
            background-color: #e69500;
            transform: scale(1.05);
        }

/* Botão de voltar ao topo */
.btn-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #e69500;
    color: rgb(0, 0, 0);
    font-size: 24px;
    padding: 15px;
    border-radius: 12px; /* Borda levemente arredondada */
    display: none; /* Inicialmente invisível */
    z-index: 1000;
    width: 50px;  /* Deixando o botão quadrado */
    height: 50px; /* Deixando o botão quadrado */
    text-align: center;
    line-height: 20px; /* Alinha o ícone verticalmente */
}

.btn-to-top:hover {
    background-color: rgb(255, 215, 56);
    color: black;
    transition: 0.3s ease;
}

   /* FOOTER */
   * {
    padding: 0; /* Remove todo o preenchimento (padding) de todos os elementos */
    margin: 0; /* Remove toda a margem de todos os elementos */
    box-sizing: border-box; /* Inclui o padding e a borda no cálculo da largura e altura dos elementos */
}

footer {
    background-color: #111; /* Define a cor de fundo do footer como um cinza escuro */
}

.footerContainer {
    width: 100%; /* Faz com que o container do footer ocupe toda a largura disponível */
    padding: 70px 30px 20px; /* Define o preenchimento interno do footer */
}

.socialIcons {
    display: flex; /* Utiliza o layout flexbox para organizar os ícones sociais em linha */
    justify-content: center; /* Centraliza os ícones sociais horizontalmente */
}

.socialIcons a {
    text-decoration: none; /* Remove o sublinhado dos links */
    padding: 10px; /* Adiciona espaço interno ao redor dos links dos ícones */
    background-color: orange; /* Define a cor de fundo dos ícones sociais como laranja */
    margin: 10px; /* Adiciona uma margem de 10px ao redor dos ícones sociais */
    border-radius: 50%; /* Faz com que os ícones tenham bordas arredondadas */
}

.socialIcons a i {
    font-size: 2em; /* Define o tamanho do ícone social como 2em */
    color: black; /* Define a cor dos ícones como preto */
    opacity: 0.9; /* Define a opacidade dos ícones como 90% */
}

/* Efeito de hover nos ícones sociais */
.socialIcons a:hover {
    background-color: #111; /* Muda a cor de fundo para cinza escuro ao passar o mouse */
    transition: 0.5s; /* Aplica uma transição suave ao mudar de cor */
}

.socialIcons a:hover i {
    color: white; /* Muda a cor do ícone para branco ao passar o mouse */
    transition: 0.5s; /* Aplica uma transição suave ao mudar de cor do ícone */
}

.footerNav {
    margin: 30px 0; /* Adiciona uma margem de 30px em cima e embaixo da navegação do footer */
}

.footerNav ul {
    display: flex; /* Utiliza o layout flexbox para organizar os itens da lista em linha */
    justify-content: center; /* Centraliza os itens da lista horizontalmente */
    list-style-type: none; /* Remove os marcadores da lista */
}

.footerNav ul li a {
    color: white; /* Define a cor dos links da navegação como branca */
    margin: 20px; /* Adiciona uma margem de 20px ao redor dos links */
    text-decoration: none; /* Remove o sublinhado dos links */
    font-size: 1.3em; /* Define o tamanho da fonte dos links da navegação */
    opacity: 0.7; /* Define a opacidade dos links como 70% */
    transition: 0.5s; /* Aplica uma transição suave nas propriedades que mudam */
}

.footerNav ul li a:hover {
    opacity: 1; /* Aumenta a opacidade para 100% ao passar o mouse sobre os links */
}

.footerBottom {
    background-color: #000; /* Define a cor de fundo da parte inferior do footer como preto */
    padding: 20px; /* Adiciona um espaço interno de 20px ao redor do conteúdo */
    text-align: center; /* Centraliza o texto dentro do footer inferior */
}

.footerBottom p {
    color: white; /* Define a cor do texto como branca */
}

.designer {
    opacity: 0.7; /* Define a opacidade como 70% */
    text-transform: uppercase; /* Transforma o texto para letras maiúsculas */
    letter-spacing: 1px; /* Adiciona espaçamento entre as letras */
    font-weight: 400; /* Define o peso da fonte como normal */
    margin: 0px 5px; /* Adiciona uma margem de 5px ao redor do texto */
}

@media (max-width: 700px) {
    .footerNav ul {
        flex-direction: column; /* Muda a direção dos itens da lista para coluna em telas menores */
    } 
    .footerNav ul li {
        width: 100%; /* Faz com que cada item da lista ocupe toda a largura disponível */
        text-align: center; /* Centraliza o texto dos itens da lista */
        margin: 10px; /* Adiciona uma margem de 10px ao redor dos itens da lista */
    }
    .socialIcons a {
        padding: 8px; /* Reduz o preenchimento interno dos ícones sociais em telas menores */
        margin: 4px; /* Reduz a margem dos ícones sociais em telas menores */
    }
}

footer {
    background-color: #111; /* Redefine a cor de fundo do footer (redundante, pois já está definido anteriormente) */
    clear: both; /* Garante que o footer não flutue dentro de outro container, forçando-o a aparecer abaixo de qualquer elemento flutuante */
}

/* ESTILIZAÇÃO TELA LOGADA (HAMBURGUER LOG OUT E PERFIL)*/

/* Estilos do menu suspenso */
.user-dropdown {
    position: relative; /* Para que o dropdown se posicione corretamente */
}

.dropdown-content {
    display: none; /* Inicialmente escondido */
    position: absolute; /* Posiciona o menu abaixo do ícone */
    left: -140px; /* Alinha à esquerda do ícone com um pequeno deslocamento */
    top: 20px; /* Ajuste este valor para mover o menu para baixo */
    background-color: black; /* Fundo preto para o dropdown */
    min-width: 160px; /* Largura mínima do dropdown */
    box-shadow: 0 8px 16px rgba(0,0,0,0.2); /* Sombra para o dropdown */
    z-index: 1; /* Coloca o dropdown acima de outros elementos */
    padding: 10px; /* Espaçamento interno do dropdown */
    border-radius: 8px; /* Cantos arredondados */
}

.dropdown-link, .dropdown-button {
    background: none; /* Sem fundo */
    border: none; /* Sem borda */
    cursor: pointer; /* Cursor de ponteiro */
    color: white; /* Cor do texto */
    text-decoration: none; /* Sem sublinhado nos links */
    display: block; /* Cada item ocupa uma linha */
    padding: 8px 0; /* Espaçamento entre os itens */
    width: 100%; /* O item ocupa 100% da largura */
    text-align: left; /* Alinha o texto à esquerda */
    transition: background-color 0.3s, color 0.3s; /* Transição suave para a cor de fundo e do texto */
}

/* Garante que tanto os links quanto os botões tenham o mesmo efeito */
.dropdown-link:hover, .dropdown-button:hover {
    background-color: #e69500;  /* Efeito ao passar o mouse */
    color: white; /* Garante que o texto permaneça branco no hover */
    width: 100%; /* Estende o efeito sobre toda a linha */
}

/* Remover o estilo padrão de links para garantir comportamento idêntico ao botão */
.dropdown-link{
    text-decoration: none; /* Remove sublinhado padrão do link */
    color: white; /* Cor do texto para o link também */
    display: block; /* Garante que o link se comporte como bloco */
}


    </style>
</head>
<body>
    <!-- Navbar -->
@include('components.nav')
<div class="custom-page">

    <!-- Conteúdo Principal -->
    <main class="container">
        <!-- Passo 1 -->
        <div class="step-container">
            <div class="step-text">
                <h2>Como encontrar a instituição que quero doar</h2>
                <p>Neste vídeo, mostramos como navegar no sistema para encontrar instituições parceiras disponíveis para doação.</p>
                <a href="/instituicoes" class="custom-button">Explorar Instituições</a>
            </div>
            <div class="step-video">
                <video autoplay muted loop controls>
                    <source src="mp4/video1.mp4" type="video/mp4">
                    Seu navegador não suporta vídeos.
                </video>
            </div>
        </div>

        <!-- Passo 2 -->
        <div class="step-container">
            <div class="step-text">
                <h2>Como escolher a melhor forma de contribuir</h2>
                <p>Aprenda as opções de contribuição, como doações únicas, recorrentes e outros métodos de apoio.</p>
                <a href="/lista_necessidades" class="custom-button">Visualizar Necessidades</a>
                <a href="/doacao" class="custom-button">Fazer Doação</a>
            </div>
            <div class="step-video">
                <video autoplay muted loop controls>
                    <source src="mp4/video2.mp4" type="video/mp4">
                    Seu navegador não suporta vídeos.
                </video>
            </div>
        </div>

        <!-- Passo 3 -->
        <div class="step-container">
            <div class="step-text">
                <h2>Como apadrinhar uma criança</h2>
                <p>Descubra como apadrinhar crianças de instituições parceiras e transformar vidas com seu apoio. <br> Só é possível acessar essa sessão realizando o cadastro ou login caso já tenha uma conta. </p>
                <a href="{{ url('dashboard/apadrinheAmi') }}" class="custom-button" @guest onclick="redirectToLogin(event)" @endguest>
                Apadrinhar</a>
            </div>
            <div class="step-video">
                <video autoplay muted loop controls>
                    <source src="mp4/video3.mp4" type="video/mp4">
                    Seu navegador não suporta vídeos.
                </video>
            </div>
        </div>

        <!-- Último Container -->
        <div class="community-container">
            <h2>Possui alguma organização solidária?</h2>
            <p>A equipe KindShare é uma oportunidade incrível e um verdadeiro elo que conecta instituições dedicadas ao bem-estar de crianças àqueles que desejam contribuir com doações e apoio. Nosso objetivo é potencializar a visibilidade dessas causas tão importantes e facilitar o processo de arrecadação para transformar vidas.
                <br><br>Entre em contato conosco e faça parte dessa jornada solidária. Junte-se à KindShare e seja um membro dessa ponte de esperança! 🧡</p>
            <button onclick="window.location.href='/sobre'">Entrar em Contato</button>
        </div>
</div>
    </main>

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


</script>



</body>
</html>
