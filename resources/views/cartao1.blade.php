<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Formulário de Pagamento Elegante">
  <title>Pagamento cartão</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="{{ asset('css/card.css') }}">
  
  <style>
    /* Estilo personalizado para o botão */
    .btn-preto {
      background-color: #000;
      color: #fff;
      border: none;
    }

    .btn-preto:hover {
      background-color: #333;
      color: #fff;
    }

    /* Estilo personalizado para o formulário */
    .formulario {
      border-radius: 100px 0 100px 0;
    }
  </style>
</head>
<body>
  <!-- Título -->
  <div class="container my-5 text-center">
    <h1 class="fw-bold" style="color: black;">Pagamento Seguro</h1>

    <p class="text-muted">Preencha as informações abaixo para completar a transação</p>
  </div>

  <div class="container py-5">
    <div class="row justify-content-center g-5">
      <!-- Formulário -->
      <div class="col-md-6 order-md-1">
        <form class="needs-validation shadow p-4 rounded formulario" novalidate>
          <h4 class="mb-4 text-secondary">Detalhes do Cartão</h4>
          
          <div class="form-group mb-3">
            <label for="nome" class="form-label">Nome no cartão</label>
            <input type="text" class="form-control" id="nome" placeholder="JORGE F SILVA" 
                   onkeyup="atualizarCartao('card-nome', this.value)" required>
            <div class="invalid-feedback">Informe o nome no cartão.</div>
          </div>
          
          <div class="form-group mb-3">
            <label for="numero" class="form-label">Número do cartão</label>
            <input type="text" class="form-control" id="numero" maxlength="19" placeholder="5555 5555 5555 5555"
                   onkeyup="atualizarCartao('card-number', formatarNumeroCartao(this.value))" required>
            <div class="invalid-feedback">Informe o número do cartão.</div>
          </div>
          
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="validade" class="form-label">Data de validade</label>
              <input type="text" class="form-control" id="validade" maxlength="5" placeholder="MM/AA" 
                     onkeyup="atualizarCartao('validThru', 'Val: ' + this.value)" required>
              <div class="invalid-feedback">Data de expiração necessária.</div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cvv" class="form-label">CVV</label>
              <input type="password" class="form-control" id="cvv" maxlength="3" placeholder="123" 
                     onkeyup="atualizarCartao('card-cvv', this.value)" required>
              <div class="invalid-feedback">Informe o CVV.</div>
            </div>
          </div>
          
          <button class="btn btn-preto w-100 mt-4" type="submit" id="finishButton">Finalizar Pagamento</button>
        </form>
      </div>

      <!-- Visual do cartão -->
      <div class="col-md-4 order-md-2">
        <div class="card bg-gradient shadow-lg text-white">
          <div class="card-body">
            <div class="chip mb-4">
              <img src="img/chip.svg" alt="Chip" width="50">
            </div>
            <p id="card-number" class="h4 fw-bold text-light mb-4">5555 5555 5555 5555</p>
            <p id="validThru" class="text-light mb-4">Val: MM/AA</p>
            <p id="card-cvv" class="text-light mb-4">CVV: *</p> <!-- Adicionado o CVV no cartão -->
            <div class="d-flex justify-content-between align-items-center">
              <p id="card-nome" class="h5 text-uppercase fw-bold text-light">SEU NOME AQUI</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>

document.getElementById('finishButton').addEventListener('click', function(event) {
  event.preventDefault(); // Evita o envio padrão do formulário
  window.location.href = "{{ url('dashboard/pagamento5') }}"; // Redireciona para a página pagamento5.html
});

  // Função para atualizar os dados no cartão
  function atualizarCartao(idElemento, valor) {
    const campo = document.getElementById(idElemento);
    campo.textContent = valor;
  }

  // Função para formatar o número do cartão
  function formatarNumeroCartao(valor) {
    // Remove qualquer caractere não numérico
    let numero = valor.replace(/\D/g, "");
    
    // Divide o número em blocos de 4 dígitos e junta com um espaço
    let numeroFormatado = "";
    for (let i = 0; i < numero.length; i += 4) {
      numeroFormatado += numero.slice(i, i + 4) + " ";
    }
    
    // Remove o espaço final, se houver
    return numeroFormatado.trim();
  }

  // Adiciona o evento de atualização nos campos do cartão
  document.getElementById('nome').addEventListener('input', function () {
    atualizarCartao('card-nome', this.value.toUpperCase());
  });

  document.getElementById('numero').addEventListener('input', function () {
    let numeroFormatado = formatarNumeroCartao(this.value);
    atualizarCartao('card-number', numeroFormatado);
  });

  document.getElementById('validade').addEventListener('input', function () {
    atualizarCartao('validThru', 'Val: ' + this.value);
  });

  document.getElementById('cvv').addEventListener('input', function () {
    atualizarCartao('card-cvv', 'CVV: ' + this.value);  // Atualizando o CVV no cartão
  });
</script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- JS personalizado -->
  <script src="js/script.js"></script>
</body>
</html>