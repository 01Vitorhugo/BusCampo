<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/query-menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  /> -->
</head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Teko:wght@600&display=swap" rel="stylesheet">

<body>
<div class="nav-fixed">
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="container-0">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="imgs/logoofc.png" alt="" heigth="150px" width="200px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <span class="quem-somos-span">
        <a class="nav-link " aria-current="page" href="quem-somos.php">Quem somos</a>
      </span>
        <a class="nav-link" href="modalidades.php">Modalidades</a>

        <?php
          $menu_index = $_SERVER['REQUEST_URI'];
          if($menu_index == "/buscampo/index.php" or $menu_index == "/buscampo/"){
            echo '<a class=nav-link href=#footer>Contato</a>';
          }      
          
           
        ?>

        <?php
@session_start();
if( !isset($_SESSION['login']) ){
  $_SESSION['login'] = false;
}

if($_SESSION['login'] == true){
  echo "<a class=nav-link href=cad_local.php>Divulgue seu local</a>";
  echo "<a class=nav-link id=dif href=perfil.php>Meu perfil</a>";  
  echo "<span class=login-span><a class=nav-link id=dif href=logoff.php>Sair</a></span>";         
 
}else{
  echo "<span class=login-span><a class=nav-link id=dif href=login.php>Login</a></span>";
}
 ?>
      
      </div>
    </div>
  </div>
</nav>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</body>
</html>