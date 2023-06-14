<?php
    extract($_POST);
    extract($_FILES);

    require('connect.php');

    $senha = md5($senha);

    $destino = "imgsclientes/".md5(time()).".jpg";
    move_uploaded_file($imagem['tmp_name'], $destino);

    if(mysqli_query($con,"INSERT INTO `tb_locador` (`nome_cliente`,`email`,`doc`,`telefone`,`imagem`,`senha`) 
    VALUES ('$nome', '$email','$doc','$tel','$destino','$senha')")){
        $msg = "Cadastro concluído";
        session_start();
        $_SESSION['msg_true'] = $msg;
    }else{
        $msg = "Erro ao concluir cadastro";
        session_start();
        $_SESSION['msg_false'] = $msg;
    }

 

    header("location:login.php");
?>