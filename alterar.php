<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/alterar.css">
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
            <p>Nome do local:</p>
            <p><input type="text" name="nome_local" value="<?php echo $quadra['nome_local']?>"></p>
            <p>Descrição:</p>
            <p> <input type="text" name="desc" value="<?php echo $quadra['desc_local']?>"></p>
            <p>Telefone do local: </p>
            <p><input type="text" name="tel" value="<?php echo $quadra['telefone']?>"></p>
            <p>Cep: </p>
            <p><input type="text" name="cep" value="<?php echo $quadra['cep']?>">
            <p>Rua: </p>
            <p><input type="text" name="rua" value="<?php echo $quadra['rua']?>">
            <p>Número: </p>
            <p><input type="text" name="numero" value="<?php echo $quadra['numero']?>">
            <p>Bairro: </p>
            <p><input type="text" name="bairro" value="<?php echo $quadra['bairro']?>">
            <p>Estado: <select name="id_estado">
                <option value="<?php echo $quadra['id_estado']?>" selected></option>
                <option value="1">Acre</option>
                <option value="2">Alagoas</option>
                <option value="3">Amapá</option>
                <option value="4">Amazonas</option>
                <option value="5">Bahia</option>
                <option value="6">Ceará</option>
                <option value="7">Espírito Santo</option>
                <option value="8">Goiás</option>
                <option value="9">Maranhão</option>
                <option value="10">Mato Grosso</option>
                <option value="11">Mato Grosso do Sul</option>
                <option value="12">Minas Gerais</option>
                <option value="13">Pará</option>
                <option value="14">Paraíba</option>
                <option value="15">Paraná</option>
                <option value="16">Pernambuco</option>
                <option value="17">Piauí</option>
                <option value="18">Rio de Janeiro</option>
                <option value="19">Rio Grande do Norte</option>
                <option value="20">Rio Grande do Sul</option>
                <option value="21">Rondônia</option>
                <option value="22">Roraima</option>
                <option value="23">Santa Catarina</option>
                <option value="24">São Paulo</option>
                <option value="25">Sergipe</option>
                <option value="26">Tocantins</option>
                <option value="27">Distrito Federal</option>
            </select></p>
            <p>Imagem 1 </p>
            <p><input type="file" name="imagem1"></p>
            <p>Imagem 2 </p>
            <p><input type="file" name="imagem2"></p>
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