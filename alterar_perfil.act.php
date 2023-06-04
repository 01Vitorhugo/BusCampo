<?php
    session_start();                         
    require('connect.php');
    extract($_POST);
    extract($_FILES);

    if($old_img == ""){
      $endereco = "imgsclientes/".md5(time()).".jpg";
    }else{
      $endereco = $old_img; 
    }
    if($imagem['name'] != ""){
      move_uploaded_file($imagem['tmp_name'],$endereco);
    }

    if($old_senha != ""){
        $old_senha = md5($old_senha);
    }
    if($new_senha != ""){
        $new_senha = md5($new_senha);
    }

    if($old_senha == ""){
        if($_SESSION['tipo'] == true){
            if(mysqli_query($con, "UPDATE `tb_locador` SET `nome_cliente` = '$nome_cliente', `email` = '$email', `telefone` = '$tel', `doc` = '$doc', `imagem` = '$endereco' WHERE `tb_locador`.`id_cliente` = '$id_cliente';")){
                $msg = "Alterado com sucesso";
                header("location:perfil.php");   
              }else{
                $msg = "Erro na alteração";
                header("location:alterar_perfil.php");   
              }
        }else if($_SESSION['tipo'] == false){
            if(mysqli_query($con, "UPDATE `tb_locatario` SET `nome_cliente` = '$nome_cliente', `email` = '$email', `imagem` = '$endereco' WHERE `tb_locatario`.`id_cliente` = '$id_cliente';")){
                $msg = "Alterado com sucesso";
                header("location:perfil.php");   
              }else{
                $msg = "Erro na alteração";
                header("location:alterar_perfil.php");   
              }
        }
    }

    if($_SESSION['tipo'] == true){
        $query_senha = mysqli_query($con, "SELECT senha FROM `tb_locador` WHERE `tb_locador`.`id_cliente`;");
        $senha_atual = mysqli_fetch_array($query_senha);
    }else{
        $query_senha = mysqli_query($con, "SELECT senha FROM `tb_locatario` WHERE `tb_locatario`.`id_cliente`;");
        $senha_atual = mysqli_fetch_array($query_senha);
    }

    if($senha_atual['senha'] == $old_senha && $new_senha != ""){
        if($_SESSION['tipo'] == true){
            if(mysqli_query($con, "UPDATE `tb_locador` SET `nome_cliente` = '$nome_cliente', `email` = '$email', `telefone` = '$tel', `doc` = '$doc', `imagem` = '$endereco', `senha` = '$new_senha' WHERE `tb_locador`.`id_cliente` = '$id_cliente';")){
                $msg = "Alterado com sucesso";
              }else{
                $msg = "Erro na alteração";
              }
        }else if($_SESSION['tipo'] == false){
            if(mysqli_query($con, "UPDATE `tb_locatario` SET `nome_cliente` = '$nome_cliente', `email` = '$email', `imagem` = '$endereco', `senha` = '$new_senha' WHERE `tb_locatario`.`id_cliente` = '$id_cliente';")){
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