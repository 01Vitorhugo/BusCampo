<?php
    extract($_POST);
    extract($_FILES);

    require('connect.php');

    $senha = md5($senha);

    var_dump($imagem);

    if($imagem['tmp_name'] != ""){
        $destino = "imgsclientes/".md5(time()).".jpg";
        move_uploaded_file($imagem['tmp_name'], $destino);
    }else{
        $destino = "";
    }

    if(mysqli_query($con,"INSERT INTO `tb_locador` (`nome_cliente`,`email`,`doc`,`telefone`,`imagem`,`senha`) 
    VALUES ('$nome', '$email','$doc','$tel','$destino','$senha')")){
        $msg = "<p class = sucesso>Cadastro concluído</p>";
        session_start();
        $_SESSION['msg_true'] = $msg;
    }else{
        $msg = "<p class = erro>Erro ao concluir cadastro</p>";
        session_start();
        $_SESSION['msg_false'] = $msg;
    }

 

    header("location:login.php");
?>