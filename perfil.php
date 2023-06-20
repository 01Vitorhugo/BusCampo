<?php
require('menu.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Meu perfil</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Teko:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="nome-cliente">
        <?php
          echo "<h1> $_SESSION[nome] </h1>"; 
        ?>
    </div>

<?php
        require('connect.php');
        
        if($_SESSION['tipo'] == true){
            $perfils = mysqli_query($con, "SELECT * FROM `tb_locador` WHERE `tb_locador`.`id_cliente` = '$_SESSION[id]'");
        }else if($_SESSION['tipo'] == false){
            $perfils = mysqli_query($con, "SELECT * FROM `tb_locatario` WHERE `tb_locatario`.`id_cliente` = '$_SESSION[id]'");
        }
        
        $perfil = mysqli_fetch_array($perfils);

        echo "<div class =\"box\">";
        echo "<div class =foto-perfil>";
        if($perfil['imagem'] == ""){
            echo "<p><img src=imgsclientes/avatar.jpg></p>";
        }else{
            echo "<p><img src=$perfil[imagem]></p>";
        }
        echo "</div>";
        
        echo "<div class =\"sc\">";
        echo "<p>Nome: $perfil[nome_cliente] </p>";
        echo "<p>Email: $perfil[email] </p>";
        echo "<p><a href=alterar_perfil.php?id_cliente=$perfil[id_cliente]>Alterar Perfil</a></p>";
        
        if($_SESSION['tipo'] == true){
            echo "<p><a href=meu_local.php?id_cliente=$perfil[id_cliente]>Minhas locações</a></p>";
          }
        echo "</div>";
        echo "</div>";
    ?>

</body>
</html>