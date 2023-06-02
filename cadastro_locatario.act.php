<?php
    extract($_POST);

    require('connect.php');

    $senha = md5($senha);

    $destino = "imgsclientes/".md5(time()).".jpg";
    move_uploaded_file($imagem['tmp_name'], $destino);

    if(mysqli_query($con,"INSERT INTO `tb_locatario` (`nome_cliente`,`email`,`imagem`,`senha`) 
    VALUES ('$nome', '$email', '$destino', '$senha')")){
        $msg = "Cadastro concluído";
    }else{
        $msg = "Erro ao concluir cadastro";
    }

    session_start();
        $_SESSION['msg'] = $msg;

    header("location:login.php");
?>