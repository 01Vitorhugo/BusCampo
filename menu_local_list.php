<?php
@include('menu.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu_list.css">
    <title>Document</title>

</head>
<body>

    <?php
    $menu_index = $_SERVER['REQUEST_URI'];
    if($menu_index == "/buscampo/local_list.php"){
      echo "<div class=sub-menu id=sub-menu >";
      echo  "<nav class=nav-sub-menu>";
      echo  "<ul>";
      echo  "<li><a href=local_list.php?id_categoria=1>Futebol</a></li>";
      echo   "<li><a href=local_list.php?id_categoria=4>Vôlei</a></li>";
      echo   "<li><a href=local_list.php?id_categoria=2>Futsal</a></li>";
      echo   "<li><a href=local_list.php?id_categoria=3>Basquete</a></li>";
      echo   "<li><a href=local_list.php?id_categoria=5>Poliesportiva</a></li>";
      echo   "<li><a href=local_list.php?id_categoria=6>Areia</a></li>";
      echo   "</ul>";
      echo   "</nav>";
      echo   "</div>";
    }          
    ?>
<div class="sub-menu" id="sub-menu">
        <nav class="nav-sub-menu">
            <ul>
                <li><a href="local_list.php?id_categoria=1">Futebol</a></li>
                <li><a href="local_list.php?id_categoria=4">Vôlei</a></li>
                <li><a href="local_list.php?id_categoria=2">Futsal</a></li>
                <li><a href="local_list.php?id_categoria=3">Basquete</a></li>
                <li><a href="local_list.php?id_categoria=5">Poliesportiva</a></li>
                <li><a href="local_list.php?id_categoria=6">Areia</a></li>
            </ul>
        </nav>
    </div>
    
</body>
</html>