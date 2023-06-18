<?php
    @session_start();

    $texto = $_GET['texto'];
    
    if(!isset($_SESSION['tipo'])){
        $_SESSION['tipo'] = false;

    }

    require('connect.php');
        if(!$texto == ""){
            $quadras = mysqli_query($con, "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` where `estado` like '%$texto%' OR `rua` like '%$texto%' OR `bairro` like '%$texto%' OR `cidade` like '%$texto%' order by `nome_local`");

            echo "<div class = \"box\">";
            while($quadra = mysqli_fetch_array($quadras)){
                echo "<div class =\"sc\">";

                echo "<p id= pag>$quadra[desc_categoria] </p>";
                echo "<p id= pag>$quadra[nome_local] </p>";
                // echo "<p id= pag>$quadra[desc_local] </p>";
                echo "<p id= pagimg><img src=$quadra[img1]></p>";
                //  echo "<p id= pagimg><img src=$quadra[img2]></p>";

                echo "<div class =\"box-end\">";
                if($_SESSION['login'] == true){echo "<p id= pag>Telefone: $quadra[telefone] </p>";}
                echo "<p id= pag>CEP: $quadra[cep]</p>";
                echo "<p id= pag>Rua: $quadra[rua]</p>";
                echo "<p id= pag>Cidade: $quadra[cidade]</p>";
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
                
        }
?>