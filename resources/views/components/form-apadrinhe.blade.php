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
                }
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
        <form id="myForm" action="/apadrinhe2" method="GET">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" required placeholder="Digite seu Nome Completo" :value="old('name', $user->name)" autofocus autocomplete="name" >
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <label for="email">E-mail:</label>
            <input type="email" id="email" required placeholder="Digite seu E-mail" :value="old('email', $user->email)" autofocus autocomplete="email">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
    
            <label for="cpf">CPF:</label>
            <input type="string" id="cpf" required placeholder="Digite seu CPF" :value="old('cpf', $user->cpf)" autofocus autocomplete="cpf" >
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />

            <label for="nascimento">Data de Nascimento:</label>
            <input type="date" id="nascimento" required :value="old('nasc', $user->nasc)">
            <x-input-error :messages="$errors->get('nasc')" class="mt-2" />
    
            <label for="telefone">Telefone:</label>
            <input type="string" id="telefone" required placeholder="Digite seu Telefone" :value="old('phone', $user->phone)" autofocus autocomplete="phone"  >
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

            <label for="sexoPadrinho">Sexo:</label>
            <select id="sexoPadrinho" required name="sexoPadrinho">
                <option value="">Selecione</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="nao-declarado">Prefiro Não Falar</option>
            </select>

            <label for="estadoPadrinho">Estado:</label>
            <select id="estadoPadrinho" required name="estadoPadrinho">
                <option value="" disabled hidden>Selecione</option>
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