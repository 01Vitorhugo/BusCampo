<?php
    session_start();
    extract($_POST);
    extract($_FILES);

    $id = $_SESSION['id'];

    require('connect.php');

    $destino1 = "imgsquadras/".md5(time()).".jpg";
    move_uploaded_file($imagem1['tmp_name'],$destino1);

    $destino2 = "imgsquadras/".md5(time()+1).".jpg";
    move_uploaded_file($imagem2['tmp_name'],$destino2);
    
    if(mysqli_query($con,"INSERT INTO `tb_local` (`id_cliente`,`nome_local`, `id_categoria`,`desc_local`,`telefone`,`cep`,`estado`,`img1`,`img2`)
    VALUES ('$id', '$nome_local', '$id_categoria', '$desc', '$tel', '$cep', '$estado', '$destino1', '$destino2')")){
        $msg = "Cadastro da quadra concluído";
    }else{
        $msg = "Erro ao cadastrar quadra";
    }

    
    $_SESSION['msg'] = $msg;

    header("location:cad_local.php");
?>