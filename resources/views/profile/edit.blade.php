<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="css/editarperfil.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    <link rel="shortcut icon" href="img/logo_web.png" type="image/x-icon">
    <title>KIND SHARE</title>

</head>
<body>

@include('components.nav')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Seção de Atualização de Informações -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg login-card">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Atualizar Informações</h3>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Seção de Atualização de Senha -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg login-card">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Atualizar Senha</h3>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Seção de Deletar Usuário -->
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg login-card">
                <div class="max-w-xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Deletar Conta</h3>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

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