<?php require('sec.php'); @session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro de Quadras</title>
</head>
<body>
    <div class="formu-cad">
    <div class="name-formu">
            <h2>Cadastro de Quadras</h2>
        </div>
        <div class="formu">
            <form action="cad_local.act.php" method="post" enctype="multipart/form-data">
            <p>nome do local <input type="text" name="nome_local"></p>
            <p>Categoria <select name="id_categoria">
                <option value="1">Futebol</option>
                <option value="2">Futsal</option>
                <option value="3">Vôlei</option>
                <option value="4">Basquete</option>
                <option value="5">Poliesportiva</option>
            </select></p>
            <p>descrição <input type="text" name="desc"></p>
            <p>telefone do local <input type="text" name="tel"></p>
            <p>cep <input type="text" name="cep"></p>
            <p>estado <input type="text" name="estado"></p>
            <p>Imagem 1 <input type="file" name="imagem1"></p>
            <p>Imagem 2 <input type="file" name="imagem2"></p>
            <p><input type="submit" id="botao" value="Cadastrar-Se"></p>
            </form>
        </div>
        <div class="msg">
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
        </div>        




    </div>
</body>
</html>