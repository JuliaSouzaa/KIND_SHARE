<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KINDSHARE</title>
    <link rel="stylesheet" href="{{ asset('css/apadrinhe3.css') }}"> <!-- Arquivo CSS externo -->
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <img src="{{ url('img/logo_branca.jpg') }}" alt="Logo"> <!-- Substitua pela sua logo -->
        </div>
        <form>
            <div class="select-container">
                <label for="childName">Informe o nome da criança:</label>
                <select id="childName" required name="childName" onchange="showChildImage()">
                    <option value="">Selecione</option>
                    <option value="child1">Isabela</option>
                    <option value="child2">Pedro</option>
                    <option value="child3">Felipe</option>
                </select>
                <br>
                <!-- Imagem oculta inicialmente, que aparece centralizada no select -->
                <div class="child-image-container" id="childImageContainer">
                    <img id="childImage" src="" alt="Imagem da criança">
                </div>

                <br>
                
                <div class="divider">
                    <span>Apadrinhe uma criança e faça uma diferença!</span>
                </div>
                
                <button type="button" class="submit-btn" onclick="redirectToPage()">Enviar</button>
        </form>
    </div>

    <!-- Script JavaScript -->
    <script>
        function redirectToPage() {
            // Obtém o valor selecionado
            const selectedChild = document.getElementById('childName').value;
            
            // Verifica se uma criança foi selecionada
            if (selectedChild) {
                // Redireciona para a página apadrinhe4.html
                window.location.href = "{{ url('dashboard/apadrinhe4') }}";
            } else {
                // Exibe um alerta se nenhuma criança foi selecionada
                alert("Por favor, selecione o nome de uma criança antes de enviar.");
            }
        }
    </script>

    <script>
        function showChildImage() {
            const childSelect = document.getElementById('childName');
            const selectedValue = childSelect.value;
            const imageContainer = document.getElementById('childImageContainer');
                
            let imageSrc = '';

            if (selectedValue === 'child1') {
                imageSrc = '{{ asset('img/isabela (coracao_undio).jpg') }}'; 
            } else if (selectedValue === 'child2') {
                imageSrc = '{{ asset('img/pedro (coracao_unido).jpg') }}'; 
            } else if (selectedValue === 'child3') {
                imageSrc = '{{ asset('img/felipe (coracao_unido).jpg') }}'; 
            }

            if (imageSrc) {
                document.getElementById('childImage').src = imageSrc; // Atualiza a imagem
                imageContainer.classList.add('show'); // Exibe a imagem
            } else {
                imageContainer.classList.remove('show'); // Esconde a imagem
            }
        }
    </script>

</body>
</html>
