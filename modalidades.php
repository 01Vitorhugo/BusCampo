<?php
@include('menu.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="css/modalidades.css">
    <link rel="stylesheet" href="css/query-modalidades.css">
    <title>Modalidades</title><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Teko:wght@600&display=swap" rel="stylesheet">

</head>
<body>

    <?php
    @include('menu_local_list.php');
    ?>

    <div class="seta-cima" id="seta">
       <a href="#sub-menu"><img src="imgs/seta-para-cima.png" alt=""></a>
    </div>

    <div class="conteudo-modalidades">
        <div class="conteudo">
            <div class="quadra">
                <div class="foto-quadra">
                    <img src="imgs/modalidade-quadra.png" alt="">
                </div>
                <div class="texto-quadra">
                    <div class="texto-h1">
                        <h1>FUTSAL</h1>
                    </div>
                    <div class="texto-p">
                        <p><strong>Agilidade:</strong> Toque de bola e pensamento rápido ditam o ritmo e quem não fica esperto não dura nem 5 minutos. <br>
                         E não precisa de muita gente pro jogo: 5 de cada lado e a bola já pode rolar.</p>
                    
                    </div>
                </div>
            </div>
            
            <div class="campo">
                <div class="foto-campo">
                    <img src="imgs/modalidade-campo.png" alt="">
                </div>
                <div class="texto-campo">
                    <div class="texto-h1">
                        <h1>CAMPO</h1>
                    </div>
                    <div class="texto-p">
                        <p><strong>Visão de jogo:</strong> Esse aí é o jogo que passa quase todos os finais de semana do ano na TV. E vamos confessar, é bem legal jogar no campo, porque ali dá pra se imaginar jogando pelo time do coração.<br>
                            Chama os amigos e fecha a sua seleção!</p>
            
                    </div>
                </div>
            </div>

            <div class="volei">
                <div class="foto-volei">
                    <img src="imgs/modalidade-volei.jpg" alt="">
                </div>
                <div class="texto-volei">
                    <div class="texto-h1">
                        <h1>VÔLEI</h1>
                    </div>
                    <div class="texto-p">
                        <p><strong>Inteligência:</strong> Muito respeito ao segundo esporte mais praticado no mundo!
                            Ele é tão flexível que até na praia rola você jogar. Seja na areia ou na quadra, o vôlei está sempre de braços abertos para todos nós.</p>
            
                    </div>
                </div>
            </div>

            <div class="basquete">
                <div class="foto-basquete">
                    <img src="imgs/modalidade-basquete.png" alt="">
                </div>
                <div class="texto-basquete">
                    <div class="texto-h1">
                        <h1>BASQUETE</h1>
                    </div>
                    <div class="texto-p">
                        <p><strong>Companheirismo:</strong> Pra quem começou com dois cestos de pêssego pendurados em um ginásio, O basquete evoluiu muito durante os anos.<br>
                        O modo de jogar você que escolhe: tradicional (5 contra 5) ou o 3 contra 3, que está ficando cada vez mais famoso.</p>
            
                    </div>
                </div>
            </div>

            <div class="poliesportiva">
                <div class="foto-poliesportiva">
                    <img src="imgs/modalidade-poliesportiva.jpg" alt="">
                </div>
                <div class="texto-poliesportiva">
                    <div class="texto-h1">
                        <h1>POLIESPORTIVA</h1>
                    </div>
                    <div class="texto-p">
                        <p><strong>Poliesportiva:</strong> De tudo um pouco, aqui você encontra o que precisa. Chama os amigos e vem ser <strong>BusCampo!</strong></p>
            
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="js/script-modalidades.js"></script>
    
</body>
</html>