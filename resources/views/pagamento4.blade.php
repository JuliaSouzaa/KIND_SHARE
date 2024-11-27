<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagamento com Pix</title>
  <!-- Link para o arquivo CSS externo -->
  <link rel="stylesheet" href="{{ asset('css/pagamento4.css') }}">
  <!-- Fonte Google -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

  <div class="container">
    <!-- Seção de pagamento com Pix -->
    <h2>Pagamento com Pix</h2>
    
    <!-- Instruções para o pagamento -->
    <div class="alert alert-info">
      Copie a chave Pix abaixo para realizar sua contribuição:
    </div>

    <!-- Chave Pix -->
    <div class="text-center">
      <p><strong>11953097836</strong></p>
    </div>

    <!-- Botões de ação -->
    <div class="button-container">
      <a href="{{ url('dashboard/pagamento3') }}" class="btn btn-secondary">Voltar</a>
      <a href="{{ url('dashboard/pagamento5') }}" class="btn btn-primary">Finalizar</a>
    </div>
  </div>

  <!-- Link para os scripts do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0p8fe4lx+PBXwRjjlS7THZl+UMt6yt0Z57H3CNRJK2xgFSTj" crossorigin="anonymous"></script>

</body>
</html>