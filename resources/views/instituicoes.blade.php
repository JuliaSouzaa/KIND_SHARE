<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/instituicoes.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    <link rel="shortcut icon" href="img/5-Photoroom.png" type="image/x-icon">
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

    <!-- Barra de Pesquisa -->
    <div class="section-search-container">
    <input type="text" class="form-control" placeholder="Digite para buscar..." id="headerSearchInput">
    <button id="searchButton" class="btn btn-primary">Pesquisar</button>
</div>


<div class="categories">
    <h2>Categorias</h2>
    <div class="category-cards">
        <!-- Cartões de instituições -->
        <div class="category-card" data-name="Corações Unidos">
            <img src="img/ong1.png" alt="Corações Unidos">
            <p><a href="/coracao_unido" class="custom-button">Corações Unidos</a></p>
        </div>
        <div class="category-card" data-name="Lira e Cia">
            <img src="img/ong2.png" alt="Lira e Cia">
            <p><a href="/lira-e-cia" class="custom-button">Lira e Cia</a></p>
        </div>
        <div class="category-card" data-name="Vozes da Comunidade">
            <img src="img/ong3.png" alt="Vozes da Comunidade">
            <p><a href="/vozes-da-comunidade" class="custom-button">Vozes da Comunidade</a></p>
        </div>
        <div class="category-card" data-name="Rede de Esperança">
            <img src="img/ong4.png" alt="Rede de Esperança">
            <p><a href="/rede-de-esperanca" class="custom-button">Rede de Esperança</a></p>
        </div>
        <div class="category-card" data-name="Amigos do Bem">
            <img src="img/ong5.png" alt="Amigos do Bem">
            <p><a href="/amigos-do-bem" class="custom-button">Amigos do Bem</a></p>
        </div>

        <!-- Mensagem de erro -->
        <div id="noResultsMessage" style="display: none; text-align: center;">
            <p>Nenhuma instituição encontrada.</p>
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
    function filtrarInstituicoes() {
        const query = document.getElementById('headerSearchInput').value.toLowerCase(); // Texto digitado
        const cards = document.querySelectorAll('.category-card'); // Todos os cartões
        let anyVisible = false; // Variável para verificar se há algum card visível

        cards.forEach(card => {
            const name = card.getAttribute('data-name').toLowerCase(); // Nome da instituição

            if (name.includes(query)) {
                card.style.display = 'block'; // Mostra o card
                anyVisible = true; // Marca que pelo menos um card está visível
            } else {
                card.style.display = 'none'; // Esconde o card
            }
        });

        // Exibe ou esconde a mensagem de erro com base nos resultados
        const noResultsMessage = document.getElementById('noResultsMessage');
        if (anyVisible) {
            noResultsMessage.style.display = 'none'; // Esconde a mensagem de erro
        } else {
            noResultsMessage.style.display = 'block'; // Exibe a mensagem de erro
        }
    }

    document.getElementById('headerSearchInput').addEventListener('input', filtrarInstituicoes);
    document.getElementById('searchButton').addEventListener('click', filtrarInstituicoes);
</script>


<script>
    // Função de busca (compartilhada para input e botão)
    function filtrarInstituicoes() {
        const query = document.getElementById('headerSearchInput').value.toLowerCase(); // Texto digitado em minúsculas
        const cards = document.querySelectorAll('.category-card'); // Seleciona todos os cards

        cards.forEach(card => {
            const name = card.getAttribute('data-name').toLowerCase(); // Nome da instituição em minúsculas

            // Verifica se o nome inclui o texto digitado
            if (name.includes(query)) {
                card.style.display = 'block'; // Mostra o card se corresponde à pesquisa
            } else {
                card.style.display = 'none'; // Esconde o card se não corresponde
            }
        });
    }

    // Evento para digitação no input
    document.getElementById('headerSearchInput').addEventListener('input', filtrarInstituicoes);

    // Evento para clique no botão
    document.getElementById('searchButton').addEventListener('click', function () {
        filtrarInstituicoes();
    });
</script>

</body>
</html>
