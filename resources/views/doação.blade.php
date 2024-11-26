<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/doação.css') }}">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- SCRIPT DA NAV BAR-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="shortcut icon" href="{{ asset('img/logo_web.png') }}" type="image/x-icon">
        
    <title>KIND SHARE</title>

</head>
<body>

@include('components.nav')

    <!-- Conteúdo principal: Opção de Pagamento e Retirada -->
    
<div class="content">
    <div class="container mt-5 pt-5">
        <div id="secondary_title_container" class="text-center mb-4">
            <h2 id="secondary_titlesecondary_title">Selecione o tipo de doação:</h2>
        </div>

        <!-- Box 1: Opção de Pagamento -->
        <div class="col-md-12 mb-4 text-center">
            <a href="#" class="btn btn-primary btn-lg w-100"> Opção de Pagamento </a>
            <p style="font-size: 20px;">Contribua com a quantia que for de sua preferência.</p>
        </div>

        <!-- Box 2: Opção de Desapego -->
        <div class="col-md-12 mb-4 text-center">
            <a href="{{ url('dashboard/dasapego') }}" class="btn btn-success btn-lg w-100"> Opção de Desapego </a>
            <p style="font-size: 20px;"> Realize a doação de itens entregando-os diretamente à instituição escolhida. </p>
        </div>

        <!-- Dúvidas -->
        <section class="section_container client_container" id="client">
            <div class="client__swiper">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="client__card">
                                <h4>Como funciona?</h4>
                                <p>Para contribuir de forma positiva, basta escolher a melhor maneira de colaborar! 
                                    <br> A primeira opção é a contribuição financeira, onde você pode optar entre Pix, cartão de Débito ou Crédito. 
                                    <br> A segunda opção é a doação de itens. Para isso, preencha os campos do formulário e, após avaliarmos as condições dos itens. Você receberá um e-mail confirmando se a doação pode ser entregue à instituição.</p>

                                <img src="img/duvida(doacao).png" alt="cliente" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
    <!-- FOOTER -->
    <footer class="text-center mt-5">
        <div class="footerContainer mb-3">
            <div class="socialIcons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="/">Home</a></li>
                    <li class="list-inline-item"><a href="">Sobre</a></li>
                    <li class="list-inline-item"><a href="">Quem Somos</a></li>
                </ul>
            </div>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy; 2024; KIND SHARE</p>
        </div>
    </footer>


    <!-- Botão de voltar ao topo -->
    <a href="#" class="btn-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

<!-- Exibe a seta quando o usuário rolar 100px para baixo-->
<script>
    window.onscroll = function() {
        let btnToTop = document.querySelector('.btn-to-top');
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            btnToTop.style.display = "block";
        } else {
            btnToTop.style.display = "none";
        }
    };

    // Ao clicar no botão, rola suavemente até o topo da página
    document.querySelector('.btn-to-top').addEventListener('click', function(event) {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>

</body>

</html>
