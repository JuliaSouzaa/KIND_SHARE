<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIND SHARE</title>

    <!-- Link para Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="css/pagamento1.css">

    <script>
        window.onload = function() {
            // Evento para o botão de fechar
            document.getElementById('closeModalBtn').addEventListener('click', function() {
                window.location.href = 'doação.html'; // Redireciona para a página desejada
            });

            // Evento para o botão de voltar
            document.getElementById('backButton').addEventListener('click', function() {
                window.location.href = 'pagamento0.html'; // Redireciona para a página pagamento0.html
            });

            // Evento para os botões de valor
            const valueButtons = document.querySelectorAll('.value-btn');
            const otherValueInput = document.getElementById('otherValueInput');
            const otherValueButton = document.getElementById('otherValueButton');

            valueButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Verifica se o botão já está selecionado
                    if (this.classList.contains('selected')) {
                        // Remove a classe 'selected' se o botão já estava selecionado
                        this.classList.remove('selected');
                    } else {
                        // Remove a classe 'selected' de todos os botões
                        valueButtons.forEach(btn => btn.classList.remove('selected'));
                        // Adiciona a classe 'selected' ao botão clicado
                        this.classList.add('selected');
                        // Esconde a caixa de entrada se um valor padrão for selecionado
                        otherValueInput.style.display = 'none';
                    }
                });
            });

            // Evento para o botão "Outro Valor"
            otherValueButton.addEventListener('click', function() {
                // Exibe a caixa de entrada
                otherValueInput.style.display = 'block';
                // Remove a seleção de todos os botões de valor
                valueButtons.forEach(btn => btn.classList.remove('selected'));
            });

            // Evento para o botão "Próximo"
            document.querySelector('.next-btn').addEventListener('click', function(event) {
                const selectedButton = document.querySelector('.value-btn.selected');
                if (!selectedButton) {
                    event.preventDefault(); // Impede a navegação se nenhum botão estiver selecionado
                    alert("Por favor, selecione um valor antes de prosseguir."); // Mensagem de alerta
                } else {
                    window.location.href = '/pagamento2'; // Redireciona se um valor foi selecionado
                }
            });
        };
    </script>
</head>
<body>

<div class="modal">
    <div class="modal-header">
        <h2>Detalhes do doador:</h2>
        <button type="button" class="back-button" id="backButton">
            <i class="fas fa-arrow-left"></i> <!-- Ícone da seta -->
        </button>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" id="closeModalBtn">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="modal-body">
        <div class="value-options">
            <button class="value-btn">R$10</button>
            <button class="value-btn">R$20</button>
            <button class="value-btn">R$50</button>
            <button class="value-btn">R$100</button>
            <button class="value-btn">R$200</button>
            <button class="value-btn">R$500</button>
        </div>
        <div class="other-value">
            <button class="value-btn full-width" id="otherValueButton">Outro Valor:</button>
            <input type="text" id="otherValueInput" class="input-value" placeholder="Digite seu valor...">
        </div>
        <hr class="divider">
        <a href="/pagamento2">
            <button class="next-btn">Próximo</button>
        </a>
        <p class="footer-text">Você já é um doador? <a href="/login">Login</a></p>
        <p class="footer-text">Ainda não é um doador? <a href="/register">Cadastre</a></p>
    </div>
</div>

</body>
</html>