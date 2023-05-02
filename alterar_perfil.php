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
        <div class="name-formu">
            <h2>Alteração de Perfil</h2>
        </div>


        <div class="formu">
            <form action="alterar_perfil.act.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_cliente" value="<?php echo $id_cliente?>">
            <p>Nome: </p>
            <p><input type="text" name="nome_cliente" value="<?php echo $perfil['nome_cliente']?>"></p>
            <p>email: </p>
            <p> <input type="text" name="email" value="<?php echo $perfil['email']?>"></p>
            <?php
            if($_SESSION['tipo'] == true){
            echo "<p>CPF/CNPJ: </p>";
            echo "<p> <input type=text name=doc value=$perfil[doc]></p>";
            echo "<p>telefone: </p>";
            echo "<p> <input type=text name=tel value=$perfil[telefone]></p>";
            }
            ?>
            <p>Senha atual: </p>
            <p><input type="password" name="old_senha"></p> 
            <p>Nova senha: </p>
            <p><input type="password" name="new_senha"></p>     
            <p><input type="submit" id="botao" value="Alterar"></p>
            </form>
        </div>
</body>
</html>