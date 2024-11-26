<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KINDSHARE</title>
    <link rel="stylesheet" href="css/apadrinhe3.css"> <!-- Arquivo CSS externo -->

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
                    if (!input.value.trim() || input.value === "") {
                        allFilled = false;
                        input.style.borderColor = 'red'; // Altera a borda do campo vazio para vermelho
                    } else {
                        input.style.borderColor = ''; // Restaura a borda dos campos preenchidos
                    }
                });

                // Se houver algum campo vazio ou com valor padrão "Selecione", impede o envio
                const rendaSelect = document.getElementById('rendaResponsavel');
                const dataSelect = document.getElementById('dataDoacao');

                if (rendaSelect.value === "" || dataSelect.value === "") {
                    allFilled = false;
                    rendaSelect.style.borderColor = 'red';
                    dataSelect.style.borderColor = 'red';
                }

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
            <img src="img/logo_branca.jpg" alt="Logo"> <!-- Substitua pela sua logo -->
        </div>
        <form>
            <div class="select-container">
                <label for="rendaResponsavel">Selecione sua renda (em média):</label>
                <select id="rendaResponsavel" required name="rendaResponsavel">
                    <option value="">Selecione</option>
                    <option value="renda1">Até R$ 1.000</option>
                    <option value="renda2">R$ 1.001 a R$ 2.500</option>
                    <option value="renda3">R$ 2.501 a R$ 5.000</option>
                    <option value="renda4">Acima de R$ 5.000</option>
                </select>
            </div>

            <div class="select-container">
                <label for="dataDoacao">Qual é o melhor dia para contribuir:</label>
                <select id="dataDoacao" required name="dataDoacao">
                    <option value="">Selecione</option>
                    <option value="pag1">Primeiros 5 Dias Úteis do Mês</option>
                    <option value="pag2">Dia 10 a 15 do Mês</option>
                    <option value="pag3">Dia 20 a 25 do Mês</option>
                    <option value="pag4">Último Dia do Mês</option>
                </select>
            </div>

                 <!-- Botão -->
    <button type="button" class="submit-btn" onclick="redirectToPage()">Enviar</button>


        </form>
    </div>

    <!-- Script JavaScript -->
    <script>
        function redirectToPage() {
            // Abre o arquivo 'apadrinhe3.html'
            window.location.href = "/apadrinheRede3";
        }
    </script>

</body>
</html>