<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar informações</title>
</head>
<?php
    require('connect.php');
    $id_local = $_GET['id_local'];
    $quadras = mysqli_query($con, "select * from `tb_local` where `id_local` = '$id_local'");
    $quadra = mysqli_fetch_array($quadras);
?>
<body>
    <div class="formu-cad">
        <div class="name-formu">
            <h2>Alteração de Quadras</h2>
        </div>


        <div class="formu">
            <form action="alterar.act.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_local" value="<?php echo $id_local?>">
            <input type="hidden" name="old_img1" value="<?php echo $quadra['img1']?>">
            <input type="hidden" name="old_img2" value="<?php echo $quadra['img2']?>">
            <p>nome do local<input type="text" name="nome_local" value="<?php echo $quadra['nome_local']?>"></p>
            <p>descrição <input type="text" name="desc" value="<?php echo $quadra['desc_local']?>"></p>
            <p>telefone do local <input type="text" name="tel" value="<?php echo $quadra['telefone']?>"></p>
            <p>cep <input type="text" name="cep" value="<?php echo $quadra['cep']?>"></p>
            <p>estado <input type="text" name="estado" value="<?php echo $quadra['estado']?>"></p>
            <p>Imagem 1 <input type="file" name="imagem1"></p>
            <p>Imagem 2 <input type="file" name="imagem2"></p>
            <p><input type="submit" id="botao" value="Alterar"></p>
            </form>
            <button onclick="confirmar(<?php echo $id_local?>)" >Deletar</button>
        </div>
</body>
<script>
        function confirmar(id_local){
            resposta = confirm("Deseja excluir o resgistro "+id_local+"?");

            if(resposta == true){
                window.location = "excluir_local.act.php?id_local="+id_local;
            }
        }
        
        
 </script>
</html>