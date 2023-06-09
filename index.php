<?php
include('menu.php');
require('query_index.php');

if(!isset($_SESSION['tipo'])){
    $_SESSION['tipo'] = false;

}
if(!isset($_SESSION['id'])){
    $_SESSION['id'] = null;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/query-index.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Teko:wght@600&display=swap" rel="stylesheet">
    <title>BusCampo</title>
</head>

<body>
    <!-- Start carousel -->
    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="1500">
                <a href="cad_local.php"><img src="imgs/fotocerta.png" class="d-block w-100" alt=""></a> 
                    
                
                </div>

                <div class="carousel-item" data-bs-interval="2000">
                    <img src="imgs/fotocerta2.png" class="d-block w-100" alt=""> 
                  
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <img src="imgs/3d22.png" class="d-block w-100" alt="">
                </div>
            </div>

        </div>
    </div>
    <!-- End carousel -->

    <!-- Start content-prin -->
    <div class="content-prin">
        <div class="img-content">
        <a href="pesquisa_by_estado.php">
            <div class="img-lupa-content" id="img-lupa-content">
              Pesquisar agora
            </div>
            </a>
        </div>

        <div class="text-locais">
            <h1>Qual combina mais com você?</h1>
        </div>
        <div class="locais">
            <div class="campo">
                <h3 class="campo-h3">Campo</h3>
               <a href="local_list.php?id_categoria=1"><div class="box-campo" id="locais-hover"></div></a>
            </div>
            <div class="quadra">
                <h3 class="quadra-h3">Quadra</h3>
               <a href="local_list.php?id_categoria=10"><div class="box-quadra" id="locais-hover"></div></a>
            </div>
            <div class="areia">
                <h3 class="areia-h3">Areia</h3>
                <a href="local_list.php?id_categoria=6"><div class="box-areia" id="locais-hover"></div></a>
            </div>
        </div>
        <!-- End content-prin -->

        <!-- Start sugestao-content -->
        <div class="sugestao-content">
            <div class="text-sugestao">
                <h1>Sugestões para você</h1>
            </div>

            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000500">
                        <div class="BD-element">
                            <div class="BD-box-left">
                                <div class="BD-box-left-text">
                                    <?php
                                    echo "<h1 id= pag>$quadra1[nome_local] </h1>";
                                    ?>
                                </div>
                                <div class="conteudo-BD-left">
                                    <?php
                                    echo "<h3 id= pag>Proprietário $quadra1[nome_cliente]</h3>";
                                    echo "<h3 id= pag>$quadra1[desc_local] </h3>";
                                    echo "<h3 id= pag>$quadra1[estado] </h3>";
                                    ?>
                                    <div class="link-contato-BD">
                                    <?php echo "<a href=contato.php?id_local=$quadra1[id_local]>Contato</a>"?>
                                    </div>
                                </div>

                            </div>

                            <div class="BD-box-right">
                                <div class="BD-box-right-img1">
                                    <?php
                                    echo "<p><img src=$quadra1[img1] height=100%></p>";
                                    ?>

                                </div>
                                <!-- <div class="BD-box-right-img2">
                                </div> -->

                            </div>

                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <div class="BD-element">
                            <div class="BD-box-left">
                                <div class="BD-box-left-text">
                                    <?php
                                    echo "<h1 id= pag>$quadra2[nome_local] </h1>";
                                    ?>
                                </div>
                                <div class="conteudo-BD-left">
                                    <?php
                                    echo "<h3 id= pag>Proprietário: $quadra2[nome_cliente] </h3>";
                                    echo "<h3 id= pag>$quadra2[desc_local] </h3>";
                                    echo "<h3 id= pag>$quadra2[estado] </h3>";
                                    ?>
                                    <div class="link-contato-BD">
                                       <?php echo "<a href=contato.php?id_local=$quadra2[id_local]>Contato</a>" ?> 
                                    </div>
                                </div>

                            </div>

                            <div class="BD-box-right">
                                <div class="BD-box-right-img1">
                                    <?php
                                    echo "<p><img src=$quadra2[img1]></p>";
                                    ?>

                                </div>
                                <!-- <div class="BD-box-right-img2">
                                </div> -->

                            </div>

                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <div class="BD-element">
                            <div class="BD-box-left">
                                <div class="BD-box-left-text">
                                    <?php
                                    echo "<h1 id= pag>$quadra3[nome_local] </h1>";
                                    ?>
                                </div>
                                <div class="conteudo-BD-left">
                                    <?php
                                    echo "<h3 id= pag>Proprietário: $quadra3[nome_cliente] </h3>";
                                    echo "<h3 id= pag>$quadra3[desc_local] </h3>";
                                    echo "<h3 id= pag>$quadra3[estado] </h3>";
                                    ?>
                                    <div class="link-contato-BD">
                                    <?php echo "<a href=contato.php?id_local=$quadra3[id_local]>Contato</a>" ?>
                                    </div>
                                </div>

                            </div>

                            <div class="BD-box-right">
                                <div class="BD-box-right-img1">
                                    <?php
                                    echo "<p><img src=$quadra3[img1]></p>";
                                    ?>

                                </div>
                                <!-- <div class="BD-box-right-img2">
                                </div> -->

                            </div>

                        </div>
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
        <!-- End sugestao-content -->

        <!-- Start trabalhe-conosco -->
        <div class="trabalhe-conosco">
            <?php
            if ($_SESSION['login'] == true) {
                echo "<a href=cad_local.php><img src=imgs/anuncio.png height=100% width=100%></a>";
            } else {
                echo "<a href=login.php><img src=imgs/anuncio.png height=100% width=100%></a>";
            }
            ?>



        </div>
        <!-- End trabalhe-conosco -->


    </div>
    

        <!-- Star content Sao Pedro -->

    <div class="saopedro-content-end">
        <div class="saopedro"></div>
        <div class="saopedro-texto">
            <div class="saopedro-texto1">
                <h1>A.A. Jardim São Pedro</h1>
            </div>
            <div class="saopedro-texto2">
                <h2>A grande equipe da Zona Leste da capital apoia <span>BusCampo</span></h2>
            </div>
            <div class="redes-sociais">
                <a href="https://www.instagram.com/jd.saopedro_oficial/">
                    <p>Conheça o projeto</p>
                </a>
            </div>
        </div>
    </div>
    
    <!-- End content Sao Pedro -->

    <!-- Start footer -->
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
                    <a href="#"><img src="imgs/refazer.png" alt=""></a>
                </div>
            </div>
            <hr>
            
            <div class="footer-servicos" id="footer">
                <div class="servicos-contato" id="footer-servicos">
                    <a href="https://www.instagram.com/etecitaquera/">
                        <p>@BusCampo</p>
                    </a>
                    <p>(11) 2254-7627</p>
                    <a href="https://www.google.com/maps/search/etec+de+itaquera/@-23.5404998,-46.5076225,12z/data=!3m1!4b1">
                        <p>R. Virgínia Ferni, 400 - Itaquera, São Paulo - SP, 08253-000</p>
                    </a>
                </div>
                <div class="servicos-links" id="footer-servicos">
                    <!-- <a href="contato.php">
                        <p>Contato</p>
                    </a> -->
                    <a href="cad_local.php">
                        <p>Divulgue seu local</p>
                    </a>
                    <a href="quem-somos.php">
                        <p>Quem somos</p>
                    </a>
                    <a href="#">
                        <p>Política de privacidade</p>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->


    <script src="js/script-index.js"></script>
   
    <!--  Script estava influenciando o mal uso do menu.. O menu ja puxa o script

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    -->
</body>

</html>