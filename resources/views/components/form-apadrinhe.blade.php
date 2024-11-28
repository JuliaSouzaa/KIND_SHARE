<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="{{ asset('css/apadrinhe.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> <!-- Link para Font Awesome -->
</head>

@yield('conteudo')

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
                return; // Encerra a execução
            }

            // Se os campos estiverem preenchidos, redireciona para a próxima página
            event.preventDefault(); // Impede o comportamento padrão
            window.location.href = "/apadrinhe2') }}"; // Redireciona
            });
        });
    </script>

<body>
<div class="form-container">
        <div class="form-header">
            <img src="{{ url('img/logo_branca.jpg') }} " href="{{ url('/') }}"  alt="Kind Share Logo"><br>
            <span class="text-muted">Preencha seus dados para se tornar padrinho/madrinha e apoiar uma criança que precisa da sua ajuda.</span>
        </div>
        <!-- Formulário com ID para o JavaScript acessar -->
        <form action="{{ route('apadrinhar.store') }}" method="POST">
    @csrf

    <!-- Nome -->
    <label for="nome">Nome Completo:</label>
    <input type="text" id="nome" name="nome" value="{{ Auth::user()->name }}" readonly>

    <!-- Email -->
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" readonly>

    <!-- CPF -->
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" value="{{ Auth::user()->cpf }}" readonly>

    <!-- Telefone -->
    <label for="telefone">Telefone:</label>
    <input type="text" id="telefone" name="telefone" value="{{ Auth::user()->phone }}" readonly>

    <!-- Sexo -->
    <label for="sexoPadrinho">Sexo:</label>
    <select id="sexoPadrinho" name="sexoPadrinho" required>
        <option value="" disabled selected>Selecione</option>
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="nao-declarado">Prefiro Não Falar</option>
    </select>

    <!-- Estado -->
    <label for="estadoPadrinho">Estado:</label>
    <select id="estadoPadrinho" name="estadoPadrinho" required>
        <option value="" disabled selected>Selecione</option>
        <option value="SP">São Paulo</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="MG">Minas Gerais</option>
        <option value="RS">Rio Grande do Sul</option>
    </select>

    <button type="submit" class="submit-btn">Seguir</button>
</form>

    </div>

</body>
</html>