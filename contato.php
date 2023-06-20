<?php
@include('menu.php');
// @require('sec_login.php');
require('connect.php');

extract($_GET);

$quadra = mysqli_query($con, "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` INNER JOIN `tb_locador` ON `tb_local`.`id_cliente` = `tb_locador`.`id_cliente` where `id_local` = '$id_local'");
$quadra = mysqli_fetch_array($quadra);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/query-contato.css">
    <title>Contato</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Teko:wght@600&display=swap" rel="stylesheet">
</head>
<body>

<div class="lista">
    <div class="box-lista">
    <h1>Proprietário</h1>    
    <h3><?php echo $quadra['nome_cliente'] ?></h3>
   
    <h1>Localização</h1>  
    <h3><?php echo "$quadra[bairro]  -  $quadra[cidade]"?></h3>


    <?php
    if($_SESSION['login'] == true){
      //echo "<h1>Ligue para nós</h1>";
      //echo "<h3>$quadra[4]</h3>";
      echo "<a href=# class=logado><img src=imgs/whatsapp.png></a>";
      echo "<a href=# class=logado><img src=imgs/gmail.png></a>";
   
    }else{
     echo "<h3 classh3-logado><a href=login.php?backup=$id_local>Ver Mais</a></h3>";
    }
    ?>
  
    </div>
</div>




   
    <div class="dir">
        <div class="conteudo">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=<?php echo  "$quadra[img1]>"?> 
    </div>
    <div class="carousel-item">
      <img src=<?php echo  "$quadra[img2]>"?> 
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            
            

        </div>

        </div>
    </div>

 
</body>
</html>