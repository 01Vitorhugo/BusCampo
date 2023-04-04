<?php
    @session_start();

    $texto = $_GET['texto'];

    require('connect.php');
        if(!$texto == ""){
            $quadras = mysqli_query($con, "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` where `desc_categoria` like '%$texto%'");

            echo "<div class = \"box\">";
            while($quadra = mysqli_fetch_array($quadras)){
                echo "<div class =\"sc\">";
                echo "<p id= pag>$quadra[nome_local] </p>";
                echo "<p id= pag>$quadra[desc_local] </p>";
                echo "<p id= pag>$quadra[estado] </p>";
                echo "<p id= pagimg><img src=$quadra[img1]></p>";
                // if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
                    
                // }else{
                //     echo"<p><a href=alterar.php?cod=$skin[codigo]>Alterar</a></p>";
                //     echo"<p><a href=javascript:confirmar($skin[codigo])>Excluir</a></p>";
                // }
                //echo "</div>";
                }
                echo "</div>";
                
        }
?>