<?php
    extract($_POST);

    require('connect.php');

    $senha = md5($senha);

    if(mysqli_query($con,"INSERT INTO `tb_locatario` (`nome_cliente`,`email`,`senha`) 
    VALUES ('$nome', '$email','$senha')")){
        $msg = "Cadastro concluído";
    }else{
        $msg = "Erro ao concluir cadastro";
    }

    session_start();
        $_SESSION['msg'] = $msg;

    header("location:login.php");
?>