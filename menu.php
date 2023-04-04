<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/query-menu.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;1,400&family=Roboto+Mono:wght@100&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

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
        <a class="nav-link" href="#">Modalidades</a>
        <a class="nav-link" href="#">Contato</a>
        <a class="nav-link" href="#">Divulgue seu local</a>

        <?php
@session_start();
// @var_dump($_SESSION);
if($_SESSION['login'] == true){
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


</body>
</html>