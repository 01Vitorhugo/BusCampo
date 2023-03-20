<?php
include('menu.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;500&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Principal</title>
</head>
<body>
    <div class="carousel">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1900">
                    <img src="imgs/fotocerta.png" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item" data-bs-interval="1900">
                    <img src="imgs/fotocerta2.png" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item" data-bs-interval="1900">
                    <img src="imgs/3d22.png" class="d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="content-prin">
        <div class="img-content"></div>
        <div class="text-locais">
            <h1>Qual combina mais com você?</h1>
        </div>
        <div class="locais">
            <div class="campo">
                <h3>Campo</h3>
                <div class="box-campo" id="locais-hover"></div>
            </div>
            <div class="quadra">
                <h3>Quadra</h3>
                <div class="box-quadra" id="locais-hover"></div>
            </div>
            <div class="areia">
                <h3>Areia</h3>
                <div class="box-areia" id="locais-hover"></div>
            </div>
        </div>
        <div class="cont-locais">
            <div class="modalidades">
                <a href="#">
                    <h3>Pesquisar modalidades</h3>
                </a>
            </div>
        </div>

        <div class="trabalhe-conosco"></div>

        <div class="saopedro"></div>
        <div class="saopedro-texto">
            <div class="saopedro-texto1">
                <h1>A.A. Jardim São Pedro</h1>
            </div>
            <div class="saopedro-texto2">
                <h2>A grande equipe da Zona Leste da capital apoia <span>BusCampo</span></h2>
            </div>
            <div class="saopedro-texto3">
                <div class="projeto">
                    <ul>
                        <li>Projetos Sociais</li>
                        <li>Jogos Beneficientes</li>
                        <li>Diversas categorias de futebol</li>
                    </ul>
                </div>
                <div class="redes-sociais">
                    <a href="https://www.instagram.com/jd.saopedro_oficial/">
                        <p>Conheça o projeto</p>
                    </a>
                </div>
            </div>
            <div class="since-saopedro">
                <p><i>Guaianazes - Zona Leste <span>Since 1968</span></i></p>
            </div>
        </div>
    </div>

    <footer>
        <div class="conteudo-footer">
            <div class="boxPai-footer">
                <div class="conteudo-footer-box1" id="box-footer">
                    <img src="imgs/logoofc.png" alt="">
                </div>
                <div class="conteudo-footer-box2" id="box-footer">
                    <p>Copyright 2023 ©</p>
                </div>
                <div class="conteudo-footer-box3" id="box-footer">
                  <a href="#"><img src="imgs/seta-para-cima.png" alt=""></a>
                </div>
            </div>
            <hr>
            <div class="footer-servicos">
                <div class="servicos-contato" id="footer-servicos">
                   <a href="https://www.instagram.com/etecitaquera/"><p>@BusCampo</p></a>
                    <p>(11) 2254-7627</p>
                   <a href="https://www.google.com/maps/search/etec+de+itaquera/@-23.5404998,-46.5076225,12z/data=!3m1!4b1"><p>R. Virgínia Ferni, 400 - Itaquera, São Paulo - SP, 08253-000</p></a>
                </div>
                <div class="servicos-links" id="footer-servicos">
                   <a href="#"><p>Contato</p></a>
                   <a href="#"><p>Divulgue seu local</p></a>
                   <a href="#"><p>Quem somos</p></a>
                   <a href="#"><p>Política de privacidade</p></a>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>