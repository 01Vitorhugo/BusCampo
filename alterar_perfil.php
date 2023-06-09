<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar informações</title>
    <link rel="stylesheet" href="css/alterar.css">
    <link rel="stylesheet" href="css/query-alterar.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Teko:wght@600&display=swap" rel="stylesheet">
</head>

<?php
    @session_start();
    require('connect.php');
    $id_cliente = $_GET['id_cliente'];
    if($_SESSION['tipo'] == true){
        $perfis = mysqli_query($con, "select * from `tb_locador` where `id_cliente` = '$id_cliente'");
    }else if($_SESSION['tipo'] == false){
        $perfis = mysqli_query($con, "select * from `tb_locatario` where `id_cliente` = '$id_cliente'");
    }
    $perfil = mysqli_fetch_array($perfis);
?>
<body>
    <div class="formu-cad">
        <div class="formu">
        <div class="name-formu">
            <h2>Alteração de Perfil</h2>
        </div>
            <form action="alterar_perfil.act.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_cliente" value="<?php echo $id_cliente?>">
            <input type="hidden" name="old_img" value="<?php echo $perfil['imagem']?>">
            <p>Nome </p>
            <p><input type="text" name="nome_cliente" value="<?php echo $perfil['nome_cliente']?>"></p>
            <p>email </p>
            <p> <input type="text" name="email" value="<?php echo $perfil['email']?>"></p>
            <?php
            if($_SESSION['tipo'] == true){
            echo "<p>CPF/CNPJ: </p>";
            echo "<p> <input type=text name=doc value=$perfil[doc]></p>";
            echo "<p>telefone: </p>";
            echo "<p> <input type=text name=tel value=$perfil[telefone]></p>";
            }
            ?>
            <p>Senha atual </p>
            <p><input type="password" name="old_senha"></p> 
            <p>Nova senha </p>
            <p><input type="password" name="new_senha"></p>     
            <p>Foto de perfil </p>
            <p><input type="file" name="imagem"></p>
            <p><input type="submit" id="botao" value="Alterar"></p>
            </form>
            <button id="button-cancelar"><a href="perfil.php">Cancelar</a></button>
        </div>
</body>
</html>