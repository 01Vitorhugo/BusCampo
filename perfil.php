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

<?php
        require('connect.php');
        echo "<div class =\"box\">";
        if($_SESSION['tipo'] == true){
            $perfils = mysqli_query($con, "SELECT * FROM `tb_locador` WHERE `tb_locador`.`id_cliente` = '$_SESSION[id]'");
        }else if($_SESSION['tipo'] == false){
            $perfils = mysqli_query($con, "SELECT * FROM `tb_locatario` WHERE `tb_locatario`.`id_cliente` = '$_SESSION[id]'");
        }
        
        $perfil = mysqli_fetch_array($perfils);
        echo "<div class =\"sc\">";
        echo "<p id= pag>Nome: $perfil[nome_cliente] </p>";
        echo "<p id= pag>Email: $perfil[email] </p>";
        echo "<p id= pag>Senha: $perfil[senha] </p>";
        echo "<a href=>Alterar Perfil</a>";
        echo "</div>";
        echo "</div>";
        
    ?>

</body>
</html>