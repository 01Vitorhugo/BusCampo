<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
    $_SESSION['id'] = '0';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/listcad.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list.css">
    <title>Lista de Quadras</title>
</head>
<body>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <?php
        require('connect.php');
        echo "<div class =\"box\">";
        $quadras = mysqli_query($con, "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` INNER JOIN `tb_estado` ON `tb_local`.`id_estado` = `tb_estado`.`id_estado` order by `nome_local`");
        while($quadra = mysqli_fetch_array($quadras)){
        echo "<div class =\"sc\">";
        echo "<p id= pag>Nome: $quadra[nome_local] </p>";
        echo "<p id= pag>Modalidade: $quadra[desc_categoria] </p>";
        echo "<p id= pag>Local: $quadra[desc_local] </p>";
        echo "<p id= pag>Telefone: $quadra[telefone] </p>";
        echo "<p id= pag>Cep: $quadra[cep] </p>";
        echo "<p id= pag>Estado: $quadra[nome_estado] </p>";
        echo "<p><img src=$quadra[img1]></p>";
        echo "<p><img src=$quadra[img2]></p>";
        if($_SESSION['tipo'] == true && $_SESSION['id'] == $quadra['id_cliente']){
            echo"<p><a href=alterar.php?id_local=$quadra[id_local]>Alterar</a></p>";
        }
        echo "</div>";
        }
        echo "</div>";
        
    ?>
</body>
</html>