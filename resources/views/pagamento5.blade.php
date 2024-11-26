<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mensagem de Sucesso</title>

  <!-- Link para o CSS externo -->
  <link href="css/pagamento5.css" rel="stylesheet">
</head>
<body>

  <!-- Conteúdo da página -->
  <div class="container mt-5">
    <h1 class="text-center">Obrigado pela sua contribuição!</h1>
    <p class="text-center">Sua doação foi processada com sucesso.</p>

    <!-- Alerta de Sucesso -->
    <div class="alert alert-success text-center" role="alert">
      <strong>Obrigado por sua contribuição!</strong><br>
      Sua doação foi processada com sucesso.
    </div>

    <!-- Botões de Ação -->
    <div class="text-center mt-4">
      <button type="button" class="btn btn-secondary" id="closeButton">Fechar</button>
      <button type="button" class="btn btn-primary" id="finishButton">Finalizar</button>
    </div>
  </div>

  <script>
    // Evento de clique no botão "Fechar"
    document.getElementById('closeButton').addEventListener('click', function() {
      window.location.href = '/'; // Redireciona para a página doação7.html
    });

    // Evento de clique no botão "Finalizar"
    document.getElementById('finishButton').addEventListener('click', function() {
      window.location.href = '/doação'; // Redireciona para a página doação7.html
    });
  </script>

</body>
</html>