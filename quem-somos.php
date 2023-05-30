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
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="imgs/vitor.jpeg" class="d-block w-100" alt="..."> 
          <div class="carousel-caption ">
            <h5>Vitor Hugo Santos</h5>
            <p>Desenvolvedor Front-End.</p>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="2000">
          <img src="imgs/gustavo.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>Gustavo Henrique Santos</h5>
            <p>Desenvolvedor Back-End.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="imgs/henrique.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>Henrique Batista Gonzales</h5>
            <p>Desgin.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="imgs/carlos.jpg" class="d-block w-100">
          <div class="carousel-caption">
            <h5>Carlos Manoel</h5>
            <p>Desgin.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="imgs/igor.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption ">
            <h5>Igor Samuel Nascimento</h5>
            <p>Desenvolvedor Mobile.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="imgs/breno.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>Breno Guimaraes Oliveira </h5>
            <p>Desenvolvedor Mobile.</p>
          </div>
        </div>

      <!-- </div> -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> 

  </div>
  </div>
</body>

<script src="js/script-quem-somos.js"></script>

</html>