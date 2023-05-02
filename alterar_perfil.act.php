<?php
    session_start();                         
    require('connect.php');
    extract($_POST);

    $old_senha = md5($old_senha);
    $new_senha = md5($new_senha);

    if($_SESSION['tipo'] == true){
        $query_senha = mysqli_query($con, "SELECT senha FROM `tb_locador` WHERE `tb_locador`.`id_cliente`;");
        $senha_atual = mysqli_fetch_array($query_senha);
    }else{
        $query_senha = mysqli_query($con, "SELECT senha FROM `tb_locatario` WHERE `tb_locatario`.`id_cliente`;");
        $senha_atual = mysqli_fetch_array($query_senha);
    }

    if($senha_atual['senha'] == $old_senha){
        if($_SESSION['tipo'] == true){
            if(mysqli_query($con, "UPDATE `tb_locador` SET `nome_cliente` = '$nome_cliente', `email` = '$email', `telefone` = '$tel', `doc` = '$doc', `senha` = '$new_senha' WHERE `tb_locador`.`id_cliente` = '$id_cliente';")){
                $msg = "Alterado com sucesso";
              }else{
                $msg = "Erro na alteração";
              }
        }else if($_SESSION['tipo'] == false){
            if(mysqli_query($con, "UPDATE `tb_locatario` SET `nome_cliente` = '$nome_cliente', `email` = '$email', `senha` = '$new_senha' WHERE `tb_locatario`.`id_cliente` = '$id_cliente';")){
                $msg = "Alterado com sucesso";
              }else{
                $msg = "Erro na alteração";
              }
        }
    }else{
       header("location:alterar_perfil.php");   
    }



    header("location:perfil.php");   
?>