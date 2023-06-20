<?php
include('menu.php');
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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Teko:wght@600&display=swap" rel="stylesheet">
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
            <h2>Cadastro Locatário</h2>
        </div>
        
            <form action="cadastro_locatario.act.php" method="post" enctype="multipart/form-data">
            <p>Nome <input type="text" name="nome"  required></p>
            <p>Email <input type="text" name="email"  required></p>
            <p>Senha <input type="password" name="senha"  required></p>
            <p>Imagem para perfil: <input type="file" name="imagem"></p>
            <p><input type="submit" id="botao" value="Cadastrar"></p>
            </form>
        </div>
        </div>
    </div>
     
    </div>

