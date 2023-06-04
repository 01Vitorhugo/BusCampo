<?php
require('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Meu perfil</title>
</head>
<body>
    <div class="nome-cliente-perfil">
        <?php
        echo "<h1>Perfil de $_SESSION[nome] </h1>";
        ?>
    </div>
    <img src=>

<?php
        require('connect.php');
        echo "<div class =\"box\">";
        echo "<div class =foto-perfil>";
        echo "<p><img src=$perfil[imagem]></p>";
        echo "</div>";
        if($_SESSION['tipo'] == true){
            $perfils = mysqli_query($con, "SELECT * FROM `tb_locador` WHERE `tb_locador`.`id_cliente` = '$_SESSION[id]'");
        }else if($_SESSION['tipo'] == false){
            $perfils = mysqli_query($con, "SELECT * FROM `tb_locatario` WHERE `tb_locatario`.`id_cliente` = '$_SESSION[id]'");
        }
        
        $perfil = mysqli_fetch_array($perfils);
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