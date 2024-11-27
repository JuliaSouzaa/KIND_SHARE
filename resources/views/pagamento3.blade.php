<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doação</title>
  <link rel="stylesheet" href="{{ asset('css/pagamento3.css') }}">
  <!-- Link para o Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

  <div class="doacao-container">
    <!-- Ícone de seta "Voltar" dentro do container, ao lado do título -->
           <!-- Botão de Fechar -->
           <button class="btn-close" id="btnClose">&times;</button>

    <a href="{{ url('dashboard/pagamento2') }}" class="back-button">
      <i class="fas fa-arrow-left"></i>
    </a>

    <h2>
      <span class="title-text">Sua Doação</span>
    </h2>
    <br></br>
    <div class="informacoes-doacao">
      <div class="informacao-item">
        <div class="icon">
          <img src="https://img.icons8.com/ios-filled/50/000000/charity.png" alt="Instituição">
        </div>
        <div class="texto">
          <span class="label">Instituição</span>
          <span class="value">Kind Share</span>
        </div>
      </div>
      <div class="informacao-item">
        <div class="icon">
          <img src="https://img.icons8.com/ios-filled/50/000000/money.png" alt="Valor">
        </div>
        <div class="texto">
          <span class="label">Valor da Doação</span>
          <span class="value">R$20,00</span>
        </div>
      </div>
    </div>

    <h4>Método de Pagamento</h4>
    <div class="payment-method">
      <label class="payment-option">
        <input type="radio" name="paymentMethod" value="pix" checked>
        <div class="payment-icon">

        </div>
        <span class="payment-text">PIX</span>
        <span class="checkmark"></span>
      </label>
    </div>
	

	<div class="payment-method">
  <label class="payment-option">
    <input type="radio" name="paymentMethod" value="cartao">
    <div class="payment-icon"></div>
    <span class="payment-text">Cartão</span>
    <span class="checkmark"></span>
  </label>
</div>
    
   <div class="actions">
  <button class="btn btn-primary" id="next">Próximo</button>
</div>

  <script>
document.getElementById('next').addEventListener('click', function() {
  const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
  
  if (selectedPaymentMethod === 'pix') {
    window.location.href = "{{ url('dashboard/pagamento4') }}"; // Página do PIX
  } else if (selectedPaymentMethod === 'cartao') {
    window.location.href = '{{ url('dashboard/cartao1') }}'; // Página do Cartão
  }
});
</script>


<script>
    // Função para fechar o container e redirecionar para a página 'doacao.html'
    document.getElementById('btnClose').addEventListener('click', function() {
    window.location.href = '/doação'; // Redireciona para a página doação.html
  });
</script>

</body>
</html>