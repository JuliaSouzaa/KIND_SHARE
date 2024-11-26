<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KINDSHARE</title>
    <link rel="stylesheet" href="css/apadrinhe3.css"> <!-- Arquivo CSS externo -->
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <img src="img/logo_branca.jpg" alt="Logo"> <!-- Substitua pela sua logo -->
        </div>
        <form id="myForm">
            <div class="select-container">
                <label for="rendaResponsavel">Selecione sua renda (em média):</label>
                <select id="rendaResponsavel" required name="rendaResponsavel">
                    <option value="">Selecione</option> <!-- Opção visível, mas inválida -->
                    <option value="renda1">Até R$ 1.000</option>
                    <option value="renda2">R$ 1.001 a R$ 2.500</option>
                    <option value="renda3">R$ 2.501 a R$ 5.000</option>
                    <option value="renda4">Acima de R$ 5.000</option>
                </select>
            </div>

            <div class="select-container">
                <label for="dataDoacao">Qual é o melhor dia para contribuir:</label>
                <select id="dataDoacao" required name="dataDoacao">
                    <option value="">Selecione</option> <!-- Opção visível, mas inválida -->
                    <option value="pag1">Primeiros 5 Dias Úteis do Mês</option>
                    <option value="pag2">Dia 10 a 15 do Mês</option>
                    <option value="pag3">Dia 20 a 25 do Mês</option>
                    <option value="pag4">Último Dia do Mês</option>
                </select>
            </div>

            <!-- Botão -->
            <button type="button" class="submit-btn" onclick="validateForm()">Enviar</button>
        </form>
    </div>

    <!-- Script JavaScript -->
    <script>
        function validateForm() {
            // Obtém os selects
            const rendaSelect = document.getElementById('rendaResponsavel');
            const dataSelect = document.getElementById('dataDoacao');
            let isValid = true;

            // Verifica se a opção "Selecione" ainda está selecionada
            if (rendaSelect.value === "") {
                rendaSelect.style.borderColor = 'red'; // Mostra um destaque de erro
                isValid = false;
            } else {
                rendaSelect.style.borderColor = ''; // Remove o erro se o campo for preenchido
            }

            if (dataSelect.value === "") {
                dataSelect.style.borderColor = 'red'; // Mostra um destaque de erro
                isValid = false;
            } else {
                dataSelect.style.borderColor = ''; // Remove o erro se o campo for preenchido
            }

            // Se tudo estiver válido, redireciona
            if (isValid) {
                window.location.href = "/apadrinheAmi3";
            } else {
                alert('Por favor, preencha todos os campos obrigatórios.');
            }
        }
    </script>

</body>
</html>
