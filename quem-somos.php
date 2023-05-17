<?php
@include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="css/quem-somos.css">
    <link rel="stylesheet" href="css/query-quem-somos.css">
    <title>Quem Somos</title>
</head>

<body>
    <div class="texto-apresentacao">
      <div class="texto-prin">
        <h1>
            Bem-vindo à página Quem-Somos do nosso projeto de TCC, Somos uma equipe apaixonada e comprometida em realizar um trabalho de alta qualidade,
            trazendo soluções inovadoras e criativas para o nosso tema.
        </h1>
        </div>
        <div class="texto-p">
        <p>
            Nossa equipe é composta por 7 membros, todos com habilidades e formações distintas que, juntas, formam um time altamente capacitado e
            diversificado.
            <br>
             A equipe se reúne regularmente para discutir ideias e trocar conhecimentos, sempre mantendo o foco no objetivo principal do projeto.
            Cada membro tem uma função específica e trabalha em colaboração com os demais para atingir os resultados esperados.
            <br>
            Estamos entusiasmados em trabalhar neste projeto e esperamos que você possa acompanhar nossa jornada e se inspirar com nossas soluções criativas e inovadoras.
        </p>
        </div>
    </div>

    <div class="conteudo-membros">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
    <div class="card" style="width: 25rem;">
  <img src="imgs/gustavo.jpeg" class="card-img-top" alt="..." >
  <div class="card-body">
    <h5 class="card-title">Gustavo Henrique</h5>
    <p class="card-text">Desenvolvedor Back-End</p>
  </div>
</div>
    </div>

    <div class="carousel-item">
    <div class="card" style="width: 25rem;">
  <img src="imgs/vitor.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Vitor Hugo</h5>
    <p class="card-text">Desenvolvedor Front-End</p>
  </div>
</div>
</div>

    <div class="carousel-item" data-bs-interval="2000">
    <div class="card" style="width: 25rem;">
  <img src="imgs/carlos.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Carlos Manoel</h5>
    <p class="card-text">Design</p>
  </div>
</div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <div class="card" style="width: 25rem;">
  <img src="imgs/henrique.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Henrique Batista</h5>
    <p class="card-text">Desenvolvedor mobile</p>
  </div>
</div>
    </div>

    <div class="carousel-item">
    <div class="card" style="width: 25rem;">
  <img src="imgs/igor.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Igor</h5>
    <p class="card-text">Desenvolvedor mobile</p>
  </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="card" style="width: 25rem;">
  <img src="imgs/breno.jpeg" class="card-img-top" alt="..." >
  <div class="card-body">
    <h5 class="card-title">Breno</h5>
    <p class="card-text">Desenvolvedor mobile</p>
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
</body>

<script src="js/script-quem-somos.js"></script>

</html>