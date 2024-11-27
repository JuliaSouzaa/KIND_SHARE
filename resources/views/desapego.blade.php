<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/desapego.css') }}">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- SCRIPT DA NAV BAR-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer">

  <title>Kind share</title>

  <style>
    form, main {
      display: grid;
    }

    h1 {
      font-size: 32px;
    }

    h1, p {
      text-align: center;
    }

    input, textarea {
      margin-bottom: 16px;
      background-color: #ffffff;
      border-radius: 2px;
      text-indent: 16px;
      color: #212121;
    }

    textarea {
      padding-top: 16px;
    }

    input[type="file"] {
      background-color: transparent;
      color: #000000;
      margin: 8px 0px 0px -16px;
    }

    input,
    .button {
      height: 40px;
    }

    .button {
      background-color: #000000;
      cursor: pointer;
      color: #fff;
      border-radius: 2px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .button:hover {
      opacity: 0.9;
    }

    </style>

    <style>
    .search-container {
      display: none;
      /* Inicialmente oculta */
      position: absolute;
      /* Remove da normal flow */
      right: 80px;
      /* Ajuste para mais à esquerda */
      top: 15px;
      /* Ajuste conforme necessário para a posição vertical */
      z-index: 1000;
      /* Fica acima de outros elementos */
    }

    #searchInput {
      width: 200px;
      /* Ajuste o tamanho conforme necessário */
      margin-right: 5px;
      /* Espaço entre a caixa de texto e a lupa */
    }
  </style>

</head>

<body>

@include('components.nav')
  <section class="conteudo">
    <div id="top">

    <form action="{{ route('doacao.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
        <h1>Doação de itens</h1>
        <p>Por favor, preencha o formulário para doar um item. Iremos certificar se o item está em boas condições!</p>
        <br>
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="telefone" placeholder="Telefone">
        <input type="email" name="email" placeholder="E-mail">
        <label for="instituicao">Escolha uma instituição</label>
        <select name="instituicao" id="instituicao" required>
        <option value="Coracoes unidos">Corações unidos</option>
        <option value="Lira e Cia">Lira e Cia</option>
        <option value="Vozes da comunidade">Vozes da comunidade</option>
        <option value="Rede de esperança">Rede de esperança</option>
        <option value="Amigos do bem">Amigos do bem</option>
      </select>
        <label for="arquivo">Anexe um ou mais arquivos</label>
        <input type="file" name="arquivo[]" multiple>
        <textarea name="mensagem" cols="45" rows="5"
          placeholder="Digite detalhes dos itens que você pretende doar..."></textarea>
        <button type="submit" class="button">Enviar mensagem</button>
      </form>

    </div>
  </section>


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

  <!-- FOOTER -->
  <footer class="text-center mt-5">
    <div class="footerContainer mb-3">
      <div class="socialIcons">
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-youtube"></i></a>
      </div>
      <div class="footerNav">
        <ul class="list-inline">
          <li class="list-inline-item"><a href="">Home</a></li>
          <li class="list-inline-item"><a href="">Sobre</a></li>
          <li class="list-inline-item"><a href="">Quem Somos</a></li>
        </ul>
      </div>
    </div>
    <div class="footerBottom">
      <p>Copyright &copy; 2024; KIND SHARE</p>
    </div>
  </footer>




</body>
</html>