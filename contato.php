<?php
@include('menu.php');
@require('sec.php');
require('connect.php');

extract($_GET);

$quadra = mysqli_query($con, "SELECT * FROM `tb_local` INNER JOIN `tb_categoria` ON `tb_local`.`id_categoria` = `tb_categoria`.`id_categoria` INNER JOIN `tb_locador` ON `tb_local`.`id_cliente` = `tb_locador`.`id_cliente` where `id_local` = '$id_local'");
$quadra = mysqli_fetch_array($quadra);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contato.css">
    <title>Contato</title>
</head>
<body>

<div class="lista">

    <h3><p>Proprietário</p></h3>    
    <h5><p><?php echo $quadra['nome_cliente'] ?></p> </h4>

    <h3><p> Ligue para nós: </p></h3>    
    <h5><p><?php echo $quadra['4'] ?></p></h5>

    <h3><p> Localização: </p></h3>  
    <h5><p><?php echo "$quadra[bairro]  -  $quadra[cidade]"?></p></h4>

</div>


   
    <div class="dir">
        <div class="conteudo">
            <?php
            echo  "<img src=$quadra[img1]>"
            ?>

        </div>

        </div>
    </div>

 
</body>
</html>