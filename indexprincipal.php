<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Landing Page Voucher 140</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="src/js/menu.js" defer></script>
    <script src="src/js/carrossel.js" defer></script>

</head>

<body>
    <header>
        <nav class="navbar">
            <i class="fa-solid fa-burger" id="nav-logo"> food</i>
            <ul class="nav_list">
                <li class="nav-item"><a href="#home">Home</a></li>
                <li class="nav-item"><a href="#menu">Cardápio</a></li>
                <li class="nav-item"><a href="#depoimentos">Avaliações</a></li>
                <li class="nav-item"><a href="cadastro_produto.php">Produtos</a></li>
            </ul>
            <button class="btn-default">
                <a href="cadastro_cliente.php">Cadastre-se</a>
            </button>
           
        </nav>
        <button class="mobile-btn">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="mobile-menu">
            <ul class="mobile-nav-list">
                <li class="nav-item"><a href="#home">Home</a></li>
                <li class="nav-item"><a href="#menu"></a>Cardápio</li>
                <li class="nav-item"><a href="#depoimentos"></a>Avaliações</li>
                <li class="nav-item"><a href="cadastro_produto.php">Produtos</a></li>
            </ul>
        </div>
    </header>

    <section class="slider">
        <div class="slider-content">
            <input type="radio" name="btn-radio" id="radio1">
            <input type="radio" name="btn-radio" id="radio2">
            <input type="radio" name="btn-radio" id="radio3">
       
        <div class="slide-box primeiro">
            <img src="src/imagem/plano-de-fundo-do-banner-de-hamburguer_244157-2457.jpg" alt="" class="img-desktop">
        </div>
        <div class="slide-box"><img src="src/imagem/classic-burger-set-isolated-black-background-fast-food-assortment-including-vegan-option-vari_908985-48775.jpg" alt="" class="img-desktop">
        </div>
        <div class="slide-box"><img src="src/imagem/conjunto-de-hamburguer-e-cheeseburgers-em-um-fundo-preto-generative-ai_935190-330.jpg" alt="" class="img-desktop">
        </div>
        <div class="nav-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
        </div>
        <div class="nav-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
        </div>
        </div>
           
    </section>

    <main class="content">
        <section class="home" id="home">
            <!-- <div class="shape"></div> -->
            <div class="cta">
                <h1 class="title">
                    O sabor que vai até <span>você.</span>
                </h1>
                <p class="descricao">
                    Venha experimentar uma viagem gastronômica única, onde cada prato é preparado com ingredientes
                    frescos e de alta qualidade.
                </p>
                <div class="cta_buttons">
                    <a href="#menu" class="btn-default">Ver Cardápio</a>
                    <a href="" id="phone_button">
                        <button class="btn-default">
                            <i class="fa-solid fa-phone-volume"></i>
                        </button>
                        (67)98111-2222
                    </a>
                </div>
                <div class="social-media-buttons">
                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/enildadarosa/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="www.linkedin.com/in/enilda-da-9509bb1a4"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="banner">
                <img src="src/imagem/pngwing.com (2).png" alt="">
            </div>
        </section>
    </main>
    <section class="menu" id="menu">
        <h2 class="section-title">Cardápio</h2>
        <h3 class="section-subtitle">Nossos pratos especiais.</h3>
        <div class="area-cards">
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="src/imagem/pngwing.com (1).png" alt="" class="card-imagem">
                <h3 class="card-title">X-Burguer</h3>
                <span class="card-descricao">
                 Um clássico hambúrguer com pão, carne bovina grelhada, queijo derretido e molho, podendo incluir alface e tomate.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="src/imagem/pngwing.com (1).png" alt="" class="card-imagem">
                <h3 class="card-title">Bruto Burger</h3>
                <span class="card-descricao">
                 Hambúrguer artesanal de 180g, queijo prato, ovo, bacon, alface, tomate e maionese temperada no pão brioche
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="src/imagem/pngwing.com (1).png" alt="" class="card-imagem">
                <h3 class="card-title">Chicken Supreme</h3>
                <span class="card-descricao">
                    Filé de frango empanado crocante, queijo cheddar, alface, tomate e molho ranch no pão brioche.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="src/imagem/pngwing.com (1).png" alt="" class="card-imagem">
                <h3 class="card-title">Barbecue Bacon</h3>
                <span class="card-descricao">
                    Hambúrguer suculento com bacon crocante, queijo cheddar, molho barbecue e cebola crispy no pão australian
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="src/imagem/pngwing.com (1).png" alt="" class="card-imagem">
                <h3 class="card-title">Duplo Cheddar</h3>
                <span class="card-descricao">
                    Duas camadas de carne grelhada, queijo cheddar extra, molho especial e picles no pão de batata.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="src/imagem/pngwing.com (1).png" alt="" class="card-imagem">
                <h3 class="card-title">Veggie Power</h3>
                <span class="card-descricao">
                    Hambúrguer vegetariano feito com grão-de-bico e especiarias, queijo gouda, rúcula, tomate e molho de ervas no pão integral.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="src/imagem/pngwing.com (1).png" alt="" class="card-imagem">
                <h3 class="card-title">Supremo Trufado</h3>
                <span class="card-descricao">
                    Hambúrguer artesanal de 150g, queijo gruyère derretido, cogumelos salteados na manteiga trufada e maionese especial de alho negro, servido no pão brioche tostado.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="depoimentos" id="depoimentos">
        <img src="src/imagem/pngwing.com (6) (1).png" alt="" class="imagem-chef">
        <div class="depoimentos-content">
            <h2 class="section-title">
                Depoimentos
            </h2>
            <h3 class="section-subtitle">
                O que os clientes falam sobre nós.
            </h3>
            <div class="area-feedbacks">
                <div class="feedbacks">
                    <img src="src/imagem/pngwing.com (9) (1).png" alt="" class="image-avatar">
                    <div class="feedback-content">
                        <p>
                            Carolina Maria
                            <span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </p>
                        <p>
                        O Supremo Trufado é um lanche robusto, Hambúrguer artesanal de 150g, queijo gruyère derretido, cogumelos salteados na manteiga trufada e maionese especial de alho negro, servido no pão brioche tostado.
                        </p>
                    </div>
                </div>
                <div class="feedbacks">
                    <img src="src/imagem/pngwing.com (8) (1).png" alt="" class="image-avatar">
                    <div class="feedback-content">
                        <p>
                            Maria Joaquina
                            <span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </p>
                        <p>
                            O Chicken Supreme é um lanche robusto,  Filé de frango empanado super crocante.
                        </p>
                    </div>
                </div>
            </div>
            <button class="btn-default btn-ver">
                Ver mais avaliações
            </button>
        </div>
    </section>
    <footer>
        <div class="footer-itens">
            <span class="copyright">
                &copy 2024 Ana Patrícia
            </span>
            <div class="social-media-buttons">
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/enildadarosa/"><i class="fa-brands fa-instagram"></i></a>
                <a href="www.linkedin.com/in/enilda-da-9509bb1a4"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>