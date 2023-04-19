<?php
include('menu.php');
// session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
<div class="menu"></div>
    <div class="form">
        <div class="txt">
            <h3>QUE COMECE OS</h3>
            <h1>JOGOS</h1>
        </div>
        <div class="dados">
        
        <div class="formula">
        <div class="name-formu">
            <h2>Cadastro Pessoal</h2>
        </div>
        
            <form action="cadastro.act.php" method="post">
            <p>Nome: <input type="text" name="nome"  required></p>
            <p>Email: <input type="text" name="email"  required></p>
            <p>Cpf/cnpj: <input type="text" name="doc"  required></p>
            <p>Telefone: <input type="text" name="tel"  required></p>
            <p>Senha: <input type="password" name="senha"  required></p>
            <p><input type="submit" id="botao" value="Cadastrar"></p>
            </form>
        </div>
        </div>
    </div>
     
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>