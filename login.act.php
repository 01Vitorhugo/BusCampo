<?php
    session_start();

    require('connect.php');

    extract($_POST);
    $senha = md5($senha);

    $busca = mysqli_query($con, "select * from `tb_locador` where `email` = '$email'");

    if($busca->num_rows == 1){
        $login = mysqli_fetch_array($busca);
        if($senha === $login['senha']){
            $_SESSION['login'] = true;
            $_SESSION['nome'] = $login['nome_cliente'];
            $_SESSION['id'] = $login['id_cliente'];
            $target = "location:local_list.php";
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