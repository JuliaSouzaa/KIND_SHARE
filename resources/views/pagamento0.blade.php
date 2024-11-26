<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escolha a Instituição para Doação</title>
  <link rel="stylesheet" href="css/pagamento0.css">
</head>
<body>

  <!-- Container principal -->
  <div class="container">
    <div class="content">
      <!-- Botão de Fechar -->
      <button class="btn-close" id="btnClose">&times;</button>

      <h1>Escolha a instituição que deseja doar:</h1>
      
      <form id="donationForm">
        <div class="form-group">
          <label for="institutionSelect">Instituições</label>
          <select class="select" id="institutionSelect" required>
            <option value="" disabled selected>Selecione uma Instituição</option>
            <option value="1">Coração Unido</option>
            <option value="2">Lira & Cia</option>
            <option value="3">Vozes da Comunidade</option>
            <option value="1">Rede de Esperança</option>
            <option value="2">Amigo do Bem</option>
            <option value="3">Brand Logo</option>
          </select>
        </div>

        <hr class="divider">
        <p class="info-text">Você é escolhido para mudar vidas de outras crianças.</p>

        <button type="submit" class="btn-next">Próximo</button>
      </form>
    </div>
  </div>

<script>
  document.getElementById('donationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio do formulário (página não será recarregada)
  
    const institutionSelect = document.getElementById('institutionSelect');
  
    // Verifica se uma instituição foi selecionada
    if (institutionSelect.value) {
      // Caso tenha selecionado uma instituição, redireciona para pagamento1.html
      window.location.href = '/pagamento1'; 
    } else {
      // Se não houver seleção, mostra um alerta
      alert('Por favor, selecione uma instituição antes de continuar.');
    }
  });

  // Função para fechar o container e redirecionar para a página 'doacao.html'
  document.getElementById('btnClose').addEventListener('click', function() {
    window.location.href = 'doação.html'; // Redireciona para a página doação.html
  });
</script>

</body>
</html>