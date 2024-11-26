<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Kind Share</title>
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/apadrinhe.css"> <!-- Link para o arquivo CSS -->

    <script>
        // Adiciona o evento de submissão do formulário
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('myForm'); // Referência ao formulário
            form.addEventListener('submit', function (event) {
                // Obtém todos os campos obrigatórios
                const inputs = document.querySelectorAll('input[required], select[required]');
                let allFilled = true;

                // Verifica se todos os campos obrigatórios estão preenchidos
                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        allFilled = false;
                        input.style.borderColor = 'red'; // Altera a borda do campo vazio para vermelho
                    } else {
                        input.style.borderColor = ''; // Restaura a borda dos campos preenchidos
                    }
                });

                // Se houver algum campo vazio, impede o envio
                if (!allFilled) {
                    event.preventDefault(); // Impede o envio do formulário
                    alert('Por favor, preencha todos os campos obrigatórios.');
                }
            });
        });
    </script>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <img src="img/logo_branca.jpg" alt="Kind Share Logo">
        </div>
        <!-- Formulário com ID para o JavaScript acessar -->
        <form id="myForm" action="/apadrinheAmi2" method="GET">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" required placeholder="Digite seu Nome Completo">

            <label for="email">E-mail:</label>
            <input type="email" id="email" required placeholder="Digite seu E-mail">

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" required placeholder="Digite seu CPF">

            <label for="nascimento">Data de Nascimento:</label>
            <input type="date" id="nascimento" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" required placeholder="Digite seu Telefone">

            <label for="sexoPadrinho">Sexo:</label>
            <select id="sexoPadrinho" required name="sexoPadrinho">
                <option value="">Selecione</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="nao-declarado">Prefiro Não Falar</option>
            </select>

            <label for="estadoPadrinho">Estado:</label>
            <select id="estadoPadrinho" required name="estadoPadrinho">
                <option value="">Selecione</option>
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="MG">Minas Gerais</option>
                <option value="RS">Rio Grande do Sul</option>
            </select>

            <!-- Botão de envio -->
            <button type="submit" class="submit-btn">Seguir</button>
        </form>
    </div>
</body>
</html>
