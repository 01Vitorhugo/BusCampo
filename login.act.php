<?php
    session_start();

    require('connect.php');

    extract($_POST);
    $senha = md5($senha);

    $busca1 = mysqli_query($con, "select * from `tb_locador` where `email` = '$email'");
    $busca2 = mysqli_query($con, "select * from `tb_locatario` where `email` = '$email'");


    if($busca1->num_rows == 1){
        $login = mysqli_fetch_array($busca1);
        if($senha === $login['senha']){
            $_SESSION['login'] = true;
            $_SESSION['nome'] = $login['nome_cliente'];
            $_SESSION['id'] = $login['id_cliente'];
            $_SESSION['tipo'] = true;
            $target = "location:index.php";
        }else{
            $target = "location:login.php";
            $msg = "Email ou senha invalidos";
        }
    }else if($busca2->num_rows == 1){
        $login = mysqli_fetch_array($busca2);
        if($senha === $login['senha']){
            $_SESSION['login'] = true;
            $_SESSION['nome'] = $login['nome_cliente'];
            $_SESSION['id'] = $login['id_cliente'];
            $_SESSION['tipo'] = false;
            $target = "location:index.php";
        }else{
            $target = "location:login.php";
            $msg = "Email ou senha invalidos";
        }
    }else{
        $target = "location:login.php";
        $msg = "Email ou senha invalidos";
    }
    $_SESSION['msg'] = $msg;
    header($target);
?>