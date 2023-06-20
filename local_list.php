<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
    $_SESSION['id'] = '0';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="css/query-list.css">
    <title>Lista de Quadras</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Teko:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    @include('menu_local_list.php');
    ?>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        if(!isset($_SESSION['tipo'])){
            $_SESSION['tipo'] = false;

        }
    ?>
    <?php
        extract($_GET);
        if($id_categoria < 10){
            $sql = "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` WHERE `tb_local`.`id_categoria` = '$id_categoria' order by `nome_local`";
        }else if($id_categoria == 10){
            $sql = "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` WHERE `tb_local`.`id_categoria` = '2' OR `tb_local`.`id_categoria` = '3' OR `tb_local`.`id_categoria` = '4' order by `nome_local`";
        }else if($id_categoria == 11){
            $sql = "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria`";
        }

        require('connect.php');
        echo "<div class =\"box\">";
        $quadras = mysqli_query($con, $sql);
        while($quadra = mysqli_fetch_array($quadras)){
        echo "<div class =\"sc\">";

        echo "<p id= pag>$quadra[desc_categoria] </p>";
        echo "<p id= pag>$quadra[nome_local] </p>";
        if($quadra['img1'] != ""){
        echo "<p><img src=$quadra[img1]></p>";
    }
        

        echo "<div class =\"box-end\">";
        if($_SESSION['login'] == true){echo "<p id= pag>Telefone: $quadra[telefone] </p>";}
        echo "<p id= pag>Cep: $quadra[cep] </p>";
        echo "<p id= pag>Rua: $quadra[rua] </p>";
        echo "<p id= pag>Cidade: $quadra[cidade] </p>";
        echo "<p id= pag>Estado: $quadra[estado] </p>";
        echo "</div>";
        
    

        if($_SESSION['tipo'] == true && $_SESSION['id'] == $quadra['id_cliente']){
            echo"<p><a href=alterar.php?id_local=$quadra[id_local]>Alterar</a></p>";
        }else{
            echo "<p><a href=contato.php?id_local=$quadra[id_local]>Contato</a></p>";

        }
        echo "</div>";
        }
        echo "</div>";
        
    ?>

    
    <div class="seta-fixed" id="seta">
        <a href="#"><img src="imgs/seta-para-cima.png" alt=""></a>
    </div>

    <script src="js/script-local_list.js"></script>
</body>
</html>