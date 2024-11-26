<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIND SHARE</title>
    <link rel="stylesheet" href="css/pagamento2.css">
    <!-- Link para Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        <form id="donationForm">
            <div class="form-row">
                <input type="text" id="nome" placeholder="Nome" required>
                <input type="text" id="sobrenome" placeholder="Sobrenome" required>
            </div>
            <div class="form-row">
                <input type="text" id="cpf" placeholder="CPF" required maxlength="11">
                <input type="text" id="telefone" placeholder="Telefone" required maxlength="11">
            </div>
            <div class="form-row">
                <input type="password" id="senha" placeholder="Senha" required>
                <select required>
                    <option selected disabled>Como Conheceu a Kind Share?</option>
                    <option value="1">Amigos</option>
                    <option value="2">Redes Sociais</option>
                    <option value="3">Outros</option>
                </select>
            </div>
            <hr class="divider">
            <button type="submit" class="submit-btn">Próximo</button>
        </form>
        <p class="footer-text">Ainda não é um doador? <a href="/register">Cadastre</a></p>
    </div>

    <script>
        window.onload = function() {
            // Evento para o botão de fechar
            document.getElementById('closeModalBtn').addEventListener('click', function() {
                window.location.href = 'doação.html'; // Redireciona para a página desejada
            });

            // Evento para o botão de voltar
            document.getElementById('backButton').addEventListener('click', function() {
                window.history.back(); // Volta para a página anterior
            });

            // Bloqueia a entrada de números no campo de Nome
            document.getElementById('nome').addEventListener('keypress', function (e) {
                if (/\d/.test(e.key)) {
                    e.preventDefault(); // Impede a entrada se o caractere for um número
                }
            });

            // Bloqueia a entrada de números no campo de Sobrenome
            document.getElementById('sobrenome').addEventListener('keypress', function (e) {
                if (/\d/.test(e.key)) {
                    e.preventDefault(); // Impede a entrada se o caractere for um número
                }
            });

            // Permite apenas dígitos no campo de CPF
            document.getElementById('cpf').addEventListener('keypress', function (e) {
                if (!/\d/.test(e.key) || this.value.length >= 11) {
                    e.preventDefault(); // Impede a entrada se não for dígito ou se o limite for atingido
                }
            });

            // Permite apenas dígitos no campo de Telefone
            document.getElementById('telefone').addEventListener('keypress', function (e) {
                if (!/\d/.test(e.key) || this.value.length >= 11) {
                    e.preventDefault(); // Impede a entrada se não for dígito ou se o limite for atingido
                }
            });

            // Evento para o botão "Próximo" (submit do formulário)
            document.getElementById('donationForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Impede o envio do formulário

                // Redireciona para a próxima página (pagamento3.html)
                window.location.href = '/pagamento3';
            });
        };
    </script>

</body>
</html>