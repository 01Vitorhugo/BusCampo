<?php require('sec.php'); @session_start();?>
<?php
@include('menu.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cad-local.css">
    <title>Cadastro de Quadras</title>
</head>
<body>
   
    <div class="formu-cad">
    <div class="name-formu">
            <h2>Cadastro de Quadras</h2>
        </div>
        <div class="formu">
            <form action="cad_local.act.php" method="post" enctype="multipart/form-data">
            <p>Nome do local <input type="text" name="nome_local" required></p>
            <p>Categoria <select name="id_categoria" id="select">
            <option>Escolher</option>
                <option value="1">Futebol</option>
                <option value="2">Futsal</option>
                <option value="3">Vôlei</option>
                <option value="4">Basquete</option>
                <option value="5">Poliesportiva</option>
                <option value="6">Areia</option>
            </select></p>
            <p>Descrição <input type="text" name="desc" required></p>
            <p>Telefone do local <input type="text" name="tel" required></p>
            <p>Rua <input type="text" name="rua"></p>
            <p>Número <input type="number" name="numero"></p>
            <p>bairro <input type="text" name="bairro"></p>
            <p>CEP <input type="text" name="cep" required></p>
            <p>Estado <select name="id_estado" id="select">
                <option>Escolher</option>
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
            <p>Imagem 1 <input type="file" name="imagem1" required></p>
            <p>Imagem 2 <input type="file" name="imagem2" required></p>
            <p><input type="submit" id="botao" value="Cadastrar-Se" required></p>
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